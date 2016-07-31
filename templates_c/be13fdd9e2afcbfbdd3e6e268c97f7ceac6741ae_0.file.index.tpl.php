<?php
/* Smarty version 3.1.28, created on 2016-07-31 15:12:59
  from "C:\wamp\www\britlibms\sync\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_579e076b2935a0_87526667',
  'file_dependency' => 
  array (
    'be13fdd9e2afcbfbdd3e6e268c97f7ceac6741ae' => 
    array (
      0 => 'C:\\wamp\\www\\britlibms\\sync\\templates\\index.tpl',
      1 => 1469974375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579e076b2935a0_87526667 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:/wamp/www/britlibms/sync/pseudoroot/results/../../includes/Smarty-3.1.28/libs/plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_regex_replace')) require_once 'C:/wamp/www/britlibms/sync/pseudoroot/results/../../includes/Smarty-3.1.28/libs/plugins\\modifier.regex_replace.php';
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
                    <ul class='nav nav-tabs'>
                        <?php if (count($_smarty_tpl->tpl_vars['region_list']->value) > 1) {?> 
                        <li class='active'>
                            <a data-toggle='tab' href='#region'>
                                Region
                            </a>
                        </li>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['collection_list']->value) > 1) {?> 
                        <li>
                            <a data-toggle='tab' href='#collection'>
                                Collection
                            </a>
                        </li>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['language_list']->value) > 1) {?> 
                        <li>
                            <a data-toggle='tab' href='#language'>
                                Language
                            </a>
                        </li>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['attribution_list']->value) > 1) {?> 
                        <li>
                            <a data-toggle='tab' href='#attribution'>
                                Attribution
                            </a>
                        </li>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['scribe_list']->value) > 1) {?> 
                        <li>
                            <a data-toggle='tab' href='#scribe'>
                                Scribe
                            </a>
                        </li>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['dates']->value) > 1) {?> 
                        <li>
                            <a data-toggle='tab' href='#date'>
                                Date
                            </a>
                        </li>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['script_list']->value) > 1) {?> 
                        <li>
                            <a data-toggle='tab' href='#script'>
                                Script
                            </a>
                        </li>
                        <?php }?>
                    </ul> <!-- end of facet tabs -->
                    <div class='tab-content'>
                        <div id='region' class='tab-pane active'>
                            <ul id='region-list'>
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
                            </ul> <!-- end of region-list -->
                        </div>
                        <div id='collection' class='tab-pane'>
                            <ul id='collection-list'>
                                <?php
$_from = $_smarty_tpl->tpl_vars['collection_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_2_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$__foreach_row_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_row_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$__foreach_row_2_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                <li>
                                    <a href='?collection=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_3_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_3_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_3_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_3_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'collection') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved_local_item;
}
}
if ($__foreach_value_3_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved_item;
}
if ($__foreach_value_3_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_3_saved_key;
}
?>'>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
)
                                    </a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_2_saved_local_item;
}
}
if ($__foreach_row_2_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_2_saved_item;
}
?>
                            </ul> <!-- end of collection-list -->
                        </div>
                        <div id='language' class='tab-pane'>
                            <ul id='language-list'>
                                <?php
$_from = $_smarty_tpl->tpl_vars['language_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_4_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$__foreach_row_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_row_4_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$__foreach_row_4_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                <li>
                                    <a href='?language=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_5_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_5_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_5_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_5_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_5_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'language') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_5_saved_local_item;
}
}
if ($__foreach_value_5_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_5_saved_item;
}
if ($__foreach_value_5_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_5_saved_key;
}
?>'>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
)
                                    </a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_4_saved_local_item;
}
}
if ($__foreach_row_4_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_4_saved_item;
}
?>
                            </ul> <!-- end of language-list -->
                        </div>
                        <div id='attribution' class='tab-pane'>
                            <ul id='attribution-list'>
                                <?php
$_from = $_smarty_tpl->tpl_vars['attribution_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_6_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$__foreach_row_6_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_row_6_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$__foreach_row_6_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                <li>
                                    <a href='?attribution=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_7_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_7_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_7_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_7_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_7_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'attribution') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_7_saved_local_item;
}
}
if ($__foreach_value_7_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_7_saved_item;
}
if ($__foreach_value_7_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_7_saved_key;
}
?>'>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
)
                                    </a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_6_saved_local_item;
}
}
if ($__foreach_row_6_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_6_saved_item;
}
?>
                            </ul> <!-- end of attribution-list -->
                        </div>
                        <div id='scribe' class='tab-pane'>
                            <ul id='scribe-list'>
                                <?php
$_from = $_smarty_tpl->tpl_vars['scribe_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_8_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$__foreach_row_8_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_row_8_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$__foreach_row_8_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                <li>
                                    <a href='?scribe=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_9_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_9_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_9_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_9_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_9_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'scribe') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_9_saved_local_item;
}
}
if ($__foreach_value_9_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_9_saved_item;
}
if ($__foreach_value_9_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_9_saved_key;
}
?>'>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
)
                                    </a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_8_saved_local_item;
}
}
if ($__foreach_row_8_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_8_saved_item;
}
?>
                            </ul> <!-- end of scribe-list -->
                        </div>
                        <div id='date' class='tab-pane'>
                            <ul id='date-list'>
                                <?php
$_from = $_smarty_tpl->tpl_vars['dates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_10_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$__foreach_row_10_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_row_10_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$__foreach_row_10_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['start']) {?> 
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['count'] != 0) {?>
                                    <a href='?yearstart=<?php echo $_smarty_tpl->tpl_vars['row']->value['start'];?>
&amp;yearend=<?php echo $_smarty_tpl->tpl_vars['row']->value['end'];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_11_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_11_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_11_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_11_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_11_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'yearstart' && $_smarty_tpl->tpl_vars['name']->value != 'yearend') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_11_saved_local_item;
}
}
if ($__foreach_value_11_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_11_saved_item;
}
if ($__foreach_value_11_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_11_saved_key;
}
?>'>
                                    <?php }?>
                                        <?php if (($_smarty_tpl->tpl_vars['row']->value['start']%10 == 0 && $_smarty_tpl->tpl_vars['row']->value['end'] == $_smarty_tpl->tpl_vars['row']->value['start']+9 && $_smarty_tpl->tpl_vars['row']->value['start']%100 != 0) || ($_smarty_tpl->tpl_vars['row']->value['start']%100 == 0 && $_smarty_tpl->tpl_vars['row']->value['end'] == $_smarty_tpl->tpl_vars['row']->value['start']+99)) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['start'];?>
s 
                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['start'] == $_smarty_tpl->tpl_vars['row']->value['end']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['start'];?>
 
                                        <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['start'];?>
&ndash;<?php echo $_smarty_tpl->tpl_vars['row']->value['end'];?>
 
                                        <?php }?>
                                        (<?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
)
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['count'] != 0) {?>
                                    </a>
                                    <?php }?>
                                </li>
                                <?php } else { ?>
                                
                                <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_10_saved_local_item;
}
}
if ($__foreach_row_10_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_10_saved_item;
}
?>
                            </ul> <!-- end of collection-list -->
                        </div>
                        <div id='script' class='tab-pane'>
                            <ul id='script-list'>
                                <?php
$_from = $_smarty_tpl->tpl_vars['script_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_12_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$__foreach_row_12_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_row_12_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$__foreach_row_12_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                <li>
                                    <a href='?script=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];
$_from = $_smarty_tpl->tpl_vars['get']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_13_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_13_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_13_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_13_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_13_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'script') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_13_saved_local_item;
}
}
if ($__foreach_value_13_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_13_saved_item;
}
if ($__foreach_value_13_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_13_saved_key;
}
?>'>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
)
                                    </a>
                                </li>
                                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_12_saved_local_item;
}
}
if ($__foreach_row_12_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_12_saved_item;
}
?>
                            </ul> <!-- end of script-list -->
                        </div>
                    </div>
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
$__foreach_value_15_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_15_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_15_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_15_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_15_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'grouping') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_15_saved_local_item;
}
}
if ($__foreach_value_15_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_15_saved_item;
}
if ($__foreach_value_15_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_15_saved_key;
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
$__foreach_value_16_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_16_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_16_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_16_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_16_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page' && $_smarty_tpl->tpl_vars['name']->value != 'grouping') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
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
$__foreach_value_17_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_17_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_17_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_17_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_17_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_17_saved_local_item;
}
}
if ($__foreach_value_17_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_17_saved_item;
}
if ($__foreach_value_17_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_17_saved_key;
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
                            <h4>
                                <?php echo $_smarty_tpl->tpl_vars['res']->value[3];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value[4];?>
 (<?php echo $_smarty_tpl->tpl_vars['res']->value[5];?>
)
                            </h4>
                            <h3>
                                <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['res']->value[0];?>
'>
                                    <?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>

                                </a>
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
                        </div>
                    <?php if (!($_smarty_tpl->tpl_vars['res']->iteration % 2)) {?>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['res']->last) {?>
                    <div class='row'>
                    <?php }?>
                    
                    <?php } elseif ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'p') {?>
                    <hr>
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
                        <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['res']->value[8];?>
#part<?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>
'>
                            <?php echo smarty_modifier_regex_replace((($tmp = @$_smarty_tpl->tpl_vars['res']->value[5])===null||$tmp==='' ? '(untitled)' : $tmp),"/~([^~]*)~/","<i>\\1</i>");?>

                        </a>
                    </h3>
                    <?php if ($_smarty_tpl->tpl_vars['res']->value[4]) {?>
                    <h5>
                        
                        by <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['res']->value[4],"/\(index[^\)]*\)/",'');?>

                    </h5>
                    <?php }?>
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
                                    <img src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
/thm/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['image']->value[5],4,'',true);?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
.jpg">
                                    <?php } else { ?>
                                    <img src="http://www.bl.uk/IllImages/<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
/thm/<?php echo $_smarty_tpl->tpl_vars['image']->value[5];?>
.jpg">
                                    <?php }?>
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
$__foreach_value_20_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_20_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_20_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_20_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_20_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_20_saved_local_item;
}
}
if ($__foreach_value_20_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_20_saved_item;
}
if ($__foreach_value_20_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_20_saved_key;
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
