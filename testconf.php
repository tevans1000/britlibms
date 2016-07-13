<?php

require_once( '../async/conf.php' );

/*
$smarty = new Smarty();
$smarty -> testInstall();
*/

$qstr = file_get_contents( '../async/test.sql' );
$stmt = $db->prepare($qstr);
$stmt->execute();
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt -> fetchAll();
?>
<dl>
    <?php
    foreach ($result as $row){
        foreach ($row as $k => $v){
            echo('<dt>' . $k . '</dt><dd>' . $v . '</dd>');
        }
    }
    ?>
</dl>
