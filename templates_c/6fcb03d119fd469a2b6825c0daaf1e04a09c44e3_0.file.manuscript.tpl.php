<?php
/* Smarty version 3.1.28, created on 2016-08-27 21:28:27
  from "c:\wamp\www\britlibms\sync\templates\manuscript.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57c1f7eb83c1f9_43516160',
  'file_dependency' => 
  array (
    '6fcb03d119fd469a2b6825c0daaf1e04a09c44e3' => 
    array (
      0 => 'c:\\wamp\\www\\britlibms\\sync\\templates\\manuscript.tpl',
      1 => 1472329699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c1f7eb83c1f9_43516160 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once 'c:/wamp/www/britlibms/sync/includes/Smarty-3.1.28/libs/plugins\\modifier.regex_replace.php';
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
 src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='../masonry.js'><?php echo '</script'; ?>
>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
    <div class='container-fluid'>
        
        <div id='header-row' class='row'>
            <div class='col-sm-12'>
                <header>
                    <h2>
                        Header
                    </h2>
                </header>
            </div>
        </div> <!-- end of header-row -->
        
        <div id='content-row' class='row'>
            <div class='col-sm-12'>
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>

                </h1>
                <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#manuscript-details-list'>
                    <span class='glyphicon glyphicon-th-list'></span>
                </button>
                <div id='manuscript-details-list' class='collapse'>
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
                        <span class='glyphicon glyphicon-th-list'></span>
                    </button>
                    <?php if ($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['details']->value[11]]) {?>
                    <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#part<?php echo $_smarty_tpl->tpl_vars['details']->value[10];?>
-images'>
                        <span class='glyphicon glyphicon-picture'></span>
                    </button>
                    <?php }?>
                    </div>
                    <div id='part<?php echo $_smarty_tpl->tpl_vars['details']->value[10];?>
-details-list' class='collapse'>
                    <dl>
                        <dt>
                            Origin
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
]'>
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
]'>
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
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[3];?>

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
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[7]) {?>
                        <dt>
                            Scribe
                        </dt>
                        <dd class='oneline'>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[7];?>

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
$__foreach_image_6_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$__foreach_image_6_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_image_6_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$__foreach_image_6_saved_local_item = $_smarty_tpl->tpl_vars['image'];
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
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_6_saved_local_item;
}
}
if ($__foreach_image_6_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_6_saved_item;
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
        
        <div class='row'>
            <div class='col-sm-12'>
                <footer>
                    <h2>
                        Footer
                    </h2>
                </footer>
            </div>
        </div>
        
    </div>
</body>
</html>
<?php }
}
