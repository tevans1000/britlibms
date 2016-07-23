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
$id_type = file_get_contents("../../async/results/$grouping/idtype");

// Set up parameters for binding
if ( !empty($_GET['region']) ){
    $region = (int)$_GET['region'];
}

// Construct result set subquery string
$subqstr = file_get_contents("../../async/results/$grouping.sql");
if (isset($region)){
    $subqstr .= file_get_contents('../../async/results/join/region.sql');
}
$subqstr .= 'WHERE TRUE ';
if (isset($region)){
    $subqstr .= file_get_contents('../../async/results/where/region.sql');
}

// Set up variables for pagination
$pageno      = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage     = 20;
// Total count
$qstr = file_get_contents( "../../async/results/$grouping/count.sql" );
$qstr .= "WHERE $id_type IN ($subqstr)";
$stmt = $db->prepare($qstr);
// conditional bindings
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
// TODO: stuff with GET/SESSION/COOKIE to determine extra JOINS as required
$qstr .= "WHERE v.$id_type IN ( $subqstr ) ";
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
