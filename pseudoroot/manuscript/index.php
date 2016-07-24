<?php

require_once( '../../../async/conf.php' );

if (!empty($_GET['id'])){
    $id = $_GET['id'];
}
// Do SQL 
$qstr  = file_get_contents("../../../async/manuscript/whole.sql");
$recstmt = $db->prepare($qstr);
$recstmt->bindParam(':id', $id, PDO::PARAM_INT);
$recstmt->execute();
$record = $recstmt ->fetchAll(PDO::FETCH_NUM);

$provenance = explode("\n", trim($record[0][6]));
$notes = explode("\n", trim($record[0][7]));
$bib = trim(preg_replace('/~([^~]*)~/', '<cite>\1</cite>', $record[0][8]));

// Assign variables
$smarty->assign('record',$record[0]);
$smarty->assign('provenance', $provenance);
$smarty->assign('note', $notes);
$smarty->assign('bib', $bib);

// Display
$smarty->display('manuscript.tpl');




?>
