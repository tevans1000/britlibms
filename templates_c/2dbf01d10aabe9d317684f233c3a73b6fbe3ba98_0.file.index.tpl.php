<?php
/* Smarty version 3.1.28, created on 2016-07-19 16:19:25
  from "/var/www/html/britlibms/sync/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_578e44fd1fccd6_91015278',
  'file_dependency' => 
  array (
    '2dbf01d10aabe9d317684f233c3a73b6fbe3ba98' => 
    array (
      0 => '/var/www/html/britlibms/sync/templates/index.tpl',
      1 => 1468941560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578e44fd1fccd6_91015278 ($_smarty_tpl) {
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
                        Filter tabs
                    </h2>
                    <ul>
                        <li>
                            Year
                        </li>
                        <li>
                            Language
                        </li>
                        <li>
                            Region
                        </li>
                        <li>
                            etc.
                        </li>
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
                </section>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-12'>
                <nav>
                    <ul class='pagination'>
                        <?php
$_smarty_tpl->tpl_vars['linkno'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['linkno']->step = 1;$_smarty_tpl->tpl_vars['linkno']->total = (int) ceil(($_smarty_tpl->tpl_vars['linkno']->step > 0 ? $_smarty_tpl->tpl_vars['pageno']->value+2+1 - ($_smarty_tpl->tpl_vars['pageno']->value-2) : $_smarty_tpl->tpl_vars['pageno']->value-2-($_smarty_tpl->tpl_vars['pageno']->value+2)+1)/abs($_smarty_tpl->tpl_vars['linkno']->step));
if ($_smarty_tpl->tpl_vars['linkno']->total > 0) {
for ($_smarty_tpl->tpl_vars['linkno']->value = $_smarty_tpl->tpl_vars['pageno']->value-2, $_smarty_tpl->tpl_vars['linkno']->iteration = 1;$_smarty_tpl->tpl_vars['linkno']->iteration <= $_smarty_tpl->tpl_vars['linkno']->total;$_smarty_tpl->tpl_vars['linkno']->value += $_smarty_tpl->tpl_vars['linkno']->step, $_smarty_tpl->tpl_vars['linkno']->iteration++) {
$_smarty_tpl->tpl_vars['linkno']->first = $_smarty_tpl->tpl_vars['linkno']->iteration == 1;$_smarty_tpl->tpl_vars['linkno']->last = $_smarty_tpl->tpl_vars['linkno']->iteration == $_smarty_tpl->tpl_vars['linkno']->total;?>
                        <?php if (($_smarty_tpl->tpl_vars['linkno']->value <= 0) || ($_smarty_tpl->tpl_vars['linkno']->value > $_smarty_tpl->tpl_vars['maxpage']->value)) {?>
                        <?php continue 1;?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['linkno']->value == $_smarty_tpl->tpl_vars['pageno']->value) {?>
                        <li class='active'>
                        <?php } else { ?>
                        <li>
                        <?php }?>
                            <a href='?page=<?php echo $_smarty_tpl->tpl_vars['linkno']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['linkno']->value;?>
</a>
                        </li>
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
