<?php

require_once( '../../../async/conf.php' );

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
$id_type = file_get_contents("../../../async/results/$grouping/idtype");

// Set up parameters for binding
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
if ( !empty($_GET['yearstart']) ){
    $year_start = (int)$_GET['yearstart'];
}
if ( !empty($_GET['yearend']) ){
    $year_end = (int)$_GET['yearend'];
}
// function to bind variables in the subquery
function bind_subq($stmt){
    global $region;
    global $coll;
    global $lang;
    global $attr;
    global $year_start;
    global $year_end;
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
    if (isset($year_start)){
        $stmt->bindParam(':year_start', $year_start, PDO::PARAM_INT);
    }
    if (isset($year_end)){
        $stmt->bindParam(':year_end', $year_end, PDO::PARAM_INT);
    }
}

// Construct result set subquery string
$subqstr = file_get_contents("../../../async/results/$grouping.sql");
if (isset($region)){
    $subqstr .= file_get_contents('../../../async/results/join/region.sql');
}
if (isset($coll)){
    $subqstr .= file_get_contents('../../../async/results/join/manuscript.sql');
}
if (isset($lang)){
    $subqstr .= file_get_contents('../../../async/results/join/language.sql');
}
if (isset($attr)){
    $subqstr .= file_get_contents('../../../async/results/join/attribution.sql');
}
if (isset($year_start) or isset($year_end)){
    $subqstr .= file_get_contents('../../../async/results/join/part.sql');
}
$subqstr .= 'WHERE TRUE ';
if (isset($region)){
    $subqstr .= file_get_contents('../../../async/results/where/region.sql');
}
if (isset($coll)){
    $subqstr .= file_get_contents('../../../async/results/where/collection.sql');
}
if (isset($lang)){
    $subqstr .= file_get_contents('../../../async/results/where/language.sql');
}
if (isset($attr)){
    $subqstr .= file_get_contents('../../../async/results/where/attribution.sql');
}
if (isset($year_start)){
    $subqstr .= file_get_contents('../../../async/results/where/year_start.sql');
}
if (isset($year_end)){
    $subqstr .= file_get_contents('../../../async/results/where/year_end.sql');
}
//echo($subqstr);

// Set up variables for pagination
$pageno      = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage     = 20;
// Total count
$qstr = file_get_contents( "../../../async/results/$grouping/count.sql" );
$qstr .= "WHERE $id_type IN ($subqstr)";
//echo($qstr);
$stmt = $db->prepare($qstr);
// conditional bindings
bind_subq($stmt);
$stmt->execute();
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt -> fetchAll();
$rescount = $result[0]['rescount'];
// calculate pagination-related variables
$offset = $perpage * ($pageno - 1);
$maxpage = ceil($rescount/$perpage);


////////////
// Do SQL //
///////////////////////////////////////////////////////////////////////
// Results //
/////////////
// Create and prepare query string
$qstr  = file_get_contents("../../../async/results/$grouping/select.sql");
// TODO: stuff with GET/SESSION/COOKIE to determine extra fields as required
$qstr .= file_get_contents("../../../async/results/$grouping/from.sql");
// TODO: stuff with GET/SESSION/COOKIE to determine extra JOINS as required
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents('../../../async/limit.sql');
$qstr .= file_get_contents('../../../async/offset.sql');
$resstmt = $db->prepare($qstr);

// Bind parameters
bind_subq($resstmt);
$resstmt->bindParam(':limit',$perpage,PDO::PARAM_INT);
$resstmt->bindParam(':offset',$offset,PDO::PARAM_INT);

// Execute and fetch
$resstmt->execute();
$result = $resstmt ->fetchAll(PDO::FETCH_NUM);
///////////////////////////////////////////////////////////////////////
// Regions //
/////////////
// Create and prepare query string
$qstr  = file_get_contents('../../../async/filters/region/select.sql');
$qstr .= ", COUNT(DISTINCT v.$id_type) ";
$qstr .= file_get_contents('../../../async/filters/region/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents('../../../async/filters/region/group_by_order_by.sql');
$region_stmt = $db->prepare($qstr);
// bind parameters, execute, fetch
bind_subq($region_stmt);
$region_stmt->execute();
$region_list = $region_stmt->fetchAll(PDO::FETCH_NUM);
///////////////////////////////////////////////////////////////////////
// Collections //
/////////////////
// Create and prepare query string
$qstr  = file_get_contents('../../../async/filters/collection/select.sql');
$qstr .= ", COUNT(DISTINCT v.$id_type) ";
$qstr .= file_get_contents('../../../async/filters/collection/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents('../../../async/filters/collection/group_by_order_by.sql');
$coll_stmt = $db->prepare($qstr);
// bind parameters, execute, fetch
bind_subq($coll_stmt);
$coll_stmt->execute();
$coll_list = $coll_stmt->fetchAll(PDO::FETCH_NUM);
///////////////////////////////////////////////////////////////////////
// Languages //
///////////////
// Create and prepare query string
$qstr  = file_get_contents('../../../async/filters/language/select.sql');
$qstr .= ", COUNT(DISTINCT v.$id_type) ";
$qstr .= file_get_contents('../../../async/filters/language/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents('../../../async/filters/language/group_by_order_by.sql');
$lang_stmt = $db->prepare($qstr);
// bind parameters, execute, fetch
bind_subq($lang_stmt);
$lang_stmt->execute();
$lang_list = $lang_stmt->fetchAll(PDO::FETCH_NUM);
///////////////////////////////////////////////////////////////////////
// Attributions //
///////////////
// Create and prepare query string
$qstr  = file_get_contents('../../../async/filters/attribution/select.sql');
$qstr .= ", COUNT(DISTINCT v.$id_type) ";
$qstr .= file_get_contents('../../../async/filters/attribution/from.sql');
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
$qstr .= file_get_contents('../../../async/filters/attribution/group_by_order_by.sql');
$attr_stmt = $db->prepare($qstr);
// bind parameters, execute, fetch
bind_subq($attr_stmt);
$attr_stmt->execute();
$attr_list = $attr_stmt->fetchAll(PDO::FETCH_NUM);

// Assign variables
$smarty->assign('firstret',1+$offset);
$smarty->assign('lastret',count($result)+$offset);
$smarty->assign('pageno',$pageno);
$smarty->assign('maxpage',$maxpage);
$smarty->assign('rescount',$rescount);
$smarty->assign('reslist',$result);
$smarty->assign('region_list',$region_list);
$smarty->assign('collection_list',$coll_list);
$smarty->assign('language_list',$lang_list);
$smarty->assign('attribution_list',$attr_list);
$smarty->assign('get',$_GET);

// Display
$smarty->display('index.tpl');




?>
