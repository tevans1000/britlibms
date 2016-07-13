<?php

require_once( '../../async/conf.php' );

$smarty = new Smarty();
$smarty->setTemplateDir('../templates/');
$smarty->setCompileDir('../templates_c/');
$smarty->setConfigDir('../configs/');
$smarty->setCacheDir('../cache/');

$smarty->assign('name','Thomas');

$smarty->display('index.tpl');

?>