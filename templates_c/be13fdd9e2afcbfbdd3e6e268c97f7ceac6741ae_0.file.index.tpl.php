<?php
/* Smarty version 3.1.28, created on 2016-07-29 01:44:00
  from "C:\wamp\www\britlibms\sync\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_579aa6d0051466_39976456',
  'file_dependency' => 
  array (
    'be13fdd9e2afcbfbdd3e6e268c97f7ceac6741ae' => 
    array (
      0 => 'C:\\wamp\\www\\britlibms\\sync\\templates\\index.tpl',
      1 => 1469753037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579aa6d0051466_39976456 ($_smarty_tpl) {
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
            <div id='filter-column' class='col-sm-2'>
                <nav>
                    <h2>
                        Filters
                    </h2>
                    <?php if (count($_smarty_tpl->tpl_vars['region_list']->value) > 1) {?> 
                    <h3>
                        Regions
                    </h3>
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
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['collection_list']->value) > 1) {?> 
                    <h3>
                        Collections
                    </h3>
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
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['language_list']->value) > 1) {?> 
                    <h3>
                       Languages
                    </h3>
                    <ul id='collection-list'>
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
                    <?php }?>
                </nav>
            </div> <!-- end of filter-column -->
            <div id='results-column' class='col-sm-10'>
                <section>
                    <h1>
                        Results
                    </h1>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['firstret']->value;?>
&ndash;<?php echo $_smarty_tpl->tpl_vars['lastret']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['rescount']->value;?>
 (page <?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
)
                    </p>
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
$__foreach_value_6_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_6_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_6_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_6_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_6_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_6_saved_local_item;
}
}
if ($__foreach_value_6_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_6_saved_item;
}
if ($__foreach_value_6_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_6_saved_key;
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
$__foreach_res_7_saved_item = isset($_smarty_tpl->tpl_vars['res']) ? $_smarty_tpl->tpl_vars['res'] : false;
$_smarty_tpl->tpl_vars['res'] = new Smarty_Variable();
$__foreach_res_7_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_res_7_total) {
$__foreach_res_7_iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$__foreach_res_7_iteration++;
$_smarty_tpl->tpl_vars['res']->last = $__foreach_res_7_iteration == $__foreach_res_7_total;
$__foreach_res_7_saved_local_item = $_smarty_tpl->tpl_vars['res'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'i') {?>
                    <h4>
                        <?php echo $_smarty_tpl->tpl_vars['res']->value[3];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value[4];?>
 (<?php echo $_smarty_tpl->tpl_vars['res']->value[5];?>
)
                    </h4>
                    <h3>
                        <a href='illumination?ID=<?php echo $_smarty_tpl->tpl_vars['res']->value[0];?>
'>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>

                        </a>
                    </h3>
                    <p>
                        (image of <?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
 from folder <?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
)
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['res']->value[7]) {?>
                    <p>
                        by <?php echo $_smarty_tpl->tpl_vars['res']->value[7];?>

                    </p>
                    <?php }?>
                    
                    <?php } elseif ($_smarty_tpl->tpl_vars['get']->value['grouping'] == 'p') {?>
                    <h4>
                        <?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
 (<?php echo $_smarty_tpl->tpl_vars['res']->value[3];?>
)
                        [part <?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>
 of <?php echo $_smarty_tpl->tpl_vars['res']->value[7];?>
]
                    </h4>
                    <h3>
                        <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['res']->value[8];?>
#part<?php echo $_smarty_tpl->tpl_vars['res']->value[6];?>
'>
                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['res']->value[5])===null||$tmp==='' ? '(untitled)' : $tmp);?>

                        </a>
                    </h3>
                    <?php if ($_smarty_tpl->tpl_vars['res']->value[4]) {?>
                    <h5>
                        
                        by <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['res']->value[4],"/\(index[^\)]*\)/",'');?>

                    </h5>
                    <?php }?>
                    
                    <?php } else { if (!isset($_smarty_tpl->tpl_vars['get']) || !is_array($_smarty_tpl->tpl_vars['get']->value)) $_smarty_tpl->smarty->ext->_var->createLocalArrayVariable($_smarty_tpl, 'get');
if ($_smarty_tpl->tpl_vars['get']->value['grouping'] = 'm') {?>
                    <h3>
                        <a href='../manuscript?id=<?php echo $_smarty_tpl->tpl_vars['res']->value[0];?>
'>
                            <?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>

                        </a>
                    </h3>
                    
                    <?php }}?>
                    <?php if (!($_smarty_tpl->tpl_vars['res']->last)) {?>
                    <hr>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_7_saved_local_item;
}
}
if ($__foreach_res_7_saved_item) {
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_7_saved_item;
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
$__foreach_value_8_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_8_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_8_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_value_8_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_8_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['name']->value != 'page') {?>&amp;<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['value']->value;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_8_saved_local_item;
}
}
if ($__foreach_value_8_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_8_saved_item;
}
if ($__foreach_value_8_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_8_saved_key;
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
