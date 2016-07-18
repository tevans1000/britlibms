<?php
/* Smarty version 3.1.28, created on 2016-07-18 17:55:35
  from "C:\wamp\www\britlibms\sync\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_578d0a0757cfe0_25206149',
  'file_dependency' => 
  array (
    'be13fdd9e2afcbfbdd3e6e268c97f7ceac6741ae' => 
    array (
      0 => 'C:\\wamp\\www\\britlibms\\sync\\templates\\index.tpl',
      1 => 1468860932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578d0a0757cfe0_25206149 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
</head>
<body>
    <p>
       You are on page <?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
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
    <ul>
        <?php
$_smarty_tpl->tpl_vars['linkno'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['linkno']->step = 1;$_smarty_tpl->tpl_vars['linkno']->total = (int) ceil(($_smarty_tpl->tpl_vars['linkno']->step > 0 ? $_smarty_tpl->tpl_vars['pageno']->value+2+1 - ($_smarty_tpl->tpl_vars['pageno']->value-2) : $_smarty_tpl->tpl_vars['pageno']->value-2-($_smarty_tpl->tpl_vars['pageno']->value+2)+1)/abs($_smarty_tpl->tpl_vars['linkno']->step));
if ($_smarty_tpl->tpl_vars['linkno']->total > 0) {
for ($_smarty_tpl->tpl_vars['linkno']->value = $_smarty_tpl->tpl_vars['pageno']->value-2, $_smarty_tpl->tpl_vars['linkno']->iteration = 1;$_smarty_tpl->tpl_vars['linkno']->iteration <= $_smarty_tpl->tpl_vars['linkno']->total;$_smarty_tpl->tpl_vars['linkno']->value += $_smarty_tpl->tpl_vars['linkno']->step, $_smarty_tpl->tpl_vars['linkno']->iteration++) {
$_smarty_tpl->tpl_vars['linkno']->first = $_smarty_tpl->tpl_vars['linkno']->iteration == 1;$_smarty_tpl->tpl_vars['linkno']->last = $_smarty_tpl->tpl_vars['linkno']->iteration == $_smarty_tpl->tpl_vars['linkno']->total;?>
        <?php if (($_smarty_tpl->tpl_vars['linkno']->value <= 0) || ($_smarty_tpl->tpl_vars['linkno']->value > $_smarty_tpl->tpl_vars['maxpage']->value)) {?>
        <?php continue 1;?>
        <?php }?>
        <li>
            <a href='?page=<?php echo $_smarty_tpl->tpl_vars['linkno']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['linkno']->value;?>
</a>
        </li>
        <?php }
}
?>

    </ul>
</body>
</html>
<?php }
}
