<?php
/* Smarty version 3.1.28, created on 2016-08-23 15:29:31
  from "/var/www/html/britlibms/sync/templates/illumination.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57bc5dcb413289_63803315',
  'file_dependency' => 
  array (
    'd770536011e3c4d0bbe699516fce5dffc57f551a' => 
    array (
      0 => '/var/www/html/britlibms/sync/templates/illumination.tpl',
      1 => 1471962564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bc5dcb413289_63803315 ($_smarty_tpl) {
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
                    <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
#part<?php echo $_smarty_tpl->tpl_vars['record']->value[7];?>
'>
                        <?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value[2];?>

                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['record']->value[3]) {?>(<?php echo $_smarty_tpl->tpl_vars['record']->value[3];?>
)<?php }?> &mdash;
                    <?php echo (($tmp = @smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['record']->value[4],'/~([^~]*)~/','<i>\1</i>'))===null||$tmp==='' ? '(untitled)' : $tmp);?>

                </h1>
                <h2>
                    from <?php echo (($tmp = @$_smarty_tpl->tpl_vars['record']->value[6])===null||$tmp==='' ? 'an untitled part' : $tmp);?>

                </h2>
                <?php if ($_smarty_tpl->tpl_vars['record']->value[5]) {?>
                <h3>
                    by <?php echo $_smarty_tpl->tpl_vars['record']->value[5];?>

                </h3>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['record']->value[8] == 1) {?>
                <p>
                    (image of <?php echo $_smarty_tpl->tpl_vars['record']->value[10];?>
 from folder <?php echo $_smarty_tpl->tpl_vars['record']->value[9];?>
)
                </p>
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
                        <div class='grid-item<?php if ($_smarty_tpl->tpl_vars['image_widths']->value[0][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--width<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_widths']->value[0][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}
if ($_smarty_tpl->tpl_vars['image_heights']->value[0][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--height<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_heights']->value[0][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}?>'>
                            <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
' data-toggle='tooltip' title='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value[5])===null||$tmp==='' ? 'untitled' : $tmp);
if ($_smarty_tpl->tpl_vars['image']->value[4]) {?> (<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)<?php }?>'>
                                <img class='img-responsive' src='<?php echo $_smarty_tpl->tpl_vars['image_urls']->value[0][$_smarty_tpl->tpl_vars['image']->value[0]];?>
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
                <?php if ($_smarty_tpl->tpl_vars['same_part']->value) {?>
                <h2>
                    Other images from the same part
                </h2>
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
                        <div class='grid-item<?php if ($_smarty_tpl->tpl_vars['image_widths']->value[1][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--width<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_widths']->value[1][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}
if ($_smarty_tpl->tpl_vars['image_heights']->value[1][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--height<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_heights']->value[1][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}?>'>
                            <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
' data-toggle='tooltip' title='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value[5])===null||$tmp==='' ? 'untitled' : $tmp);
if ($_smarty_tpl->tpl_vars['image']->value[4]) {?> (<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)<?php }?>'>
                                <img class='img-responsive' src='<?php echo $_smarty_tpl->tpl_vars['image_urls']->value[1][$_smarty_tpl->tpl_vars['image']->value[0]];?>
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
                    Other images from this manuscript
                </h2>
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
                        <div class='grid-item<?php if ($_smarty_tpl->tpl_vars['image_widths']->value[2][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--width<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_widths']->value[2][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}
if ($_smarty_tpl->tpl_vars['image_heights']->value[2][$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--height<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_heights']->value[2][$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}?>'>
                            <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
' data-toggle='tooltip' title='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value[5])===null||$tmp==='' ? 'untitled' : $tmp);
if ($_smarty_tpl->tpl_vars['image']->value[4]) {?> (<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)<?php }?>'>
                                <img class='img-responsive' src='<?php echo $_smarty_tpl->tpl_vars['image_urls']->value[2][$_smarty_tpl->tpl_vars['image']->value[0]];?>
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
                <?php }?>
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
