<?php

require_once( '../../../async/conf.php' );

if (isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else {
    $_SESSION['not_found']='m';
    header('Location: ../results');
    exit();
}

//
if (isset($_GET['page'])){
    if ((int)$_GET['page']>0){
        $pageno = (int)$_GET['page'];
    } else {
        $pageno = 1;
    }
} else {
    $pageno = 1;
}

define('IMAGES_PER_PAGE', 50);

// Get manuscript name
$qstr = file_get_contents(GALLERY_SQL_DIR . "manuscript.sql");
$stmt = $db->prepare($qstr);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$ms = $stmt ->fetchAll(PDO::FETCH_NUM);
if (!$ms) {
    /*
    $_SESSION['not_found']='m';
    header('Location: ../results');
    exit();
    */
}

// get image count
$qstr  = file_get_contents(GALLERY_SQL_DIR . "count.sql");
$stmt = $db->prepare($qstr);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$image_count = $stmt ->fetchAll(PDO::FETCH_NUM)[0][0];

// calculate pagination-related variables
$maxpage = ceil($image_count/IMAGES_PER_PAGE);
if ($pageno > $maxpage){
    $pageno = 1;
}
$offset = IMAGES_PER_PAGE * ($pageno - 1);

// Do SQL
$qstr  = file_get_contents(GALLERY_SQL_DIR . "image.sql");
$stmt = $db->prepare($qstr);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$image_list = $stmt ->fetchAll(PDO::FETCH_NUM);

// get other image details
$image_urls = array();
$image_widths = array();
$image_heights = array();
$too_many_images = false;
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
    $image_urls[$image[0]] = $image_url;
    $image_widths[$image[0]] = $image_size[0];
    $image_heights[$image[0]] = $image_size[1];
}

// Assign variables
$smarty->assign('id',$id);
$smarty->assign('ms',$ms[0]);
$smarty->assign('offset', $offset);
$smarty->assign('image_count', $image_count);
$smarty->assign('pageno', $pageno);
$smarty->assign('maxpage', $maxpage);
$smarty->assign('images',$image_list);
$smarty -> assign('image_urls', $image_urls);
$smarty -> assign('image_widths', $image_widths);
$smarty -> assign('image_heights', $image_heights);

// Display
$smarty->display('gallery.tpl');




?>
