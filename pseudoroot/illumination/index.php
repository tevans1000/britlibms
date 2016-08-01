<?php

require_once( '../../../async/conf.php' );
if (isset($_GET['id'])){
    $id = (int)$_GET['id'];
}
// Do SQL
$qstr  = file_get_contents(IMG_SQL_DIR . "whole.sql");
$recstmt = $db->prepare($qstr);
$recstmt->bindParam(':id', $id, PDO::PARAM_INT);
$recstmt->execute();
$record = $recstmt ->fetchAll(PDO::FETCH_NUM);

// Assign variables
$smarty->assign('record',$record[0]);

// Display
$smarty->display('illumination.tpl');

?>
