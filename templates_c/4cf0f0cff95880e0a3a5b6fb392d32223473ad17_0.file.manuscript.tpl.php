<?php
/* Smarty version 3.1.28, created on 2016-07-24 23:07:13
  from "C:\wamp\www\britlibms\sync\templates\manuscript.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57953c11916290_73739796',
  'file_dependency' => 
  array (
    '4cf0f0cff95880e0a3a5b6fb392d32223473ad17' => 
    array (
      0 => 'C:\\wamp\\www\\britlibms\\sync\\templates\\manuscript.tpl',
      1 => 1469398031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57953c11916290_73739796 ($_smarty_tpl) {
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
            <div class='col-sm-12'>
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['record']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>

                </h1>
                <dl>
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
                        <?php echo $_smarty_tpl->tpl_vars['bib']->value;?>

                    </dd>
                </dl>
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
