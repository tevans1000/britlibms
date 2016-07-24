<?php
/* Smarty version 3.1.28, created on 2016-07-24 14:54:56
  from "C:\wamp\www\britlibms\sync\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5794c8b0950055_13059026',
  'file_dependency' => 
  array (
    'be13fdd9e2afcbfbdd3e6e268c97f7ceac6741ae' => 
    array (
      0 => 'C:\\wamp\\www\\britlibms\\sync\\templates\\index.tpl',
      1 => 1469368492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5794c8b0950055_13059026 ($_smarty_tpl) {
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-sm-12'>
                <header>
                    <h2>
                        Header
                    </h2>
                </header>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-2'>
                <nav>
                    <h2>
                        Filters
                    </h2>
                    <h3>
                        Regions
                    </h3>
                    <ul>
                        <?php
$_from = $_smarty_tpl->tpl_vars['region_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$__foreach_row_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_row_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                        <li>
                            <a href='?region=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_1_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_1_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_1_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_1_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'region') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_local_item;
}
}
if ($__foreach_value_1_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_item;
}
if ($__foreach_value_1_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_1_saved_key;
}
?>'>
                                <?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
)
                            </a>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
                    </ul>
                </nav>
            </div>
            <div class='col-sm-10'>
                <section>
                    <h1>
                        Results
                    </h1>
                    <p>
                        You are on page <?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
,
                        viewing <?php echo $_smarty_tpl->tpl_vars['perpage']->value;?>
 of the <?php echo $_smarty_tpl->tpl_vars['rescount']->value;?>
 results.
                    </p>
                    <ul>
                        <?php
$_from = $_smarty_tpl->tpl_vars['reslist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_res_2_saved_item = isset($_smarty_tpl->tpl_vars['res']) ? $_smarty_tpl->tpl_vars['res'] : false;
$_smarty_tpl->tpl_vars['res'] = new Smarty_Variable();
$__foreach_res_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_res_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$__foreach_res_2_saved_local_item = $_smarty_tpl->tpl_vars['res'];
?>
                        <li>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['res']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_attr_3_saved_item = isset($_smarty_tpl->tpl_vars['attr']) ? $_smarty_tpl->tpl_vars['attr'] : false;
$_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable();
$__foreach_attr_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_attr_3_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value) {
$__foreach_attr_3_saved_local_item = $_smarty_tpl->tpl_vars['attr'];
?>
                                <li>
                                    <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>

                                </li>
                                <?php
$_smarty_tpl->tpl_vars['attr'] = $__foreach_attr_3_saved_local_item;
}
}
if ($__foreach_attr_3_saved_item) {
$_smarty_tpl->tpl_vars['attr'] = $__foreach_attr_3_saved_item;
}
?>
                            </ul>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_2_saved_local_item;
}
}
if ($__foreach_res_2_saved_item) {
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_2_saved_item;
}
?>
                    </ul> 
                </section>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-12'>
                <nav>
                    <ul class='pagination'>
                        <?php
$_smarty_tpl->tpl_vars['linkno'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['linkno']->step = 1;$_smarty_tpl->tpl_vars['linkno']->total = (int) ceil(($_smarty_tpl->tpl_vars['linkno']->step > 0 ? $_smarty_tpl->tpl_vars['pageno']->value+4+1 - ($_smarty_tpl->tpl_vars['pageno']->value-4) : $_smarty_tpl->tpl_vars['pageno']->value-4-($_smarty_tpl->tpl_vars['pageno']->value+4)+1)/abs($_smarty_tpl->tpl_vars['linkno']->step));
if ($_smarty_tpl->tpl_vars['linkno']->total > 0) {
for ($_smarty_tpl->tpl_vars['linkno']->value = $_smarty_tpl->tpl_vars['pageno']->value-4, $_smarty_tpl->tpl_vars['linkno']->iteration = 1;$_smarty_tpl->tpl_vars['linkno']->iteration <= $_smarty_tpl->tpl_vars['linkno']->total;$_smarty_tpl->tpl_vars['linkno']->value += $_smarty_tpl->tpl_vars['linkno']->step, $_smarty_tpl->tpl_vars['linkno']->iteration++) {
$_smarty_tpl->tpl_vars['linkno']->first = $_smarty_tpl->tpl_vars['linkno']->iteration == 1;$_smarty_tpl->tpl_vars['linkno']->last = $_smarty_tpl->tpl_vars['linkno']->iteration == $_smarty_tpl->tpl_vars['linkno']->total;?>
                        <?php if (($_smarty_tpl->tpl_vars['linkno']->value <= 0)) {?>
                        <?php continue 1;?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['linkno']->value == $_smarty_tpl->tpl_vars['pageno']->value) {?>
                        <li class='active'>
                        <?php } else { ?>
                        <li>
                        <?php }?>
                            <a href='?page=<?php echo $_smarty_tpl->tpl_vars['linkno']->value;
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_4_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_4_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_4_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_4_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved_local_item;
}
}
if ($__foreach_value_4_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved_item;
}
if ($__foreach_value_4_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_4_saved_key;
}
?>'>
                                <?php echo $_smarty_tpl->tpl_vars['linkno']->value;?>

                            </a>
                        </li>
                        <?php if (($_smarty_tpl->tpl_vars['linkno']->value == $_smarty_tpl->tpl_vars['maxpage']->value)) {?>
                        <?php break 1;?>
                        <?php }?>
                        <?php }
}
?>

                    </ul>
                </nav>
            </div>
        </div>
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
