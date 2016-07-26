<?php
/* Smarty version 3.1.28, created on 2016-07-26 10:01:15
  from "C:\wamp\www\britlibms\sync\templates\manuscript.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_579726dbdb8740_31773199',
  'file_dependency' => 
  array (
    '4cf0f0cff95880e0a3a5b6fb392d32223473ad17' => 
    array (
      0 => 'C:\\wamp\\www\\britlibms\\sync\\templates\\manuscript.tpl',
      1 => 1469523630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579726dbdb8740_31773199 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once 'C:/wamp/www/britlibms/sync/pseudoroot/manuscript/../../includes/Smarty-3.1.28/libs/plugins\\modifier.regex_replace.php';
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
            <div class='col-sm-12'>
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>

                </h1>
                <dl id='manuscript-details-list'>
                    <dt>
                        Official foliation
                    </dt>
                    <dd>
                        <?php echo $_smarty_tpl->tpl_vars['record']->value[2];?>

                    </dd>
                    <dt>
                        Collation
                    </dt>
                    <dd>
                        <?php echo $_smarty_tpl->tpl_vars['record']->value[5];?>

                    </dd>
                    <dt>
                        Form
                    </dt>
                    <dd>
                        <?php echo $_smarty_tpl->tpl_vars['record']->value[3];?>

                    </dd>
                    <dt>
                        Binding
                    </dt>
                    <dd>
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
                </dl> <!-- end of manuscript-details-list -->
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
)<?php }?>: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['details']->value[2])===null||$tmp==='' ? '(untitled)' : $tmp);?>

                    </h3>
                    <?php if ($_smarty_tpl->tpl_vars['details']->value[1]) {?>
                    <h4>
                        
                        by <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['details']->value[1],"/\(index[^\)]*\)/",'');?>

                    </h4>
                    <?php }?>
                    <dl>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[3]) {?>
                        <dt>
                            Dates
                        </dt>
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[3];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[4]) {?>
                        <dt>
                            Language
                        </dt>
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[4];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[5]) {?>
                        <dt>
                            Dimensions
                        </dt>
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[5];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[6]) {?>
                        <dt>
                            Script
                        </dt>
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[6];?>

                        </dd>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['details']->value[7]) {?>
                        <dt>
                            Scribe
                        </dt>
                        <dd>
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
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['details']->value[9];?>

                        </dd>
                        <?php }?>
                    </dl>
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
