<?php

require_once( '../../../async/conf.php' );

// Define the list of filters
define('MS_FILTER_LIST', serialize(['region', 'collection', 'language',
                                    'attribution', 'scribe', 'date',
                                    'script']));
// Define acceptable GET parameters
define('GETTABLES', serialize(['grouping', 'page', 'region',
                               'collection', 'language', 'attribution',
                               'scribe', 'yearstart', 'yearend',
                               'script']));
// Pagination constant
define('RESULTS_PER_PAGE', 20);

// retrieve GET parameters
$params = array();
foreach (unserialize(GETTABLES) as $name){
    switch ($name){
        case 'grouping':
            if (isset($_GET[$name])){
                switch (strtolower($_GET[$name])){
                    case 'i': case 'm':
                        $params[$name] = strtolower($_GET[$name]);
                        break;
                    default:
                        $params[$name] = 'p';
                }
            } else {
                $params[$name] = 'p';
            }
            break;
        case 'page':
            if (isset($_GET['page'])){
                $params[$name] = (int)$_GET[$name];
            } else {
                $params[$name] = 1;
            }
        default:
            if (isset($_GET[$name])){
                $params[$name] = (int)$_GET[$name];
            }
    }
}
/*
foreach ($params as $k => &$v){
    echo("$k: $v<br>");
}
// Determine results page grouping
if ( empty($_GET['grouping']) ){
    $grouping = 'p';
    $_GET['grouping'] = 'p';  // for smarty
} else {
    switch ( $_GET['grouping'] ){
        case 'm': // by manuscript
        case 'M':
        case 'p': // by part
        case 'P':
        case 'i': // by image
        case 'I':
            $grouping = strtolower($_GET['grouping']);
            break;
        default:
            $grouping = 'p';
            $_GET['grouping'] = 'p';  // for smarty
    }
}
*/
$grouping = $params['grouping'];
$id_type = file_get_contents(RESULT_SQL_DIR . $params['grouping'] . '/idtype');

/*/ Set up parameters for binding
if ( !empty($_GET['region']) ){
    $region = (int)$_GET['region'];
}
if ( !empty($_GET['collection']) ){
    $coll = (int)$_GET['collection'];
}
if ( !empty($_GET['language']) ){
    $lang = (int)$_GET['language'];
}
if ( !empty($_GET['attribution']) ){
    $attr = (int)$_GET['attribution'];
}
if ( !empty($_GET['scribe']) ){
    $scribe = (int)$_GET['scribe'];
}
if ( !empty($_GET['yearstart']) ){
    $year_start = (int)$_GET['yearstart'];
}
if ( !empty($_GET['yearend']) ){
    $year_end = (int)$_GET['yearend'];
}
if ( !empty($_GET['script']) ){
    $script = (int)$_GET['script'];
}
*/
// function to bind variables in the subquery
function bind_subq($stmt){
    global $params;
    foreach ($params as $name => &$value){
        switch ($name){
            case 'grouping': case 'page':
                break;
            default:
                $stmt->bindParam(":$name", $value, PDO::PARAM_INT);
        }
    }
    /*
    global $region;
    global $coll;
    global $lang;
    global $attr;
    global $scribe;
    global $year_start;
    global $year_end;
    global $script;
    if (isset($region)){
        $stmt->bindParam(':region', $region, PDO::PARAM_INT);
    }
    if (isset($coll)){
        $stmt->bindParam(':collection', $coll, PDO::PARAM_INT);
    }
    if (isset($lang)){
        $stmt->bindParam(':language', $lang, PDO::PARAM_INT);
    }
    if (isset($attr)){
        $stmt->bindParam(':attribution', $attr, PDO::PARAM_INT);
    }
    if (isset($scribe)){
        $stmt->bindParam(':scribe', $scribe, PDO::PARAM_INT);
    }
    if (isset($year_start)){
        $stmt->bindParam(':yearstart', $year_start, PDO::PARAM_INT);
    }
    if (isset($year_end)){
        $stmt->bindParam(':yearend', $year_end, PDO::PARAM_INT);
    }
    if (isset($script)){
        $stmt->bindParam(':script', $script, PDO::PARAM_INT);
    }
    */
}

