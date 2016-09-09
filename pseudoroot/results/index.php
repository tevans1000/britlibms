<?php

require_once( '../../../async/conf.php' );

// Check if visitor landed here from invalid manuscript / illumination request
$not_found = '';
if (isset($_SESSION['not_found'])){
    switch ($_SESSION['not_found']){
        case 'm': case 'i':  // No other values should be possible
            $not_found = $_SESSION['not_found'];
        default:
            unset($_SESSION['not_found']);
    }
}

// Define the list of filters
define('MS_FILTER_LIST', serialize(['region', 'collection', 'language',
                                    'attribution', 'scribe', 'date',
                                    'script']));
// Define acceptable GET parameters
define('GETTABLES', serialize(['grouping', 'page', 'region',
                               'collection', 'language', 'attribution',
                               'scribe', 'yearstart', 'yearend',
                               'script', 'sort']));
define('SORTINGS', serialize(['i' => ['rchron', 'chron', 'caption',
                                      'attribution', 'rcaption',
                                      'rattribution'],
                              'p' => ['rchron', 'chron', 'title',
                                      'author', 'rtitle', 'rauthor'],
                              'm' => ['rchron', 'chron'] ]));
// Pagination constant
define('RESULTS_PER_PAGE', 20);
// Constant limiting number of images
define('IMAGES_PER_RESULT', 12);

// retrieve GET parameters
$params = array();
foreach (unserialize(GETTABLES) as $name){
    switch ($name){
        case 'grouping':
            if (isset($_GET[$name])){
                switch (strtolower($_GET[$name])){
                    case 'm': case 'p':  // Grouping is by manuscript or part
                        $params[$name] = strtolower($_GET[$name]);
                        break;
                    default:
                        $params[$name] = 'i';  // Grouping is by image
                }
            } else {
                $params[$name] = 'i';  // default grouping is by image
            }
            break;
        case 'sort':
            // set this later: foreach loop must finish otherwise
            //                 grouping may not be set
            break;
        case 'page':
            if (isset($_GET['page'])){
                if ((int)$_GET[$name]>0){
                    $params[$name] = (int)$_GET[$name];
                } else {
                    $params[$name] = 1;  // page 1 always exists
                }
            } else {
                $params[$name] = 1;  // must set page no. for smarty
            }
            break;
        case 'collection': case 'yearstart': case 'yearend':
            if (isset($_GET[$name])){
                $params[$name] = (int)$_GET[$name];
                // Some records have StartDate/EndDate = 0
                // but this always means NULL, so we unset
                if (($name == 'yearstart' or $name == 'yearend')
                    and $params[$name] <= 0){
                    unset($params[$name]);
                }
            }
            break;
        default:
            if (isset($_GET[$name])){
                // all other allowed params should be json arrays
                $unchecked_get_array = json_decode($_GET[$name]);
                //echo(json_encode($_GET[$name]));
                if (array_keys($unchecked_get_array) == range(0, count($unchecked_get_array)-1)){
                    $params[$name] = array_filter($unchecked_get_array, 'is_int');
                } else {
                    // associative array; not allowed
                    $params[$name] = array();
                }
            } else {
                // must set to something for smarty
                $params[$name] = array();
            }
    }
}
// get sorting order
if (isset($_GET['sort'])){
    if (in_array(strtolower($_GET['sort']), unserialize(SORTINGS)[$params['grouping']])){
        //echo(strtolower($_GET['sort']) . ' in ' . SORTINGS . '<br>');
        $params['sort'] = strtolower($_GET['sort']);
    } else {
        //echo(strtolower($_GET['sort']) . ' not in ' . SORTINGS . '<br>');
        $params['sort'] = 'rchron';  // default sorting is reverse chronological
    }
} else {
    //echo('$_GET["sort"] not set<br>');
    $params['sort'] = 'rchron';  // must set to something for smarty
}

$id_type = file_get_contents(RESULT_SQL_DIR . $params['grouping'] . '/idtype');

