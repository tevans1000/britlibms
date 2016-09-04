<?php

require_once( '../../../async/conf.php' );

if (isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else {
    $_SESSION['not_found']='m';
    header('Location: ../results');
    exit();
}

// Do SQL
// details for manuscript as a whole
$qstr  = file_get_contents(MS_SQL_DIR . "whole.sql");
$recstmt = $db->prepare($qstr);
$recstmt->bindParam(':id', $id, PDO::PARAM_INT);
$recstmt->execute();
$record = $recstmt ->fetchAll(PDO::FETCH_NUM);

if (!$record) {
    $_SESSION['not_found']='m';
    header('Location: ../results');
    exit();
}

// do SQL
$image_qstr = file_get_contents(MS_SQL_DIR . 'image.sql');
$image_stmt = $db -> prepare($image_qstr);
$image_stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$image_stmt -> execute();
$image_list = $image_stmt -> fetchAll(PDO::FETCH_NUM);
// initialise arrays for preview thumbnails
// Must do this even if too many images to preview to prevent smarty errors
$images = array();
$image_urls = array();
$image_widths = array();
$image_heights = array();
$too_many_images = false;
if (count($image_list) <= 100){
    // preview images here
    // get image urls & sizes for masonry
    foreach ($image_list as $image){
        switch ($image[1]){
            case 1:
                $image_url = PLACEHOLDER_IMAGE_URL;
                break;
            case 5: case 8: case 9:
                $image_url = 'http://www.bl.uk/IllImages/' . $image[2]
                             . '/thm/' . substr($image[3], 0, 4) . '/'
                             . $image[3] . '.jpg';
                break;
            default:
                $image_url = 'http://www.bl.uk/IllImages/' . $image[2]
                             . '/thm/' . $image[3] . '.jpg';
        }
        $image_size = getimagesize($image_url);
        $images[$image[6]][] = $image;
        $image_urls[$image[6]][$image[0]] = $image_url;
        $image_widths[$image[6]][$image[0]] = $image_size[0];
        $image_heights[$image[6]][$image[0]] = $image_size[1];
    }
} else {
    // no preview here, link to paginated gallery
    $too_many_images = true;
}
// Images

// details for manuscript parts
$qstr = file_get_contents(MS_SQL_DIR . 'part.sql');
$partstmt = $db->prepare($qstr);
$partstmt->bindParam(':id', $id, PDO::PARAM_INT);
$partstmt->execute();
$parts = $partstmt ->fetchAll(PDO::FETCH_NUM);
// multi-value attributes
// region init
$region_qstr = file_get_contents(MS_SQL_DIR . 'region.sql');
$regions = array();
// language init
$language_qstr = file_get_contents(MS_SQL_DIR . 'language.sql');
$languages = array();
// script init
$script_qstr = file_get_contents(MS_SQL_DIR . 'script.sql');
$scripts = array();
// scribe init
$scribe_qstr = file_get_contents(MS_SQL_DIR . 'scribe.sql');
$scribes = array();
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
    // get scripts for this part
    $script_stmt = $db -> prepare($script_qstr);
    $script_stmt -> bindParam(':id', $part[11], PDO::PARAM_INT);
    $script_stmt -> execute();
    $scripts[$part[11]] = $script_stmt -> fetchAll(PDO::FETCH_NUM);
    // get scribes for this part
    $scribe_stmt = $db -> prepare($scribe_qstr);
    $scribe_stmt -> bindParam(':id', $part[11], PDO::PARAM_INT);
    $scribe_stmt -> execute();
    $scribes[$part[11]] = $scribe_stmt -> fetchAll(PDO::FETCH_NUM);
    // set images to empty array if none; prevents smarty error
    if (!isset($images[$part[11]])){
        $images[$part[11]] = array();
    }
}

// regex-ing
$notes = array_filter(explode("\n", trim(preg_replace('/~([^~]*)~/', '<cite>\1</cite>', $record[0][7]))));
$provenance = array_filter(explode("\n", trim(preg_replace('/~([^~]*)~/', '<cite>\1</cite>', $record[0][6]))));
$bib = array_filter(explode("\n", trim(preg_replace('/~([^~]*)~/', '<cite>\1</cite>', $record[0][8]))));
$record[0][5] = preg_replace('/\^([^\^]*)\^/', '<sup>\1</sup>', $record[0][5]);
$record[0][1] = preg_replace('/\(index[^\)]*\)/', '', $record[0][1]);

// Assign variables
$smarty->assign('id',$id);
$smarty->assign('record',$record[0]);
$smarty->assign('provenance', $provenance);
$smarty->assign('note', $notes);
$smarty->assign('bib', $bib);
$smarty->assign('parts',$parts);
$smarty -> assign('regions', $regions);
$smarty -> assign('languages', $languages);
$smarty -> assign('scripts', $scripts);
$smarty -> assign('scribes', $scribes);
$smarty -> assign('images', $images);
$smarty -> assign('image_urls', $image_urls);
$smarty -> assign('image_widths', $image_widths);
$smarty -> assign('image_heights', $image_heights);
$smarty -> assign('too_many_images', $too_many_images);

// Display
$smarty->display('manuscript.tpl');




?>