// Construct result set subquery string
$subqstr = file_get_contents(RESULT_SQL_DIR . $params['grouping'] . '.sql');
$part_joined = false;
foreach (array_keys($params) as $param){
    switch ($param){
        case 'grouping': case 'page':
            break;
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
            $subqstr .= file_get_contents(RESULT_SQL_DIR . 'join/' . $param . '.sql');
    }
}
/*
if (isset($region)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'join/region.sql');
}
if (isset($coll)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'join/manuscript.sql');
}
if (isset($lang)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'join/language.sql');
}
if (isset($attr)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'join/attribution.sql');
}
if (isset($scribe)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'join/scribe.sql');
}
if (isset($year_start) or isset($year_end)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'join/part.sql');
}
if (isset($script)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'join/script.sql');
}
*/
$subqstr .= 'WHERE TRUE ';
foreach (array_keys($params) as $param){
    switch ($param){
        case 'grouping': case 'page':
            break;
        default:
            $subqstr .= file_get_contents(RESULT_SQL_DIR . 'where/' . $param . '.sql');
    }
}
/*
if (isset($region)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'where/region.sql');
}
if (isset($coll)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'where/collection.sql');
}
if (isset($lang)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'where/language.sql');
}
if (isset($attr)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'where/attribution.sql');
}
if (isset($scribe)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'where/scribe.sql');
}
if (isset($year_start)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'where/year_start.sql');
}
if (isset($year_end)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'where/year_end.sql');
}
if (isset($script)){
    $subqstr .= file_get_contents(RESULT_SQL_DIR . 'where/script.sql');
}
*/
//echo($subqstr);

// Set up variables for pagination
$pageno      = $params['page'];
// Total count
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
// calculate pagination-related variables
$offset = RESULTS_PER_PAGE * ($pageno - 1);
$maxpage = ceil($rescount/RESULTS_PER_PAGE);

// Set number of image thumbnails per result
$img_limit = 12;

