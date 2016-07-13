<?php

define( 'SMARTY_DIR', str_replace('\\','/',getcwd())
                      . '/includes/Smarty-3.1.28/libs/' );

require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
$smarty->testInstall();

?>