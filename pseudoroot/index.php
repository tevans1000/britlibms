<?php

require_once( '../../async/conf.php' );

// Determine results page grouping
if ( empty($_GET['grouping']) ){
    $grouping = 'p';
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
    }
}
// Set up parameters for binding
if ( !empty($_GET['region']) ){
    $region = (int)$_GET['region'];
}

// Set up variables for pagination
$pageno      = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage     = 20;
$qstr = file_get_contents( "../../async/results/$grouping/count.sql" );
if (isset($region)){
    $qstr .= file_get_contents('../../async/results/join/region.sql');
}
$qstr .= 'WHERE TRUE ';
if (isset($region)){
    $qstr .= file_get_contents('../../async/results/where/region.sql');
}
// TODO: limit count to result set
$stmt = $db->prepare($qstr);
if (isset($region)){
    $stmt->bindParam(':region', $region, PDO::PARAM_INT);
}
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
// Create and prepare query string
$qstr  = file_get_contents("../../async/results/$grouping/select.sql");
// TODO: stuff with GET/SESSION/COOKIE to determine extra fields as required
$qstr .= file_get_contents("../../async/results/$grouping/from.sql");
if (isset($region)) {
    $qstr .= file_get_contents("../../async/results/join/region.sql");
}
// TODO: stuff with GET to determine extra JOINS as required
$qstr .= 'WHERE TRUE ';
if (isset($region)) {
    $qstr .= file_get_contents("../../async/results/where/region.sql");
}
// TODO: stuff with GET to determine WHERE clause
$qstr .= file_get_contents("../../async/results/$grouping/group_by.sql");
// TODO: stuff with GET to determine HAVING clause
//$qstr  = file_get_contents('../../async/results/selectmin.sql');
//$qstr .= file_get_contents('../../async/results/orderbymeddate.sql');
$qstr .= file_get_contents('../../async/limit.sql');
$qstr .= file_get_contents('../../async/offset.sql');
$stmt = $db->prepare($qstr);

// Bind parameters
if (isset($region)){
    $stmt->bindParam(':region', $region, PDO::PARAM_INT);
}
$stmt->bindParam(':limit',$perpage,PDO::PARAM_INT);
$stmt->bindParam(':offset',$offset,PDO::PARAM_INT);

// Execute and fetch
$stmt->execute();
echo(mysql_error());
$result = $stmt ->fetchAll(PDO::FETCH_NUM);
///////////////////////////////////////////////////////////////////////

// Assign variables
$smarty->assign('perpage',$perpage);
$smarty->assign('pageno',$pageno);
$smarty->assign('maxpage',$maxpage);
$smarty->assign('rescount',$rescount);
$smarty->assign('reslist',$result);

// Display
$smarty->display('index.tpl');




?>
