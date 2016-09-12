<?php
/* Smarty version 3.1.28, created on 2016-09-07 23:49:20
  from "/var/www/html/britlibms/sync/templates/illumination.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57d099700d0bb9_09294104',
  'file_dependency' => 
  array (
    'd770536011e3c4d0bbe699516fce5dffc57f551a' => 
    array (
      0 => '/var/www/html/britlibms/sync/templates/illumination.tpl',
      1 => 1473288555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d099700d0bb9_09294104 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once '/var/www/html/britlibms/sync/includes/Smarty-3.1.28/libs/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/britlibms/sync/includes/Smarty-3.1.28/libs/plugins/modifier.truncate.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='../bootstrap-extra.js'><?php echo '</script'; ?>
>
    <!-- masonry -->
    <?php echo '<script'; ?>
 src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='../masonry.js'><?php echo '</script'; ?>
>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='../style.css'>
    <title>
        <?php echo (($tmp = @smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['record']->value[4],'/~([^~]*)~/','\1'))===null||$tmp==='' ? 'untitled illumination' : $tmp);?>
 &mdash; British Library cat6alogue of Illuminated Manuscripts
    </title>
</head>
<body>
    <div class='container-fluid'>
        
        <div id='header-row' class='row'>
            <header>
                <div class='col-xs-2'>
                    <nav>
                        <a href='http://www.bl.uk' title='British Library home page' style='float: left;'>
                            <img src='http://www.bl.uk/catalogues/illuminatedmanuscripts/images/logo.gif' alt='Home'>
                        </a>
                        <ul style='position: relative; left: 1em; list-style-type: none;'>
                            <li>
                                <a href='../results'>
                                    Browse
                                </a>
                            </li>
                            <li>
                                <a href='http://www.bl.uk/catalogues/illuminatedmanuscripts/welcome.htm'>
                                    Search
                                </a>
                            </li>
                            <li>
                                <a href='../about.html'>
                                    About
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class='col-xs-10'>
                    <h3>
                        Browsing the Catalogue of Illuminated Manuscripts
                    </h3>
                </div>
            </header>
        </div> <!-- end of header-row -->
        
        <div id='content-row' class='row'>
            <div class='col-sm-12'>
                <h1>
                    <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
'>
                        <?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value[2];?>

                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['record']->value[3]) {?>(<?php echo $_smarty_tpl->tpl_vars['record']->value[3];?>
)<?php }?> &mdash;
                    <?php echo (($tmp = @smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['record']->value[4],'/~([^~]*)~/','<i>\1</i>'))===null||$tmp==='' ? '(untitled)' : $tmp);?>

                </h1>
                <h2>
                    from
                    <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
#part<?php echo $_smarty_tpl->tpl_vars['record']->value[7];?>
'>
                        <?php echo (($tmp = @smarty_modifier_regex_replace(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['record']->value[6],'/~([^~]*)~/','<i>\1</i>'),'/\(index [^\)]*\)/',''))===null||$tmp==='' ? 'this part' : $tmp);?>

                    </a>
                </h2>
                <?php if ($_smarty_tpl->tpl_vars['record']->value[5]) {?>
                <h3>
                    by <?php echo $_smarty_tpl->tpl_vars['record']->value[5];?>

                </h3>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['record']->value[8] == 1) {?>
                <div class='alert alert-danger'>
                    <span class='glyphicon glyphicon-eye-close'></span>
                    This image is not available here.
                    You may <a href='http://www.bl.uk/catalogues/illuminatedmanuscripts/ILLUMIN.ASP?Size=mid&IllID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>view it on the old site</a> instead.
                </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['record']->value[8] == 5 || $_smarty_tpl->tpl_vars['record']->value[8] == 8 || $_smarty_tpl->tpl_vars['record']->value[8] == 9) {?>
                <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['record']->value[9];?>
/big/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['record']->value[10],4,'',true);?>
/<?php echo $_smarty_tpl->tpl_vars['record']->value[10];?>
.jpg">
                <?php } else { ?>
                <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['record']->value[9];?>
/big/<?php echo $_smarty_tpl->tpl_vars['record']->value[10];?>
.jpg">
                <?php }?>
                <h2>
                    Description
                </h2>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['record']->value[11];?>

                </p>
                <?php if ($_smarty_tpl->tpl_vars['same_page']->value) {?>
                <h2>
                    Other images from the same page<?php if ($_smarty_tpl->tpl_vars['is_multipage_image']->value) {?>s<?php }?>
                </h2>
                    <div class='grid'>
                        <?php
$_from = $_smarty_tpl->tpl_vars['same_page']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$__foreach_image_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_image_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$__foreach_image_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                        <div class='grid-item<?php if ($_smarty_tpl->tpl_vars['image_widths']->value['same_page'][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--width<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_widths']->value['same_page'][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}
if ($_smarty_tpl->tpl_vars['image_heights']->value['same_page'][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--height<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_heights']->value['same_page'][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}?>'>
                            <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
' data-toggle='tooltip' title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['image']->value[5], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 'untitled' : $tmp);
if ($_smarty_tpl->tpl_vars['image']->value[4]) {?> (<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)<?php }?>'>
                                <img class='img-responsive' src='<?php echo $_smarty_tpl->tpl_vars['image_urls']->value['same_page'][$_smarty_tpl->tpl_vars['image']->value[0]];?>
'>
                            </a>
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
                    </div>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['too_many_in']->value['same_part']) {?>
                <?php if ($_smarty_tpl->tpl_vars['same_part']->value) {?>
                <h2>
                    Other images from
                    <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
#part<?php echo $_smarty_tpl->tpl_vars['record']->value[7];?>
'>
                        <?php echo (($tmp = @smarty_modifier_regex_replace(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['record']->value[6],'/~([^~]*)~/','<i>\1</i>'),'/\(index [^\)]*\)/',''))===null||$tmp==='' ? 'this part' : $tmp);?>

                    </a>
                </h2>
                <?php if (!$_smarty_tpl->tpl_vars['record']->value[6]) {?>
                <aside>
                    (Some manuscripts are made up of several documents which were originally separate.
                     Each of these is called a &quot;part&quot; on this site.)
                </aside>
                <?php }?>
                    <div class='grid'>
                        <?php
$_from = $_smarty_tpl->tpl_vars['same_part']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_1_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$__foreach_image_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_image_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$__foreach_image_1_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                        <div class='grid-item<?php if ($_smarty_tpl->tpl_vars['image_widths']->value['same_part'][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--width<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_widths']->value['same_part'][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}
if ($_smarty_tpl->tpl_vars['image_heights']->value['same_part'][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--height<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_heights']->value['same_part'][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}?>'>
                            <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
' data-toggle='tooltip' title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['image']->value[5], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 'untitled' : $tmp);
if ($_smarty_tpl->tpl_vars['image']->value[4]) {?> (<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)<?php }?>'>
                                <img class='img-responsive' src='<?php echo $_smarty_tpl->tpl_vars['image_urls']->value['same_part'][$_smarty_tpl->tpl_vars['image']->value[0]];?>
'>
                            </a>
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_1_saved_local_item;
}
}
if ($__foreach_image_1_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_1_saved_item;
}
?>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['other_part']->value) {?>
                <h2>
                    Other images from
                    <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
'>
                        <?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value[2];?>

                    </a>
                </h2>
                <?php if (!$_smarty_tpl->tpl_vars['too_many_in']->value['other_part']) {?>
                <div class='grid'>
                    <?php
$_from = $_smarty_tpl->tpl_vars['other_part']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_2_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$__foreach_image_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_image_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$__foreach_image_2_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                    <div class='grid-item<?php if ($_smarty_tpl->tpl_vars['image_widths']->value['other_part'][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--width<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_widths']->value['other_part'][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}
if ($_smarty_tpl->tpl_vars['image_heights']->value['other_part'][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--height<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_heights']->value['other_part'][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}?>'>
                        <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
' data-toggle='tooltip' title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['image']->value[5], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 'untitled' : $tmp);
if ($_smarty_tpl->tpl_vars['image']->value[4]) {?> (<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)<?php }?>'>
                            <img class='img-responsive' src='<?php echo $_smarty_tpl->tpl_vars['image_urls']->value['other_part'][$_smarty_tpl->tpl_vars['image']->value[0]];?>
'>
                        </a>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_2_saved_local_item;
}
}
if ($__foreach_image_2_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_2_saved_item;
}
?>
                </div>
                <?php } else { ?>
                <div class='alert alert-warning'>
                    <span class='glyphicon glyphicon-picture'></span>
                    <span class='glyphicon glyphicon-warning-sign'></span>
                    This manuscript has too many images to view on one page.
                    You can view 50 images at a time in the <a href='../gallery/?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
'>gallery of images for this manuscript</a>.
                </div>
                <?php }?>
                <?php }?>
                <?php } else { ?>
                <h2>
                    Other images from
                    <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
'>
                        <?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value[2];?>

                    </a>
                </h2>
                <div class='alert alert-warning'>
                    <span class='glyphicon glyphicon-picture'></span>
                    <span class='glyphicon glyphicon-warning-sign'></span>
                    This manuscript has too many images to view on one page.
                    You can view 50 images at a time in the <a href='../gallery/?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
'>gallery of images for this manuscript</a>.
                </div>
                <?php }?>
            </div>
        </div> <!-- end of content-row -->
        
    </div>

    <!--BeginBLNedstat-->
    <?php echo '<script'; ?>
 src="//forms.bl.uk/wa/scripts/global-2.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    var bl_pu = bl_ned_url();
    <?php echo '</script'; ?>
>
    <!-- Begin CMC v.1.0.1 -->
    <?php echo '<script'; ?>
 type="text/javascript">
    // <![CDATA[
    function sitestat(u) { var d=document,l=d.location;ns_pixelUrl=u+"&ns__t="+(new Date().getTime());u=ns_pixelUrl+"&ns_c="+((d.characterSet)?d.characterSet:d.defaultCharset)+"&ns_ti="+escape(d.title)+"&ns_jspageurl="+escape(l&&l.href?l.href:d.URL)+"&ns_referrer="+escape(d.referrer);(d.images)?new Image().src=u:d.write('<'+'p><img src="'+u+'" height="1" width="1" alt="*"><'+'/p>'); } ;
    sitestat(bl_pu);
    // ]]>
    <?php echo '</script'; ?>
>
    <noscript><p><img src="//uk.sitestat.com/bl/test/s?no_script_pages" height="1" width="1" alt="*"/></p></noscript>
    <!-- End CMC -->
    <!--EndBLNedstat-->
</body>
</html>
<?php }
}
