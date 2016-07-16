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

// Assign variables
$smarty->assign('perpage',$perpage);
$smarty->assign('pageno',$pageno);
$smarty->assign('mscount',$mscount);

// Display
$smarty->display('index.tpl');

?>