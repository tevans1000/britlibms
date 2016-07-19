<?php

require_once( '../../async/conf.php' );

// Set up variables for pagination
$pageno      = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage     = 20;
$qstr = file_get_contents( '../../async/countms.sql' );
$stmt = $db->prepare($qstr);
$stmt->execute();
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt -> fetchAll();
$mscount = $result[0]['mscount'];
// calculate pagination-related variables
$offset = $perpage * ($pageno - 1);
$maxpage = ceil($mscount/$perpage);

////////////
// Do SQL //
////////////
// Create and prepare query string
$qstr  = file_get_contents('../../async/results/selectmin.sql');
$qstr .= file_get_contents('../../async/results/orderbymeddate.sql');
$qstr .= file_get_contents('../../async/limit.sql');
$qstr .= file_get_contents('../../async/offset.sql');
$stmt = $db->prepare($qstr);
// Bind parameters
$stmt->bindParam(':limit',$perpage,PDO::PARAM_INT);
$stmt->bindParam(':offset',$offset,PDO::PARAM_INT);
// Execute and fetch
$stmt->execute();
$result = $stmt ->fetchAll(PDO::FETCH_NUM);

// Assign variables
$smarty->assign('perpage',$perpage);
$smarty->assign('pageno',$pageno);
$smarty->assign('maxpage',$maxpage);
$smarty->assign('mscount',$mscount);
$smarty->assign('mslist',$result);

// Display
$smarty->display('index.tpl');




?>
