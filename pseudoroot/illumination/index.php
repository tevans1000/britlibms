<?php

require_once( '../../../async/conf.php' );
if (isset($_GET['id'])){
    $id = (int)$_GET['id'];
}

// function for extracting page numbers from foliation string; returns array
function foliation2pagenum($foliation_str){
    $foliation_str = strtolower($foliation_str);
    $matches = array();
    // regex for page numbers: may be with standard digits optionally terminated with v (for "verso")
    // or roman numerals followed by " verso"
    // digits may be followed by *s, a letter range, e.g. a-f or a letter and r or v (recto, verso)
    // "recto" and "verso" alone are valid page numbers for single sheet manuscripts
    // and a page number may also be preceded by "verso "
    // This regex also gets volume numbers (beginning "vol. ") which the next line filters out
    preg_match_all('/recto|verso|(verso |vol\. )?\d+\**([a-z](-[a-z])?)? ?(r(ecto)?|v(erso)?)?|(?<!\d|[a-z]|(\d|\*) )m{0,4}(c(m|d)|d?c{0,3})(x(c|l)|l?x{0,3})(i(x|v)|v?i{0,3})(?![a-z])( verso)?/', $foliation_str, $matches);
    return array_filter(array_filter($matches[0]), 'isNotVolStr');
}

// function to test if a string containing a number is in fact a volume number
function isNotVolStr($possVolStr){
    return (substr ($possVolStr,0,3) != 'vol');
}

// Do SQL for this image's details
$qstr  = file_get_contents(IMG_SQL_DIR . "whole.sql");
$recstmt = $db->prepare($qstr);
$recstmt->bindParam(':id', $id, PDO::PARAM_INT);
$recstmt->execute();
$record = $recstmt ->fetchAll(PDO::FETCH_NUM);

// get page numbers
$pages = foliation2pagenum($record[0][3]);
//*
foreach ($pages as $page){
    //echo("$page<br>");
}
//*/

// Do SQL to get other images from the same manuscript
$manuscript = $record[0][0];
//echo("$manuscript<br>");
$qstr = file_get_contents(IMG_SQL_DIR . "related.sql");
//echo("$qstr<br>");
$relstmt = $db->prepare($qstr);
$relstmt->bindParam(':manuscript', $manuscript, PDO::PARAM_INT);
$relstmt->bindParam(':id', $id, PDO::PARAM_INT);
$relstmt->execute();
$related = $relstmt->fetchAll(PDO::FETCH_NUM);

// categorise images as same page, same part or other part
$same_page = array();
$same_part = array();
$other_part = array();
foreach ($related as $img){
    if ($img[6] == $record[0][12]){
        if (array_intersect($pages, foliation2pagenum($img[4]))){
            $same_page[] = $img;
            //echo("page: " . $img[3] . "<br>");
        } else {
            $same_part[] = $img;
            //echo("part: " . $img[3] . "<br>");
        }
    } else {
        $other_part[] = $img;
        //echo("other: " . $img[3] . "<br>");
    }
}

// get image urls & sizes for masonry
$image_urls = array();
$image_widths = array();
$image_heights = array();
$n=0;
foreach ([$same_page,$same_part,$other_part] as $image_list){
    foreach ($image_list as $image){
        switch ($image[1]){
            case 1:
                $image_url = 'http://www.bl.uk/images/bl_logo_100.gif';
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
        $image_urls[$n][$image[0]] = $image_url;
        $image_widths[$n][$image[0]] = $image_size[0];
        $image_heights[$n][$image[0]] = $image_size[1];
    }
    $n+=1;
}

// Assign variables
$smarty->assign('record',$record[0]);
$smarty -> assign('same_page', $same_page);
$smarty -> assign('same_part', $same_part);
$smarty -> assign('other_part', $other_part);
$smarty -> assign('image_urls', $image_urls);
$smarty -> assign('image_widths', $image_widths);
$smarty -> assign('image_heights', $image_heights);
$smarty -> assign('is_multipage_image', (count($pages)>1));
$smarty -> assign('id', htmlspecialchars($id));  // required to link to old site
                                                 // for images from iBase,
                                                 // as I don't know how to
                                                 // cook their URLs

// Display
$smarty->display('illumination.tpl');

?>
