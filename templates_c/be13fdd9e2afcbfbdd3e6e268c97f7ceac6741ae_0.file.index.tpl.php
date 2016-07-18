<?php
/* Smarty version 3.1.28, created on 2016-07-18 17:22:46
  from "C:\wamp\www\britlibms\sync\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_578d0256c50ab1_95628294',
  'file_dependency' => 
  array (
    'be13fdd9e2afcbfbdd3e6e268c97f7ceac6741ae' => 
    array (
      0 => 'C:\\wamp\\www\\britlibms\\sync\\templates\\index.tpl',
      1 => 1468858959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578d0256c50ab1_95628294 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
</head>
<body>
    <p>
       You are on page <?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
,
       viewing <?php echo $_smarty_tpl->tpl_vars['perpage']->value;?>
 of the <?php echo $_smarty_tpl->tpl_vars['mscount']->value;?>
 results. 
    </p>
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['mslist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ms_0_saved_item = isset($_smarty_tpl->tpl_vars['ms']) ? $_smarty_tpl->tpl_vars['ms'] : false;
$_smarty_tpl->tpl_vars['ms'] = new Smarty_Variable();
$__foreach_ms_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_ms_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['ms']->value) {
$__foreach_ms_0_saved_local_item = $_smarty_tpl->tpl_vars['ms'];
?>
        <li>
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['ms']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_attr_1_saved_item = isset($_smarty_tpl->tpl_vars['attr']) ? $_smarty_tpl->tpl_vars['attr'] : false;
$_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable();
$__foreach_attr_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_attr_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value) {
$__foreach_attr_1_saved_local_item = $_smarty_tpl->tpl_vars['attr'];
?>
                <li>
                    <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>

                </li>
                <?php
$_smarty_tpl->tpl_vars['attr'] = $__foreach_attr_1_saved_local_item;
}
}
if ($__foreach_attr_1_saved_item) {
$_smarty_tpl->tpl_vars['attr'] = $__foreach_attr_1_saved_item;
}
?>
            </ul>
        </li>
        <?php
$_smarty_tpl->tpl_vars['ms'] = $__foreach_ms_0_saved_local_item;
}
}
if ($__foreach_ms_0_saved_item) {
$_smarty_tpl->tpl_vars['ms'] = $__foreach_ms_0_saved_item;
}
?>
    </ul>
</body>
</html>
<?php }
}
