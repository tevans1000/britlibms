<?php
/* Smarty version 3.1.28, created on 2016-08-07 16:18:38
  from "c:\wamp\www\britlibms\sync\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57a7514e4c5984_93601091',
  'file_dependency' => 
  array (
    'cb0d0fcddf3c9f7d1fc7d292f7a4f3fdde713dd9' => 
    array (
      0 => 'c:\\wamp\\www\\britlibms\\sync\\templates\\index.tpl',
      1 => 1470583109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a7514e4c5984_93601091 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'c:/wamp/www/britlibms/sync/includes/Smarty-3.1.28/libs/plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) require_once 'c:/wamp/www/britlibms/sync/includes/Smarty-3.1.28/libs/plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'c:/wamp/www/britlibms/sync/includes/Smarty-3.1.28/libs/plugins\\modifier.truncate.php';
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <div id='filter-column' class='col-xs-3'>
                <nav>
                    <h2>
                        Filters
                    </h2>
                    <?php if (count($_smarty_tpl->tpl_vars['filter_lists']->value) == 0) {?>
                    <p>
                        No further filtering possible
                    </p>
                    <?php } else { ?>
                    <ul class='nav nav-tabs'>
                        <?php
$_from = $_smarty_tpl->tpl_vars['filter_lists']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_list_0_saved_item = isset($_smarty_tpl->tpl_vars['list']) ? $_smarty_tpl->tpl_vars['list'] : false;
$__foreach_list_0_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['list'] = new Smarty_Variable();
$__foreach_list_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_list_0_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$__foreach_list_0_first = true;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->first = $__foreach_list_0_first;
$__foreach_list_0_first = false;
$__foreach_list_0_saved_local_item = $_smarty_tpl->tpl_vars['list'];
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['list']->first) {?>class='active'<?php }?>>
                            <a data-toggle='tab' href='#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
'>
                                <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>

                            </a>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_local_item;
}
}
if ($__foreach_list_0_saved_item) {
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_item;
}
if ($__foreach_list_0_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_list_0_saved_key;
}
?>
                    </ul> <!-- end of facet tabs -->
                    <div class='tab-content'>
                        <?php
$_from = $_smarty_tpl->tpl_vars['filter_lists']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_list_1_saved_item = isset($_smarty_tpl->tpl_vars['list']) ? $_smarty_tpl->tpl_vars['list'] : false;
$__foreach_list_1_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['list'] = new Smarty_Variable();
$__foreach_list_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_list_1_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$__foreach_list_1_first = true;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->first = $__foreach_list_1_first;
$__foreach_list_1_first = false;
$__foreach_list_1_saved_local_item = $_smarty_tpl->tpl_vars['list'];
?>
                        <div id='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' class='tab-pane <?php if ($_smarty_tpl->tpl_vars['list']->first) {?>active<?php }?>'>
                            <?php if ($_smarty_tpl->tpl_vars['name']->value == 'date') {?>
                            <form class='form-inline' role='form' method='get'>
                                <div class='form-group'>
                                    <label for='yearstart'>From year:</label>
                                    <input type='number' min='300' max='1873' name='yearstart'>
                                </div>
                                <div class='form-group'>
                                    <label for='yearend'>to year:</label>
                                    <input type='number' min='300' max='1873' name='yearend'>
                                </div>
                                <?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_2_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_2_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['k']->value != 'yearstart' && $_smarty_tpl->tpl_vars['k']->value != 'yearend' && $_smarty_tpl->tpl_vars['k']->value != 'page') {?>
                                <input type='hidden' name='<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'>
                                <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
if ($__foreach_v_2_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_2_saved_key;
}
?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_3_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_3_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_3_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_3_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['k']->value != 'yearstart' && $_smarty_tpl->tpl_vars['k']->value != 'yearend' && $_smarty_tpl->tpl_vars['k']->value != 'page') {?>
                                <input type='hidden' name='<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'>
                                <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved_local_item;
}
}
if ($__foreach_v_3_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved_item;
}
if ($__foreach_v_3_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_3_saved_key;
}
?>
                                <div class='form-group'>
                                    <button type='submit' class='btn btn-primary'>
                                        <span class='glyphicon glyphicon-refresh'></span>
                                    </button>
                                </div>
                            </form>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_4_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_4_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_4_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['start']) {?> 
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['count'] != 0) {?>
                                    <a href='?yearstart=<?php echo $_smarty_tpl->tpl_vars['item']->value['start'];?>
&amp;yearend=<?php echo $_smarty_tpl->tpl_vars['item']->value['end'];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_5_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_5_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_5_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_5_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_5_saved_local_item = $_smarty_tpl->tpl_vars['val'];
if ($_smarty_tpl->tpl_vars['arg']->value != 'page' && $_smarty_tpl->tpl_vars['arg']->value != 'yearstart' && $_smarty_tpl->tpl_vars['arg']->value != 'yearend') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_5_saved_local_item;
}
}
if ($__foreach_val_5_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_5_saved_item;
}
if ($__foreach_val_5_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_5_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_6_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_6_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_6_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_6_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_6_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_6_saved_local_item;
}
}
if ($__foreach_val_6_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_6_saved_item;
}
if ($__foreach_val_6_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_6_saved_key;
}
?>'>
                                    <?php }?>
                                        <?php if (($_smarty_tpl->tpl_vars['item']->value['start']%10 == 0 && $_smarty_tpl->tpl_vars['item']->value['end'] == $_smarty_tpl->tpl_vars['item']->value['start']+9 && $_smarty_tpl->tpl_vars['item']->value['start']%100 != 0) || ($_smarty_tpl->tpl_vars['item']->value['start']%100 == 0 && $_smarty_tpl->tpl_vars['item']->value['end'] == $_smarty_tpl->tpl_vars['item']->value['start']+99)) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['start'];?>
s 
                                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['start'] == $_smarty_tpl->tpl_vars['item']->value['end']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['start'];?>
 
                                        <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['start'];?>
&ndash;<?php echo $_smarty_tpl->tpl_vars['item']->value['end'];?>
 
                                        <?php }?>
                                        (<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
)
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['count'] != 0) {?>
                                    </a>
                                    <?php }?>
                                </li>
                                <?php } else { ?>
                                
                                <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_4_saved_local_item;
}
}
if ($__foreach_item_4_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_4_saved_item;
}
?>
                            </ul> <!-- end of date-list -->
                            <?php } else { ?>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_7_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_7_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_7_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_7_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                <li>
                                    <a href='?<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_8_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_8_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_8_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_8_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_8_saved_local_item = $_smarty_tpl->tpl_vars['val'];
if ($_smarty_tpl->tpl_vars['arg']->value != $_smarty_tpl->tpl_vars['name']->value && $_smarty_tpl->tpl_vars['arg']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_8_saved_local_item;
}
}
if ($__foreach_val_8_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_8_saved_item;
}
if ($__foreach_val_8_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_8_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_9_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_9_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_9_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_9_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_9_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php if ($_smarty_tpl->tpl_vars['arg']->value == $_smarty_tpl->tpl_vars['name']->value) {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['val']->value,'[]','['),']',',');
echo $_smarty_tpl->tpl_vars['item']->value[0];?>
]<?php } else {
echo $_smarty_tpl->tpl_vars['val']->value;
}
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_9_saved_local_item;
}
}
if ($__foreach_val_9_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_9_saved_item;
}
if ($__foreach_val_9_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_9_saved_key;
}
?>'>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
)
                                    </a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_7_saved_local_item;
}
}
if ($__foreach_item_7_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_7_saved_item;
}
?>
                            </ul>
                            <?php }?>
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_1_saved_local_item;
}
}
if ($__foreach_list_1_saved_item) {
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_1_saved_item;
}
if ($__foreach_list_1_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_list_1_saved_key;
}
?>
                    </div>
                    <?php }?>
                </nav>
            </div> <!-- end of filter-column -->
            <div id='results-column' class='col-xs-9'>
                <section>
                    <h1>
                        Results
                    </h1>
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['maxpage']->value > 1) {?>
                        <?php echo $_smarty_tpl->tpl_vars['firstret']->value;?>
&ndash;<?php echo $_smarty_tpl->tpl_vars['lastret']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['rescount']->value;?>
 (page <?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
)
                        <?php } elseif ($_smarty_tpl->tpl_vars['rescount']->value > 1) {?>
                        Viewing all <?php echo $_smarty_tpl->tpl_vars['rescount']->value;?>
 results found
                        <?php } elseif ($_smarty_tpl->tpl_vars['rescount']->value == 1) {?>
                        Only 1 result found
                        <?php } else { ?>
                        None found
                        <?php }?>
                    </p>
                    <h6>
                        Group by:
                    </h6>
                    <ul class='nav nav-pills'>
                        <li<?php if ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'm') {?> class='active'<?php }?>>
                            <a href='?grouping=m<?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_10_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_10_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_10_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_10_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_10_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'grouping') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_10_saved_local_item;
}
}
if ($__foreach_value_10_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_10_saved_item;
}
if ($__foreach_value_10_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_10_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_11_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_11_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_11_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_11_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_11_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_11_saved_local_item;
}
}
if ($__foreach_val_11_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_11_saved_item;
}
if ($__foreach_val_11_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_11_saved_key;
}
?>'>
                                Manuscript
                            </a>
                        </li>
                        <li<?php if ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'p') {?> class='active'<?php }?>>
                            <a href='?grouping=p<?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_12_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_12_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_12_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_12_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_12_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'grouping') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_12_saved_local_item;
}
}
if ($__foreach_value_12_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_12_saved_item;
}
if ($__foreach_value_12_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_12_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_13_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_13_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_13_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_13_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_13_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_13_saved_local_item;
}
}
if ($__foreach_val_13_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_13_saved_item;
}
if ($__foreach_val_13_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_13_saved_key;
}
?>'>
                                Part
                            </a>
                        </li>
                        <li<?php if ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'i') {?> class='active'<?php }?>>
                            <a href='?grouping=i<?php
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_14_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_14_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_14_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_14_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_14_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'grouping') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_14_saved_local_item;
}
}
if ($__foreach_value_14_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_14_saved_item;
}
if ($__foreach_value_14_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_14_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_15_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_15_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_15_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_15_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_15_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_15_saved_local_item;
}
}
if ($__foreach_val_15_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_15_saved_item;
}
if ($__foreach_val_15_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_15_saved_key;
}
?>'>
                                Image
                            </a>
                        </li>
                    </ul>
                    <?php if ($_smarty_tpl->tpl_vars['maxpage']->value > 1) {?> 
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
$__foreach_value_16_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_16_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_16_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_16_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_16_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_16_saved_local_item;
}
}
if ($__foreach_value_16_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_16_saved_item;
}
if ($__foreach_value_16_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_16_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_17_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_17_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_17_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_17_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_17_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_17_saved_local_item;
}
}
if ($__foreach_val_17_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_17_saved_item;
}
if ($__foreach_val_17_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_17_saved_key;
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
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['reslist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_res_18_saved_item = isset($_smarty_tpl->tpl_vars['res']) ? $_smarty_tpl->tpl_vars['res'] : false;
$_smarty_tpl->tpl_vars['res'] = new Smarty_Variable();
$__foreach_res_18_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_res_18_total) {
$_smarty_tpl->tpl_vars['res']->iteration=0;
$__foreach_res_18_iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->iteration++;
$__foreach_res_18_iteration++;
$_smarty_tpl->tpl_vars['res']->last = $__foreach_res_18_iteration == $__foreach_res_18_total;
$__foreach_res_18_saved_local_item = $_smarty_tpl->tpl_vars['res'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'i') {?>
                    <?php if (!(($_smarty_tpl->tpl_vars['res']->iteration-1) % 2)) {?>
                    <hr>
                    <div class='row'>
                    <?php }?>
                        <div class='col-lg-6'>
                            <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['res']->value[0];?>
'>
                                <h4>
                                    <?php echo $_smarty_tpl->tpl_vars['res']->value[3];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value[4];?>
 (<?php echo $_smarty_tpl->tpl_vars['res']->value[5];?>
)
                                </h4>
                                <h3>
                                    <?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>

                                </h3>
                                <?php if ($_smarty_tpl->tpl_vars['res']->value[8] == 1) {?>
                                <p>
                                    (image of <?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
 from folder <?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
)
                                </p>
                                <?php } elseif ($_smarty_tpl->tpl_vars['res']->value[8] == 5 || $_smarty_tpl->tpl_vars['res']->value[8] == 8 || $_smarty_tpl->tpl_vars['res']->value[8] == 9) {?>
                                <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
/mid/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['res']->value[2],4,'',true);?>
/<?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
.jpg">
                                <?php } else { ?>
                                <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
/mid/<?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
.jpg">
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['res']->value[7]) {?>
                                <p>
                                    by <?php echo $_smarty_tpl->tpl_vars['res']->value[7];?>

                                </p>
                                <?php }?>
                            </a>
                        </div>
                    <?php if (!($_smarty_tpl->tpl_vars['res']->iteration % 2)) {?>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['res']->last) {?>
                    <div class='row'>
                    <?php }?>
                    
                    <?php } elseif ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'p') {?>
                    <hr>
                    <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['res']->value[8];?>
#part<?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>
'>
                        <h4>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
 <?php if ($_smarty_tpl->tpl_vars['res']->value[3]) {?>(<?php echo $_smarty_tpl->tpl_vars['res']->value[3];?>
)<?php }?>
                            [part <?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>
 of <?php echo $_smarty_tpl->tpl_vars['res']->value[7];?>
]
                        </h4>
                        <h3>
                            <?php echo smarty_modifier_regex_replace((($tmp = @$_smarty_tpl->tpl_vars['res']->value[5])===null||$tmp==='' ? '(untitled)' : $tmp),"/~([^~]*)~/","<i>\\1</i>");?>

                        </h3>
                        <?php if ($_smarty_tpl->tpl_vars['res']->value[4]) {?>
                        <h5>
                            
                            by <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['res']->value[4],"/\(index[^\)]*\)/",'');?>

                        </h5>
                        <?php }?>
                    </a>
                    <?php if (count($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['res']->value[0]]) > 0) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['res']->value[0]];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_19_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$__foreach_image_19_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_image_19_total) {
$_smarty_tpl->tpl_vars['image']->iteration=0;
$__foreach_image_19_iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->iteration++;
$__foreach_image_19_iteration++;
$_smarty_tpl->tpl_vars['image']->last = $__foreach_image_19_iteration == $__foreach_image_19_total;
$__foreach_image_19_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                    <?php if (!(($_smarty_tpl->tpl_vars['image']->iteration-1) % 6)) {?>
                    <div class='row'>
                    <?php }?>
                        <?php if (!(($_smarty_tpl->tpl_vars['image']->iteration-1) % 3)) {?>
                        <div class='col-lg-6'>
                            <div class='row'>
                        <?php }?>
                                <div class='col-sm-4'>
                                    <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
'>
                                        <h6>
                                            <?php if ($_smarty_tpl->tpl_vars['image']->value[1]) {
echo $_smarty_tpl->tpl_vars['image']->value[1];?>
:<?php }?> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value[2])===null||$tmp==='' ? '(No caption)' : $tmp);?>

                                        </h6>
                                        <?php if ($_smarty_tpl->tpl_vars['image']->value[3] == 1) {?>
                                        <p>
                                            (image of <?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
 from folder <?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)
                                        </p>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->value[3] == 5 || $_smarty_tpl->tpl_vars['image']->value[3] == 8 || $_smarty_tpl->tpl_vars['image']->value[3] == 9) {?>
                                        <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
/thm/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['image']->value[5],4,'',true);?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
.jpg">
                                        <?php } else { ?>
                                        <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
/thm/<?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
.jpg">
                                        <?php }?>
                                    </a>
                                </div>
                        <?php if (!($_smarty_tpl->tpl_vars['image']->iteration % 3)) {?>
                            </div>
                        </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->last) {?>
                            </div>
                        </div>
                        <?php }?>
                    <?php if (!($_smarty_tpl->tpl_vars['image']->iteration % 6)) {?>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['image']->last) {?>
                    </div>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_19_saved_local_item;
}
}
if ($__foreach_image_19_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_19_saved_item;
}
?>
                    <?php }?>
                    
                    <?php } else { if (!isset($_smarty_tpl->tpl_vars['get']) || !is_array($_smarty_tpl->tpl_vars['get']->value)) $_smarty_tpl->smarty->ext->_var->createLocalArrayVariable($_smarty_tpl, 'get');
if ($_smarty_tpl->tpl_vars['get']->value['grouping'] = 'm') {?>
                    <hr>
                    <h3>
                        <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['res']->value[0];?>
'>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>

                        </a>
                    </h3>
                    <dl>
                        <?php if ($_smarty_tpl->tpl_vars['res']->value[3]) {?>
                        <dt>
                            Official foliation
                        </dt>
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[3];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['res']->value[4]) {?>
                        <dt>
                            Collation
                        </dt>
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[4];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['res']->value[5]) {?>
                        <dt>
                            Form
                        </dt>
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[5];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['res']->value[6]) {?>
                        <dt>
                            Binding
                        </dt>
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>

                        </dd>
                        <?php }?>
                    </dl>
                    <?php if (count($_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['res']->value[0]]) > 0) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['res']->value[0]];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_20_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$__foreach_image_20_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_image_20_total) {
$_smarty_tpl->tpl_vars['image']->iteration=0;
$__foreach_image_20_iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->iteration++;
$__foreach_image_20_iteration++;
$_smarty_tpl->tpl_vars['image']->last = $__foreach_image_20_iteration == $__foreach_image_20_total;
$__foreach_image_20_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                    <?php if (!(($_smarty_tpl->tpl_vars['image']->iteration-1) % 6)) {?>
                    <div class='row'>
                    <?php }?>
                        <?php if (!(($_smarty_tpl->tpl_vars['image']->iteration-1) % 3)) {?>
                        <div class='col-lg-6'>
                            <div class='row'>
                        <?php }?>
                                <div class='col-sm-4'>
                                    <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
'>
                                        <h6>
                                            <?php if ($_smarty_tpl->tpl_vars['image']->value[1]) {
echo $_smarty_tpl->tpl_vars['image']->value[1];?>
:<?php }?> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['image']->value[2])===null||$tmp==='' ? '(No caption)' : $tmp);?>

                                        </h6>
                                        <?php if ($_smarty_tpl->tpl_vars['image']->value[3] == 1) {?>
                                        <p>
                                            (image of <?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
 from folder <?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)
                                        </p>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->value[3] == 5 || $_smarty_tpl->tpl_vars['image']->value[3] == 8 || $_smarty_tpl->tpl_vars['image']->value[3] == 9) {?>
                                        <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
/thm/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['image']->value[5],4,'',true);?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
.jpg">
                                        <?php } else { ?>
                                        <img class='img-responsive' src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
/thm/<?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
.jpg">
                                        <?php }?>
                                    </a>
                                </div>
                        <?php if (!($_smarty_tpl->tpl_vars['image']->iteration % 3)) {?>
                            </div>
                        </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->last) {?>
                            </div>
                        </div>
                        <?php }?>
                    <?php if (!($_smarty_tpl->tpl_vars['image']->iteration % 6)) {?>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['image']->last) {?>
                    </div>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_20_saved_local_item;
}
}
if ($__foreach_image_20_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_20_saved_item;
}
?>
                    <?php }?>
                    
                    <?php }}?>
                    
                    <?php
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_18_saved_local_item;
}
}
if ($__foreach_res_18_saved_item) {
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_18_saved_item;
}
?>
                </section>
            </div> <!-- end of results-column -->
        </div> <!-- end of content-row -->
        
        <?php if ($_smarty_tpl->tpl_vars['maxpage']->value > 1) {?> 
        <div id='pagination-row' class='row'>
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
$__foreach_value_21_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_21_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_21_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_21_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_21_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_21_saved_local_item;
}
}
if ($__foreach_value_21_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_21_saved_item;
}
if ($__foreach_value_21_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_21_saved_key;
}
$_from = $_smarty_tpl->tpl_vars['get_arrays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_22_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_22_saved_key = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_22_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_val_22_total) {
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_22_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>&amp;<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['val']->value;
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_22_saved_local_item;
}
}
if ($__foreach_val_22_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_22_saved_item;
}
if ($__foreach_val_22_saved_key) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_val_22_saved_key;
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
        </div> <!-- end of pagination-row -->
        <?php }?>
        
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