////////////
// Do SQL //
///////////////////////////////////////////////////////////////////////
// Results //
/////////////
// Create and prepare query string
$qstr  = file_get_contents(RESULT_SQL_DIR . $params['grouping'] . '/select.sql');
// TODO: stuff with GET/SESSION/COOKIE to determine extra fields as required
$qstr .= file_get_contents(RESULT_SQL_DIR . $params['grouping'] . '/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= 'LIMIT ' . RESULTS_PER_PAGE . ' ';
//$qstr .= file_get_contents('../../../async/limit.sql');
$qstr .= file_get_contents('../../../async/offset.sql');
$resstmt = $db->prepare($qstr);
// Bind parameters
bind_subq($resstmt);
//$resstmt->bindParam(':limit', RESULTS_PER_PAGE, PDO::PARAM_INT);
$resstmt->bindParam(':offset',$offset,PDO::PARAM_INT);
// Execute and fetch
$resstmt->execute();
$result = $resstmt ->fetchAll(PDO::FETCH_NUM);
// Image thumbnails
if ($grouping != 'i'){
    $images = array();
    foreach ($result as $record){
        $qstr  = file_get_contents(RESULT_SQL_DIR . 'thumbnails/select.sql');
        $qstr .= "WHERE $id_type = " . $record[0] . " ";
        $qstr .= file_get_contents(RESULT_SQL_DIR . 'thumbnails/order_by_limit.sql');
        //echo("$qstr<br>");
        $imgstmt = $db->prepare($qstr);
        $imgstmt->bindParam(':imglimit', $img_limit, PDO::PARAM_INT);
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
            $qstr  = file_get_contents(FILTER_SQL_DIR . "$filter/bounds.sql");
            $qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
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
                   /*
            if (isset($year_start)){
                $min = max($year_start, $minimax[0][0]);
            } else {
                $min = $minimax[0][0];
            }
            if (isset($year_end)){
                $max = min($year_end, $minimax[0][1]);
            } else {
                $max = $minimax[0][1];
            }
            */
            //echo("($min, $max)<br>");
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
            //echo("$grain<br>");
            // Count results in each bin
            $dates = array();
            for ($bin = floor($min/$grain); $bin <= floor($max/$grain); $bin++){
                $binmin = max($min, $bin*$grain);
                $binmax = min($max, (1+$bin)*$grain-1);
                $qstr  = "SELECT COUNT(DISTINCT v.$id_type) ";
                $qstr .= file_get_contents(FILTER_SQL_DIR . "$filter/count/from.sql");
                $qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
                $qstr .= file_get_contents(FILTER_SQL_DIR . "$filter/count/where.sql");
                $stmt = $db->prepare($qstr);
                bind_subq($stmt);
                $stmt->bindParam(':lo', $binmin, PDO::PARAM_INT);
                $stmt->bindParam(':hi', $binmax, PDO::PARAM_INT);
                $stmt->execute();
                $freq = $stmt->fetchAll(PDO::FETCH_NUM)[0][0];
                //echo("$binmin&ndash;$binmax: $freq<br>");
                $dates[] = ['start' => $binmin, 'end' => $binmax, 'count' => $freq];
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
            $qstr .= file_get_contents(FILTER_SQL_DIR . "$filter/from.sql");
            $qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
            $qstr .= file_get_contents(FILTER_SQL_DIR . "$filter/group_by_order_by.sql");
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
            $facet_exhausted = false;
            break;
        }
    }
    if ($facet_exhausted){
        unset($filter_lists[$filter]);
    }
}
/*//////////////////////////////////////////////////////////////////////
// Regions //
/////////////
// Create and prepare query string
$qstr  = file_get_contents(FILTER_SQL_DIR . 'region/select.sql');
$qstr .= ", COUNT(DISTINCT v.$id_type) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'region/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'region/group_by_order_by.sql');
$region_stmt = $db->prepare($qstr);
// bind parameters, execute, fetch
bind_subq($region_stmt);
$region_stmt->execute();
$region_list = $region_stmt->fetchAll(PDO::FETCH_NUM);
///////////////////////////////////////////////////////////////////////
// Collections //
/////////////////
// Create and prepare query string
$qstr  = file_get_contents(FILTER_SQL_DIR . 'collection/select.sql');
$qstr .= ", COUNT(DISTINCT v.$id_type) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'collection/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'collection/group_by_order_by.sql');
$coll_stmt = $db->prepare($qstr);
// bind parameters, execute, fetch
bind_subq($coll_stmt);
$coll_stmt->execute();
$coll_list = $coll_stmt->fetchAll(PDO::FETCH_NUM);
///////////////////////////////////////////////////////////////////////
// Languages //
///////////////
// Create and prepare query string
$qstr  = file_get_contents(FILTER_SQL_DIR . 'language/select.sql');
$qstr .= ", COUNT(DISTINCT v.$id_type) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'language/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'language/group_by_order_by.sql');
$lang_stmt = $db->prepare($qstr);
// bind parameters, execute, fetch
bind_subq($lang_stmt);
$lang_stmt->execute();
$lang_list = $lang_stmt->fetchAll(PDO::FETCH_NUM);
///////////////////////////////////////////////////////////////////////
// Attributions //
//////////////////
// Create and prepare query string
$qstr  = file_get_contents(FILTER_SQL_DIR . 'attribution/select.sql');
$qstr .= ", COUNT(DISTINCT v.$id_type) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'attribution/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'attribution/group_by_order_by.sql');
$attr_stmt = $db->prepare($qstr);
// bind parameters, execute, fetch
bind_subq($attr_stmt);
$attr_stmt->execute();
$attr_list = $attr_stmt->fetchAll(PDO::FETCH_NUM);
///////////////////////////////////////////////////////////////////////
// Scribes //
/////////////
// Create and prepare query string
$qstr  = file_get_contents(FILTER_SQL_DIR . 'scribe/select.sql');
$qstr .= ", COUNT(DISTINCT v.$id_type) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'scribe/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'scribe/group_by_order_by.sql');
//echo($qstr);
$scribe_stmt = $db->prepare($qstr);
// bind parameters, execute, fetch
bind_subq($scribe_stmt);
$scribe_stmt->execute();
$scribe_list = $scribe_stmt->fetchAll(PDO::FETCH_NUM);
///////////////////////////////////////////////////////////////////////
// Date //
//////////
// Determine min start and max end dates in current subset
$qstr  = file_get_contents(FILTER_SQL_DIR . 'date/bounds.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
//echo($qstr);
$stmt = $db->prepare($qstr);
bind_subq($stmt);
$stmt->execute();
$minimax = $stmt->fetchAll(PDO::FETCH_NUM);
if (isset($year_start)){
    $min = max($year_start, $minimax[0][0]);
} else {
    $min = $minimax[0][0];
}
if (isset($year_end)){
    $max = min($year_end, $minimax[0][1]);
} else {
    $max = $minimax[0][1];
}
//echo("($min, $max)<br>");
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
//echo("$grain<br>");
// Count results in each bin
$dates = array();
for ($bin = floor($min/$grain); $bin <= floor($max/$grain); $bin++){
    $binmin = max($min, $bin*$grain);
    $binmax = min($max, (1+$bin)*$grain-1);
    $qstr  = "SELECT COUNT(DISTINCT v.$id_type) ";
    $qstr .= file_get_contents(FILTER_SQL_DIR . 'date/count/from.sql');
    $qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
    $qstr .= file_get_contents(FILTER_SQL_DIR . 'date/count/where.sql');
    $stmt = $db->prepare($qstr);
    bind_subq($stmt);
    $stmt->bindParam(':lo', $binmin, PDO::PARAM_INT);
    $stmt->bindParam(':hi', $binmax, PDO::PARAM_INT);
    $stmt->execute();
    $freq = $stmt->fetchAll(PDO::FETCH_NUM)[0][0];
    //echo("$binmin&ndash;$binmax: $freq<br>");
    $dates[] = ['start' => $binmin, 'end' => $binmax, 'count' => $freq];
}
if (!(isset($year_start) or isset($year_end))){ // get undated
    $qstr  = "SELECT COUNT(DISTINCT v.$id_type) ";
    $qstr .= file_get_contents(FILTER_SQL_DIR . 'date/count/undatable/from.sql');
    $qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
    $qstr .= file_get_contents(FILTER_SQL_DIR . 'date/count/undatable/where.sql');
    $stmt = $db->prepare($qstr);
    bind_subq($stmt);
    $stmt->execute();
    $freq = $stmt->fetchAll(PDO::FETCH_NUM)[0][0];
    $dates[] = ['start' => '', 'end' => '', 'count' => $freq];
}
///////////////////////////////////////////////////////////////////////
// Scripts //
/////////////
// Create and prepare query string
$qstr  = file_get_contents(FILTER_SQL_DIR . 'script/select.sql');
$qstr .= ", COUNT(DISTINCT v.$id_type) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'script/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents(FILTER_SQL_DIR . 'script/group_by_order_by.sql');
//echo($qstr);
$script_stmt = $db->prepare($qstr);
// bind parameters, execute, fetch
bind_subq($script_stmt);
$script_stmt->execute();
$script_list = $script_stmt->fetchAll(PDO::FETCH_NUM);*/

// Assign variables
$smarty->assign('firstret',1+$offset);
$smarty->assign('lastret',count($result)+$offset);
$smarty->assign('pageno',$pageno);
$smarty->assign('maxpage',$maxpage);
$smarty->assign('rescount',$rescount);
$smarty->assign('reslist',$result);
if ($grouping != 'i'){
    $smarty->assign('images',$images);
}
$smarty->assign('get',$params);
$smarty->assign('filter_lists', $filter_lists);

// Display
$smarty->display('index.tpl');

?>
