<?php
/* Smarty version 3.1.28, created on 2016-08-14 13:25:00
  from "c:\wamp\www\britlibms\sync\templates\illumination.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57b0631cb97276_47409119',
  'file_dependency' => 
  array (
    '3f1cb71db9bffcf635094f17772932e50099cb4e' => 
    array (
      0 => 'c:\\wamp\\www\\britlibms\\sync\\templates\\illumination.tpl',
      1 => 1471177408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57b0631cb97276_47409119 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'c:/wamp/www/britlibms/sync/includes/Smarty-3.1.28/libs/plugins\\modifier.truncate.php';
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
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['record']->value[4])===null||$tmp==='' ? '(untitled)' : $tmp);?>

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
                <h2>
                    Notes
                </h2>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['record']->value[12];?>

                </p>
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
