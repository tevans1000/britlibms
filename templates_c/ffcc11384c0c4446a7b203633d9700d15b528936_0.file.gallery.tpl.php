<?php
/* Smarty version 3.1.28, created on 2016-09-04 20:29:30
  from "c:\wamp\www\britlibms\sync\templates\gallery.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57cc761a47ea45_64053981',
  'file_dependency' => 
  array (
    'ffcc11384c0c4446a7b203633d9700d15b528936' => 
    array (
      0 => 'c:\\wamp\\www\\britlibms\\sync\\templates\\gallery.tpl',
      1 => 1473017350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57cc761a47ea45_64053981 ($_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src='../bootstrap-extra.js'><?php echo '</script'; ?>
>
    <!-- masonry -->
    <?php echo '<script'; ?>
 src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='../masonry.js'><?php echo '</script'; ?>
>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='../style.css'>
    <title>
        Images from <?php echo $_smarty_tpl->tpl_vars['ms']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['ms']->value[1];?>

        mdash; British Library catalogue of Illuminated Manuscripts
    </title>
</head>
<body>
    <div class='container-fluid'>
        
        <div id='header-row' class='row'>
            <header>
                <div class='col-xs-2'>
                    <nav>
                        <a href='http://www.bl.uk' title='British Library home page' style='float: left;'>
                            <img src='http://www.bl.uk/catalogues/illuminatedmanuscripts/images/logo.gif' alt='Home'>
                        </a>
                        <ul style='position: relative; left: 1em; list-style-type: none;'>
                            <li>
                                <a href='../results'>
                                    Browse
                                </a>
                            </li>
                            <li>
                                <a href='http://www.bl.uk/catalogues/illuminatedmanuscripts/welcome.htm'>
                                    Search
                                </a>
                            </li>
                            <li>
                                <a href='../about.html'>
                                    About
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class='col-xs-10'>
                    <h3>
                        Browsing the Catalogue of Illuminated Manuscripts
                    </h3>
                </div>
            </header>
        </div> <!-- end of header-row -->
        
        <div id='content-row' class='row'>
            <div class='col-sm-12'>
                <h1>
                    Images from <?php echo $_smarty_tpl->tpl_vars['ms']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['ms']->value[1];?>

                </h1>
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['maxpage']->value > 1) {?>
                        Images <?php echo 1+$_smarty_tpl->tpl_vars['offset']->value;?>
&ndash;<?php echo count($_smarty_tpl->tpl_vars['images']->value)+$_smarty_tpl->tpl_vars['offset']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['image_count']->value;?>
 (page <?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
)
                        <?php } elseif (count($_smarty_tpl->tpl_vars['images']->value) > 1) {?>
                        Viewing all <?php echo count($_smarty_tpl->tpl_vars['images']->value);?>
 images found
                        <?php } elseif (count($_smarty_tpl->tpl_vars['images']->value) == 1) {?>
                        Only 1 image found
                        <?php } else { ?>
                        None found
                        <?php }?>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['maxpage']->value > 1) {?> 
                    <nav>
                        <ul class='pagination' <?php if ($_smarty_tpl->tpl_vars['pageno']->value > 8 || $_smarty_tpl->tpl_vars['pageno']->value+7 < $_smarty_tpl->tpl_vars['maxpage']->value) {?>style='float: left;'<?php }?>>
                            <?php
$_smarty_tpl->tpl_vars['linkno'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['linkno']->step = 1;$_smarty_tpl->tpl_vars['linkno']->total = (int) ceil(($_smarty_tpl->tpl_vars['linkno']->step > 0 ? $_smarty_tpl->tpl_vars['pageno']->value+7+1 - ($_smarty_tpl->tpl_vars['pageno']->value-7) : $_smarty_tpl->tpl_vars['pageno']->value-7-($_smarty_tpl->tpl_vars['pageno']->value+7)+1)/abs($_smarty_tpl->tpl_vars['linkno']->step));
if ($_smarty_tpl->tpl_vars['linkno']->total > 0) {
for ($_smarty_tpl->tpl_vars['linkno']->value = $_smarty_tpl->tpl_vars['pageno']->value-7, $_smarty_tpl->tpl_vars['linkno']->iteration = 1;$_smarty_tpl->tpl_vars['linkno']->iteration <= $_smarty_tpl->tpl_vars['linkno']->total;$_smarty_tpl->tpl_vars['linkno']->value += $_smarty_tpl->tpl_vars['linkno']->step, $_smarty_tpl->tpl_vars['linkno']->iteration++) {
$_smarty_tpl->tpl_vars['linkno']->first = $_smarty_tpl->tpl_vars['linkno']->iteration == 1;$_smarty_tpl->tpl_vars['linkno']->last = $_smarty_tpl->tpl_vars['linkno']->iteration == $_smarty_tpl->tpl_vars['linkno']->total;?>
                            <?php if (($_smarty_tpl->tpl_vars['linkno']->value <= 0)) {?>
                            <?php continue 1;?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['linkno']->value == $_smarty_tpl->tpl_vars['pageno']->value) {?>
                            <li class='active'>
                            <?php } else { ?>
                            <li>
                            <?php }?>
                                <a href='?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['linkno']->value;?>
'>
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
                        <?php if ($_smarty_tpl->tpl_vars['pageno']->value > 8 || $_smarty_tpl->tpl_vars['pageno']->value+7 < $_smarty_tpl->tpl_vars['maxpage']->value) {?>
                        <form id='page-form' class='form-inline' role='form' method='get'>
                            <div class='form-group'>
                                <label for='page'>
                                    Take me to page
                                </label>
                                <input type='number' min='1' max='<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
' name='page' value='<?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
'>
                                <input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
                                <div class='form-group'>
                                    <button type='submit' class='btn btn-primary'>
                                        GO
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php }?>
                    </nav>
                    <?php }?>
                    
                <div class='grid'>
                    <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$__foreach_image_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_image_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$__foreach_image_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
                    <div class='grid-item<?php if ($_smarty_tpl->tpl_vars['image_widths']->value[$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--width<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_widths']->value[$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}
if ($_smarty_tpl->tpl_vars['image_heights']->value[$_smarty_tpl->tpl_vars['image']->value[0]] > 37) {?> grid-item--height<?php echo min(4,ceil($_smarty_tpl->tpl_vars['image_heights']->value[$_smarty_tpl->tpl_vars['image']->value[0]]/37.5));
}?>'>
                        <a href='../illumination?id=<?php echo $_smarty_tpl->tpl_vars['image']->value[0];?>
' data-toggle='tooltip' title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['image']->value[5], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 'untitled' : $tmp);
if ($_smarty_tpl->tpl_vars['image']->value[4]) {?> (<?php echo $_smarty_tpl->tpl_vars['image']->value[4];?>
)<?php }?>'>
                            <img class='img-responsive' src='<?php echo $_smarty_tpl->tpl_vars['image_urls']->value[$_smarty_tpl->tpl_vars['image']->value[0]];?>
'>
                        </a>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
                </div>
            </div>
        </div> <!-- end of content-row -->

    <!--BeginBLNedstat-->
    <?php echo '<script'; ?>
 src="//forms.bl.uk/wa/scripts/global-2.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    var bl_pu = bl_ned_url();
    <?php echo '</script'; ?>
>
    <!-- Begin CMC v.1.0.1 -->
    <?php echo '<script'; ?>
 type="text/javascript">
    // <![CDATA[
    function sitestat(u) { var d=document,l=d.location;ns_pixelUrl=u+"&ns__t="+(new Date().getTime());u=ns_pixelUrl+"&ns_c="+((d.characterSet)?d.characterSet:d.defaultCharset)+"&ns_ti="+escape(d.title)+"&ns_jspageurl="+escape(l&&l.href?l.href:d.URL)+"&ns_referrer="+escape(d.referrer);(d.images)?new Image().src=u:d.write('<'+'p><img src="'+u+'" height="1" width="1" alt="*"><'+'/p>'); } ;
    sitestat(bl_pu);
    // ]]>
    <?php echo '</script'; ?>
>
    <noscript><p><img src="//uk.sitestat.com/bl/test/s?no_script_pages" height="1" width="1" alt="*"/></p></noscript>
    <!-- End CMC -->
    <!--EndBLNedstat-->
</body>
</html>
<?php }
}
