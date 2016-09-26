<?php
/* Smarty version 3.1.28, created on 2016-09-08 00:01:36
  from "/var/www/html/britlibms/sync/templates/manuscript.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57d09c50c6aa79_24267439',
  'file_dependency' => 
  array (
    'e094e01cfbb6ef91eb4eef46df92d1dc46c8928d' => 
    array (
      0 => '/var/www/html/britlibms/sync/templates/manuscript.tpl',
      1 => 1473289292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d09c50c6aa79_24267439 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once '/var/www/html/britlibms/sync/includes/Smarty-3.1.28/libs/plugins/modifier.regex_replace.php';
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
        <?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>

        &mdash; British Library catalogue of Illuminated Manuscripts
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
                    <?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>

                </h1>
                <?php if ($_smarty_tpl->tpl_vars['too_many_images']->value) {?>
                <div class='alert alert-warning'>
                    <span class='glyphicon glyphicon-picture'></span>
                    <span class='glyphicon glyphicon-warning-sign'></span>
                    This manuscript has too many images to view on one page.
                    You can view 50 images at a time in the <a href='../gallery/?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>gallery of images for this manuscript</a>.
                </div>
                <?php }?>
                <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#manuscript-details-list'>
                    <span class='glyphicon glyphicon-th-list'></span> Show/hide details
                </button>
                <div id='manuscript-details-list' class='collapse<?php if ($_smarty_tpl->tpl_vars['too_many_images']->value) {?> in<?php }?>'>
                <dl>
                    <dt>
                        Official foliation
                    </dt>
                    <dd class='oneline'>
                        <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['record']->value[2],'/\^([^\^]*)\^/','<sup>\1</sup>');?>

                    </dd>
                    <?php if ($_smarty_tpl->tpl_vars['record']->value[5]) {?>
                    <dt>
                        Collation
                    </dt>
                    <dd class='oneline'>
                        <?php echo $_smarty_tpl->tpl_vars['record']->value[5];?>

                    </dd>
                    <?php }?>
                    <dt>
                        Form
                    </dt>
                    <dd class='oneline'>
                        <?php echo $_smarty_tpl->tpl_vars['record']->value[3];?>

                    </dd>
                    <dt>
                        Binding
                    </dt>
                    <dd class='oneline'>
                        <?php echo $_smarty_tpl->tpl_vars['record']->value[4];?>

                    </dd>
                    <dt>
                        Provenance
                    </dt>
                    <dd>
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['provenance']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_per_0_saved_item = isset($_smarty_tpl->tpl_vars['per']) ? $_smarty_tpl->tpl_vars['per'] : false;
$_smarty_tpl->tpl_vars['per'] = new Smarty_Variable();
$__foreach_per_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_per_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['per']->value) {
$__foreach_per_0_saved_local_item = $_smarty_tpl->tpl_vars['per'];
?>
                            <li>
                                <?php echo $_smarty_tpl->tpl_vars['per']->value;?>

                            </li>
                            <?php
$_smarty_tpl->tpl_vars['per'] = $__foreach_per_0_saved_local_item;
}
}
if ($__foreach_per_0_saved_item) {
$_smarty_tpl->tpl_vars['per'] = $__foreach_per_0_saved_item;
}
?>
                        </ul>
                    </dd>
                    <?php if ($_smarty_tpl->tpl_vars['note']->value) {?>
                    <dt>
                        Notes
                    </dt>
                    <dd>
                        <?php
$_from = $_smarty_tpl->tpl_vars['note']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_n_1_saved_item = isset($_smarty_tpl->tpl_vars['n']) ? $_smarty_tpl->tpl_vars['n'] : false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable();
$__foreach_n_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_n_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$__foreach_n_1_saved_local_item = $_smarty_tpl->tpl_vars['n'];
?>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['n']->value;?>

                        </p>
                        <?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_1_saved_local_item;
}
}
if ($__foreach_n_1_saved_item) {
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_1_saved_item;
}
?>
                    </dd>
                    <?php }?>
                    <dt>
                        Select bibliography
                    </dt>
                    <dd>
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['bib']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ref_2_saved_item = isset($_smarty_tpl->tpl_vars['ref']) ? $_smarty_tpl->tpl_vars['ref'] : false;
$_smarty_tpl->tpl_vars['ref'] = new Smarty_Variable();
$__foreach_ref_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_ref_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['ref']->value) {
$__foreach_ref_2_saved_local_item = $_smarty_tpl->tpl_vars['ref'];
?>
                            <li>
                                <?php echo $_smarty_tpl->tpl_vars['ref']->value;?>

                            </li>
                            <?php
$_smarty_tpl->tpl_vars['ref'] = $__foreach_ref_2_saved_local_item;
}
}
if ($__foreach_ref_2_saved_item) {
$_smarty_tpl->tpl_vars['ref'] = $__foreach_ref_2_saved_item;
}
?>
                        </ul>
                    </dd>
                </dl>
                </div> <!-- end of manuscript-details-list -->
                <hr>
                <h2>
                    Parts
                </h2>
                <?php
$_from = $_smarty_tpl->tpl_vars['parts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_details_3_saved_item = isset($_smarty_tpl->tpl_vars['details']) ? $_smarty_tpl->tpl_vars['details'] : false;
$__foreach_details_3_saved_key = isset($_smarty_tpl->tpl_vars['no']) ? $_smarty_tpl->tpl_vars['no'] : false;
$_smarty_tpl->tpl_vars['details'] = new Smarty_Variable();
$__foreach_details_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_details_3_total) {
$_smarty_tpl->tpl_vars['no'] = new Smarty_Variable();
$__foreach_details_3_iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['no']->value => $_smarty_tpl->tpl_vars['details']->value) {
$__foreach_details_3_iteration++;
$_smarty_tpl->tpl_vars['details']->last = $__foreach_details_3_iteration == $__foreach_details_3_total;
$__foreach_details_3_saved_local_item = $_smarty_tpl->tpl_vars['details'];
?>
                <article id='part<?php echo $_smarty_tpl->tpl_vars['details']->value[10];?>
'>
                    <h3>
                        <?php echo 1+$_smarty_tpl->tpl_vars['no']->value;
if ($_smarty_tpl->tpl_vars['details']->value[0]) {?> (<?php echo $_smarty_tpl->tpl_vars['details']->value[0];?>
)<?php }?>:
                        <?php echo smarty_modifier_regex_replace((($tmp = @$_smarty_tpl->tpl_vars['details']->value[2])===null||$tmp==='' ? '(untitled)' : $tmp),"/~([^~]*)~/","<i>\\1</i>");?>

                    </h3>
                    <?php if ($_smarty_tpl->tpl_vars['details']->value[1]) {?>
                    <h4>
                        by <?php echo $_smarty_tpl->tpl_vars['details']->value[1];?>

                    </h4>
                    <?php }?>
                    <div class='btn-group'>
                    <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#part<?php echo $_smarty_tpl->tpl_vars['details']->value[10];?>
-details-list'>
                        <span class='glyphicon glyphicon-th-list'></span> Show/hide details
                    </button>
                    <?php if ($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['details']->value[11]]) {?>
                    <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#part<?php echo $_smarty_tpl->tpl_vars['details']->value[10];?>
-images'>
                        <span class='glyphicon glyphicon-picture'></span> Show/hide images
                    </button>
                    <?php }?>
                    </div>
                    <div id='part<?php echo $_smarty_tpl->tpl_vars['details']->value[10];?>
-details-list' class='collapse'>
                    <dl>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[14]) {?>
                        <dt>
                            Origin
                        </dt>
                        <dd class='oneline'>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[14];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['regions']->value[$_smarty_tpl->tpl_vars['details']->value[11]]) {?>
                        <dt>
                            Origin List
                        </dt>
                        <dd>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['regions']->value[$_smarty_tpl->tpl_vars['details']->value[11]];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_region_4_saved_item = isset($_smarty_tpl->tpl_vars['region']) ? $_smarty_tpl->tpl_vars['region'] : false;
$_smarty_tpl->tpl_vars['region'] = new Smarty_Variable();
$__foreach_region_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_region_4_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['region']->value) {
$__foreach_region_4_saved_local_item = $_smarty_tpl->tpl_vars['region'];
?>
                                <li>
                                    <a href='../results?region=[<?php echo $_smarty_tpl->tpl_vars['region']->value[0];?>
]&amp;grouping=p'>
                                        <?php echo $_smarty_tpl->tpl_vars['region']->value[1];?>

                                    </a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['region'] = $__foreach_region_4_saved_local_item;
}
}
if ($__foreach_region_4_saved_item) {
$_smarty_tpl->tpl_vars['region'] = $__foreach_region_4_saved_item;
}
?>
                            </ul>
                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[4]) {?>
                        <dt>
                            Language
                        </dt>
                        <dd class='oneline'>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[4];?>

                        </dd>
                        <?php }?>
                        <dt>
                            Language list
                        </dt>
                        <dd>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['details']->value[11]];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lang_5_saved_item = isset($_smarty_tpl->tpl_vars['lang']) ? $_smarty_tpl->tpl_vars['lang'] : false;
$_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable();
$__foreach_lang_5_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_lang_5_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$__foreach_lang_5_saved_local_item = $_smarty_tpl->tpl_vars['lang'];
?>
                                <li>
                                    <a href='../results?language=[<?php echo $_smarty_tpl->tpl_vars['lang']->value[0];?>
]&amp;grouping=p'>
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value[1];?>

                                    </a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_5_saved_local_item;
}
}
if ($__foreach_lang_5_saved_item) {
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_5_saved_item;
}
?>
                            </ul>
                        </dd>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[3]) {?>
                        <dt>
                            Dates
                        </dt>
                        <dd class='oneline'>
                            <?php if ($_smarty_tpl->tpl_vars['details']->value[12] && $_smarty_tpl->tpl_vars['details']->value[13]) {?>
                            <a href='../results?yearstart=<?php echo $_smarty_tpl->tpl_vars['details']->value[12];?>
&amp;yearend=<?php echo $_smarty_tpl->tpl_vars['details']->value[13];?>
&amp;grouping=p'>
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[3];?>

                            <?php if ($_smarty_tpl->tpl_vars['details']->value[12] && $_smarty_tpl->tpl_vars['details']->value[13]) {?>
                            </a>
                            <?php }?>
                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[5]) {?>
                        <dt>
                            Dimensions
                        </dt>
                        <dd class='oneline'>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[5];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[6]) {?>
                        <dt>
                            Script
                        </dt>
                        <dd class='oneline'>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[6];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['scripts']->value[$_smarty_tpl->tpl_vars['details']->value[11]]) {?>
                        <dt>
                            Script list
                        </dt>
                        <dd>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['scripts']->value[$_smarty_tpl->tpl_vars['details']->value[11]];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_spt_6_saved_item = isset($_smarty_tpl->tpl_vars['spt']) ? $_smarty_tpl->tpl_vars['spt'] : false;
$_smarty_tpl->tpl_vars['spt'] = new Smarty_Variable();
$__foreach_spt_6_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_spt_6_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['spt']->value) {
$__foreach_spt_6_saved_local_item = $_smarty_tpl->tpl_vars['spt'];
?>
                                <li>
                                    <a href='../results?script=[<?php echo $_smarty_tpl->tpl_vars['spt']->value[0];?>
]'>
                                        <?php echo $_smarty_tpl->tpl_vars['spt']->value[1];?>

                                    </a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['spt'] = $__foreach_spt_6_saved_local_item;
}
}
if ($__foreach_spt_6_saved_item) {
$_smarty_tpl->tpl_vars['spt'] = $__foreach_spt_6_saved_item;
}
?>
                            </ul>
                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[7]) {?>
                        <dt>
                            Scribe
                        </dt>
                        <dd class='oneline'>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[7];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['scribes']->value[$_smarty_tpl->tpl_vars['details']->value[11]]) {?>
                        <dt>
                            Scribe list
                        </dt>
                        <dd>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['scribes']->value[$_smarty_tpl->tpl_vars['details']->value[11]];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sbe_7_saved_item = isset($_smarty_tpl->tpl_vars['sbe']) ? $_smarty_tpl->tpl_vars['sbe'] : false;
$_smarty_tpl->tpl_vars['sbe'] = new Smarty_Variable();
$__foreach_sbe_7_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_sbe_7_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['sbe']->value) {
$__foreach_sbe_7_saved_local_item = $_smarty_tpl->tpl_vars['sbe'];
?>
                                <li>
                                    <a href='../results?scribe=[<?php echo $_smarty_tpl->tpl_vars['sbe']->value[0];?>
]'>
                                        <?php echo $_smarty_tpl->tpl_vars['sbe']->value[1];?>

                                    </a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['sbe'] = $__foreach_sbe_7_saved_local_item;
}
}
if ($__foreach_sbe_7_saved_item) {
$_smarty_tpl->tpl_vars['sbe'] = $__foreach_sbe_7_saved_item;
}
?>
                            </ul>
                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[8]) {?>
                        <dt>
                            Provenance
                        </dt>
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[8];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[9]) {?>
                        <dt>
                            Attribution
                        </dt>
                        <dd class='oneline'>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[9];?>

                        </dd>
                        <?php }?>
                    </dl>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['details']->value[11]]) {?>
                    <div id='part<?php echo $_smarty_tpl->tpl_vars['details']->value[10];?>
-images' class='grid collapse in'>
                        <?php
$_from = $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['details']->value[11]];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_8_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$__foreach_image_8_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_image_8_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$__foreach_image_8_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                        <div class='grid-item<?php if ($_smarty_tpl->tpl_vars['image_widths']->value[$_smarty_tpl->tpl_vars['details']->value[11]][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--width<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_widths']->value[$_smarty_tpl->tpl_vars['details']->value[11]][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}
if ($_smarty_tpl->tpl_vars['image_heights']->value[$_smarty_tpl->tpl_vars['details']->value[11]][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--height<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_heights']->value[$_smarty_tpl->tpl_vars['details']->value[11]][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}?>'>
                            <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
' data-toggle='tooltip' title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['image']->value[5], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 'untitled' : $tmp);
if ($_smarty_tpl->tpl_vars['image']->value[4]) {?> (<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)<?php }?>'>
                                <img class='img-responsive' src='<?php echo $_smarty_tpl->tpl_vars['image_urls']->value[$_smarty_tpl->tpl_vars['details']->value[11]][$_smarty_tpl->tpl_vars['image']->value[0]];?>
'>
                            </a>
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_8_saved_local_item;
}
}
if ($__foreach_image_8_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_8_saved_item;
}
?>
                    </div>
                    <?php }?>
                </article>
                <?php if (!($_smarty_tpl->tpl_vars['details']->last)) {?>
                <hr>
                <?php }?>

                <?php
$_smarty_tpl->tpl_vars['details'] = $__foreach_details_3_saved_local_item;
}
}
if ($__foreach_details_3_saved_item) {
$_smarty_tpl->tpl_vars['details'] = $__foreach_details_3_saved_item;
}
if ($__foreach_details_3_saved_key) {
$_smarty_tpl->tpl_vars['no'] = $__foreach_details_3_saved_key;
}
?>
            </div>
        </div> <!-- end of content-row -->

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