// function to bind variables in the subquery
function bind_subq($stmt){
    global $params;
    foreach ($params as $name => &$value){
        switch ($name){
            case 'grouping': case 'page': case 'sort':
                // none of these affect bindings
                break;
            case 'collection': case 'yearstart': case 'yearend':
                $stmt->bindParam(":$name", $value, PDO::PARAM_INT);
                break;
            default:
                // all other params are arrays
                foreach ($value as $index => &$component){
                    $bindstr = ':' . $name . $index;
                    $stmt->bindParam($bindstr, $component, PDO::PARAM_INT);
                }
        }
    }
}

// Construct result set subquery string
// Main SELECT clause & (start of) FROM clause:
$subqstr = file_get_contents(RESULT_SQL_DIR . $params['grouping'] . '.sql');
// Additional JOINs as required:
$part_joined = false;
foreach (array_keys($params) as $param){
    switch ($param){
        case 'collection':
            $subqstr .= file_get_contents(RESULT_SQL_DIR . 'join/manuscript.sql');
            break;
        case 'yearstart': case 'yearend':
            if (!$part_joined){
                $subqstr .= file_get_contents(RESULT_SQL_DIR . 'join/part.sql');
                $part_joined = true;
            }
            break;
        default:
            // do nothing
    }
}
// WHERE clause
$subqstr .= 'WHERE TRUE ';
// Additional conditions as required
foreach ($params as $name => &$value){
    switch ($name){
        case 'grouping': case 'page': case 'sort':
            // do nothing
            break;
        case 'collection': case 'yearstart': case 'yearend':
            $subqstr .= file_get_contents(RESULT_SQL_DIR . 'where/' . $name . '.sql');
            break;
        default:
            // all other params are arrays
            foreach ($value as $index => &$component){
                $bindstr = ':' . $name . $index;
                $subqstr .= str_replace(":$name", $bindstr, file_get_contents(RESULT_SQL_DIR . 'where/' . $name . '.sql'));
            }
    }
}
//echo($subqstr);


// Find total result count
$qstr = file_get_contents( RESULT_SQL_DIR . $params['grouping'] .'/count.sql' );
$qstr .= "WHERE $id_type IN ($subqstr)";
//echo("<br>$qstr");
$stmt = $db->prepare($qstr);
// conditional bindings
bind_subq($stmt);
$stmt->execute();
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt -> fetchAll();
$rescount = $result[0]['rescount'];

// Set up variables for pagination
$maxpage = ceil($rescount/RESULTS_PER_PAGE);
if ($params['page'] > $maxpage){
    $params['page'] = 1;
}
$offset = RESULTS_PER_PAGE * ($params['page'] - 1);


// Do SQL for result set
// Create and prepare query string
$qstr  = file_get_contents(RESULT_SQL_DIR . $params['grouping']
                           . '/select.sql'
                           );
switch ($params['sort']){
    case 'caption': case 'rcaption':
        $qstr .= file_get_contents(RESULT_SQL_DIR . $params['grouping']
                                   . '/caption.sql'
                                   );
        break;
    case 'title': case 'rtitle':
        $qstr .= file_get_contents(RESULT_SQL_DIR . $params['grouping']
                                   . '/title.sql'
                                   );
        break;
    case 'attribution': case 'rattribution':
        $qstr .= file_get_contents(RESULT_SQL_DIR . $params['grouping']
                                   . '/attrib.sql'
                                   );
        break;
    case 'author': case 'rauthor':
        $qstr .= file_get_contents(RESULT_SQL_DIR . $params['grouping']
                                   . '/author.sql'
                                   );
        break;
    default:
        // do nothing
}
$qstr .= file_get_contents(RESULT_SQL_DIR . $params['grouping']
                           . '/from.sql'
                           );
