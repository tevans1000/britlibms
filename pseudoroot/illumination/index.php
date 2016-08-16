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

// get page numbers
$foliation_str = strtolower($record[0][3]);
$matches = array();
// regex for numbers: may be with standard digits optionally terminated with v (for "verso")
// or roman numerals followed by " verso"
// a page number may also be preceded by "verso "
// digits may be followed by *s and/or a letter range, e.g. a-f
preg_match_all('/(verso )?\d+\**(v| verso)?([a-z]-[a-z])?|(?<![a-z])m{0,4}(c(m|d)|d?c{0,3})(x(c|l)|l?x{0,3})(i(x|v)|v?i{0,3})(?![a-z])( verso)?/', $foliation_str, $matches);
/*
foreach (array_filter($matches[0]) as $match){
    echo("$match<br>");
}
*/

// Assign variables
$smarty->assign('record',$record[0]);

// Display
$smarty->display('illumination.tpl');

?>
