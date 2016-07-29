<?php

require_once( '../../../async/conf.php' );

if (!empty($_GET['id'])){
    $id = (int)$_GET['id'];
}
// Do SQL
// details for manuscript as a whole
$qstr  = file_get_contents("../../../async/manuscript/whole.sql");
$recstmt = $db->prepare($qstr);
$recstmt->bindParam(':id', $id, PDO::PARAM_INT);
$recstmt->execute();
$record = $recstmt ->fetchAll(PDO::FETCH_NUM);

// details for manuscript parts
$qstr = file_get_contents('../../../async/manuscript/part.sql');
$partstmt = $db->prepare($qstr);
$partstmt->bindParam(':id', $id, PDO::PARAM_INT);
$partstmt->execute();
$parts = $partstmt ->fetchAll(PDO::FETCH_NUM);
// multi-value attributes
// region init
$region_qstr = file_get_contents('../../../async/manuscript/region.sql');
$regions = array();
// language init
$language_qstr = file_get_contents('../../../async/manuscript/language.sql');
$languages = array();
foreach ($parts as $part){
    // get regions for this part
    $region_stmt = $db -> prepare($region_qstr);
    $region_stmt -> bindParam(':id', $part[11], PDO::PARAM_INT);
    $region_stmt -> execute();
    $regions[$part[11]] = $region_stmt -> fetchAll(PDO::FETCH_NUM);
    // get languages for this part
    $language_stmt = $db -> prepare($language_qstr);
    $language_stmt -> bindParam(':id', $part[11], PDO::PARAM_INT);
    $language_stmt -> execute();
    $languages[$part[11]] = $language_stmt -> fetchAll(PDO::FETCH_NUM);
}

// regex-ing
$notes = explode("\n", trim(preg_replace('/~([^~]*)~/', '<cite>\1</cite>', $record[0][7])));
$provenance = explode("\n", trim(preg_replace('/~([^~]*)~/', '<cite>\1</cite>', $record[0][6])));
$bib = array_filter(explode("\n", trim(preg_replace('/~([^~]*)~/', '<cite>\1</cite>', $record[0][8]))));
$record[0][5] = preg_replace('/\^([^\^]*)\^/', '<sup>\1</sup>', $record[0][5]);
$record[0][1] = preg_replace('/\(index[^\)]*\)/', '', $record[0][1]);

// Assign variables
$smarty->assign('record',$record[0]);
$smarty->assign('provenance', $provenance);
$smarty->assign('note', $notes);
$smarty->assign('bib', $bib);
$smarty->assign('parts',$parts);
$smarty -> assign('regions', $regions);
$smarty -> assign('languages', $languages);

// Display
$smarty->display('manuscript.tpl');




?>