if ($params['grouping'] == 'i'){
    $qstr .= file_get_contents(RESULT_SQL_DIR . 'join/part.sql');
}
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
switch ($params['sort']){
    case 'rchron': case 'chron':
        if ($params['grouping'] == 'm'){
            // potentially several start & end dates
            $qstr .= file_get_contents(RESULT_SQL_DIR . 'group_by/'
                                       . $params['grouping'] . '.sql'
                                       );
            $qstr .= file_get_contents(RESULT_SQL_DIR . 'order_by/'
                                       . $params['sort']
                                       . $params['grouping'] . '.sql'
                                       );
        } else {
            $qstr .= file_get_contents(RESULT_SQL_DIR . 'order_by/'
                                       . $params['sort'] . '.sql'
                                       );
        }
        break;
    default:
        $qstr .= file_get_contents(RESULT_SQL_DIR . 'order_by/'
                                   . $params['sort'] . '.sql'
                                   );
}
$qstr .= 'LIMIT ' . RESULTS_PER_PAGE . ' ';
$qstr .= 'OFFSET :offset ';
//echo($qstr);
$resstmt = $db->prepare($qstr);
// Bind parameters
bind_subq($resstmt);
$resstmt->bindParam(':offset',$offset,PDO::PARAM_INT);
// Execute and fetch
$resstmt->execute();
$result = $resstmt ->fetchAll(PDO::FETCH_NUM);
// Image thumbnails
if ($params['grouping'] != 'i'){
    $images = array();
    foreach ($result as $record){
        $qstr  = file_get_contents(RESULT_SQL_DIR
                                   . 'thumbnails/select.sql'
                                   );
        $qstr .= "WHERE $id_type = " . $record[0] . " ";
        $qstr .= file_get_contents(RESULT_SQL_DIR
                                   . 'thumbnails/order_by.sql'
                                   );
        $qstr .= 'LIMIT ' . IMAGES_PER_RESULT . ' ';
        //echo("$qstr<br>");
        $imgstmt = $db->prepare($qstr);
        $imgstmt->execute();
        $images[$record[0]] = $imgstmt->fetchAll(PDO::FETCH_NUM);
    }
}
// Filters
// Create and prepare query string
foreach (unserialize(MS_FILTER_LIST) as $filter){
    switch ($filter){
        case 'date':
            // Determine min start and max end dates in current subset
            $qstr  = file_get_contents(FILTER_SQL_DIR
                                       . "$filter/bounds.sql"
                                       );
            $qstr .= " AND v.$id_type IN ( $subqstr ) ";
            //echo($qstr);
            $stmt = $db->prepare($qstr);
            bind_subq($stmt);
            $stmt->execute();
            $minimax = $stmt->fetchAll(PDO::FETCH_NUM);
            $min = isset($params['yearstart']) ?
                   max($params['yearstart'], $minimax[0][0])
                   : $minimax[0][0];
            $max = isset($params['yearend']) ?
                   min($params['yearend'], $minimax[0][1])
                   : $minimax[0][1];
            // Determine appropriate granularity
            $year_diff = $max - $min;
            if ($year_diff > 1158){
                $grain = 250;
            } elseif ($year_diff > 289){
                $grain = 100;
            } elseif ($year_diff > 115){
                $grain = 25;
            } elseif ($year_diff > 28){
                $grain = 10;
            } else {
                $grain = 1;
            }
            // Count results in each bin
            $dates = array();
            for ($bin = floor($min/$grain); $bin <= floor($max/$grain); $bin++){
                $binmin = max($min, $bin*$grain);
                $binmax = min($max, (1+$bin)*$grain-1);
                $qstr  = "SELECT COUNT(DISTINCT v.$id_type) ";
                $qstr .= file_get_contents(FILTER_SQL_DIR
                                           . "$filter/count/from.sql"
                                           );
                $qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
                $qstr .= file_get_contents(FILTER_SQL_DIR
                                           . "$filter/count/where.sql"
                                           );
                $stmt = $db->prepare($qstr);
                bind_subq($stmt);
                $stmt->bindParam(':lo', $binmin, PDO::PARAM_INT);
                $stmt->bindParam(':hi', $binmax, PDO::PARAM_INT);
                $stmt->execute();
                $freq = $stmt->fetchAll(PDO::FETCH_NUM)[0][0];
                //echo("$binmin&ndash;$binmax: $freq<br>");
                $dates[] = ['start' => $binmin, 'end' => $binmax,
                            'count' => $freq
                            ];
            }
            /*/ Count undatables
            if (!(isset($year_start) or isset($year_end))){
                $qstr  = "SELECT COUNT(DISTINCT v.$id_type) ";
                $qstr .= file_get_contents(FILTER_SQL_DIR . "$filter/count/undatable/from.sql");
                $qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
                $qstr .= file_get_contents(FILTER_SQL_DIR . "$filter/count/undatable/where.sql");
                $stmt = $db->prepare($qstr);
                bind_subq($stmt);
                $stmt->execute();
                $freq = $stmt->fetchAll(PDO::FETCH_NUM)[0][0];
                $dates[] = ['start' => '', 'end' => '', 'count' => $freq];
            }
            //*/
            $filter_lists[$filter] = $dates;
            break;
        default:
            $qstr  = file_get_contents(FILTER_SQL_DIR . "$filter/select.sql");
            $qstr .= ", COUNT(DISTINCT v.$id_type) ";
            if ($filter == 'scribe' or $filter == 'attribution'){
                $qstr .= file_get_contents(FILTER_SQL_DIR . "$filter/sort.sql");
            }
            $qstr .= file_get_contents(FILTER_SQL_DIR . "$filter/from.sql");
            $qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
            $qstr .= file_get_contents(FILTER_SQL_DIR . "$filter/group_by_order_by.sql");
            //echo("$qstr<br>");
            $stmt = $db->prepare($qstr);
            // bind parameters, execute, fetch
            bind_subq($stmt);
            $stmt->execute();
            $filter_lists[$filter] = $stmt->fetchAll(PDO::FETCH_NUM);
    }
}
// unset exhausted filters
foreach($filter_lists as $filter => $list){
    $facet_exhausted = true;
    foreach($list as $item){
        $count = ($filter == 'date') ? $item['count'] : $item[2];
        if ($count!=$rescount){
            // then there is at least 1 proper subset
            // determined by this filter:
            $facet_exhausted = false;
            break;
        }
    }
    if ($facet_exhausted){
        unset($filter_lists[$filter]);
    }
}

// Active filters: get names from numbers
unset($name); unset($value);  // ?! Next foreach loop won't work otherwise?
foreach ($params as $name => $value){
    switch ($name){
        case 'grouping': case 'sort': case 'page':
            // No names to get
            break;
        case 'yearstart': case 'yearend':
            $active_filters['date'][$name] = $value;
            break;
        case 'collection':
            $qstr = file_get_contents(FILTER_SQL_DIR . 'names/' . $name . '.sql');
            $stmt = $db->prepare($qstr);
            $stmt->bindParam(':id', $value, PDO::PARAM_INT);
            $stmt->execute();
            $active_filters[$name] = $stmt->fetchAll(PDO::FETCH_NUM)[0][0];
            break;
        default:
            if (!empty($value)){
                $qstr = file_get_contents(FILTER_SQL_DIR . 'names/' . $name . '.sql');
                $stmt = $db -> prepare($qstr);
                foreach ($value as $id){
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                    $active_filters[$name][$id] = $stmt->fetchAll(PDO::FETCH_NUM)[0][0];
                }
            }
    }
}

// Assign variables
$smarty->assign('not_found',$not_found);
$smarty->assign('firstret',1+$offset);
$smarty->assign('lastret',count($result)+$offset);
$smarty->assign('pageno',$params['page']);
$smarty->assign('maxpage',$maxpage);
$smarty->assign('rescount',$rescount);
$smarty->assign('reslist',$result);
if ($params['grouping'] != 'i'){
    $smarty->assign('images',$images);
}
$smarty->assign('placeholder_image_url', PLACEHOLDER_IMAGE_URL);
foreach ($params as $name => &$value){
    if (is_array($value)){
        $array_params[$name] = json_encode($value, JSON_NUMERIC_CHECK);
        unset($params[$name]);
    }
}
$smarty->assign('get', $params);
$smarty->assign('get_arrays', $array_params);
$smarty->assign('filter_lists', $filter_lists);
$smarty->assign('no_filters', !isset($active_filters));
$smarty->assign('sortings', unserialize(SORTINGS)[$params['grouping']]);
if (isset($active_filters)){
    $smarty->assign('active_filters', $active_filters);
}

// Display
$smarty->display('index.tpl');

?>
