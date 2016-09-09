<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='../bootstrap-extra.js'></script>
    <!-- masonry -->
    <script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
    <script src='../masonry.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='../style.css'>
    <title>
        Images from {$ms[0]} {$ms[1]}
        mdash; British Library catalogue of Illuminated Manuscripts
    </title>
</head>
<body>
    <div class='container-fluid'>
        
        <div id='header-row' class='row'><header>
            <div class='col-xs-2'><nav>
                <a href='http://www.bl.uk'
                   title='British Library home page'
                   style='float: left;'
                >
                    <img src='http://www.bl.uk/catalogues/illuminatedmanuscripts/images/logo.gif' alt='Home'>
                </a>
                <ul style='position: relative; left: 1em; list-style-type: none;'>
                    <li><a href='../results'>Browse</a></li>
                    <li>
                        <a href='http://www.bl.uk/catalogues/illuminatedmanuscripts/welcome.htm'>
                            Search
                        </a>
                    </li>
                    <li><a href='../about.html'>About</a></li>
                </ul>
            </nav></div>
            <div class='col-xs-10'><h3>
                Browsing the Catalogue of Illuminated Manuscripts
            </h3></div>
        </header></div> <!-- end of header-row -->
        
        <div id='content-row' class='row'><div class='col-sm-12'>
            <h1>
                Images from
                <a href='../manuscript?id={$id}'>{$ms[0]} {$ms[1]}</a>
            </h1>
            <p>
                {if $maxpage > 1}
                Images {1+$offset}&ndash;{count($images)+$offset}
                of {$image_count} (page {$pageno} / {$maxpage})
                {elseif count($images)>1}
                Viewing all {count($images)} images found
                {elseif count($images)==1}
                Only 1 image found
                {else}
                None found
                {/if}
            </p>
            {if $maxpage > 1} {* pagination not needed for 1 page *}
            <nav>
                <ul class='pagination' {if $pageno > 8 or $pageno+7 < $maxpage}style='float: left;'{/if}>
                    {for $linkno=$pageno-7 to $pageno+7}
                    {if ($linkno<=0)}{continue}{/if}
                    {if $linkno==$pageno}
                    <li class='active'>
                    {else}
                    <li>
                    {/if}
                        <a href='?id={$id}&amp;page={$linkno}'>
                            {$linkno}
                        </a>
                    </li>
                    {if ($linkno==$maxpage)}{break}{/if}
                    {/for}
                </ul>
                {if $pageno > 8 or $pageno+7 < $maxpage}
                <form id='page-form' class='form-inline' role='form'
                      method='get'
                >
                    <div class='form-group'>
                        <label for='page'>Take me to page</label>
                        <input type='number' min='1' max='{$maxpage}'
                               name='page' value='{$pageno}'
                        >
                        <input type='hidden' name='id' value='{$id}'>
                        <div class='form-group'>
                            <button type='submit'
                                    class='btn btn-primary'
                            >
                                GO
                            </button>
                        </div>
                    </div>
                </form>
                {/if}
            </nav>
            {/if}
                
            <div class='grid'>{foreach $images as $image}
                <div class='grid-item{if $image_widths[$image[0]] > 37} grid-item--width{min(4,ceil($image_widths[$image[0]]/37.5))}{/if}{if $image_heights[$image[0]] > 37} grid-item--height{min(4,ceil($image_heights[$image[0]]/37.5))}{/if}'>
                    <a href='../illumination?id={$image[0]}' data-toggle='tooltip' title='{$image[5]|escape|default:'untitled'}{if $image[4]} ({$image[4]}){/if}'>
                        <img class='img-responsive'
                             src='{$image_urls[$image[0]]}'
                        >
                    </a>
                </div>
            {/foreach}</div>
        </div></div> <!-- end of content-row -->

    <!--BeginBLNedstat-->
    <script src="//forms.bl.uk/wa/scripts/global-2.js" type="text/javascript"></script>
    <script type="text/javascript">
    var bl_pu = bl_ned_url();
    </script>
    <!-- Begin CMC v.1.0.1 -->
    <script type="text/javascript">
    // <![CDATA[
    function sitestat(u) { var d=document,l=d.location;ns_pixelUrl=u+"&ns__t="+(new Date().getTime());u=ns_pixelUrl+"&ns_c="+((d.characterSet)?d.characterSet:d.defaultCharset)+"&ns_ti="+escape(d.title)+"&ns_jspageurl="+escape(l&&l.href?l.href:d.URL)+"&ns_referrer="+escape(d.referrer);(d.images)?new Image().src=u:d.write('<'+'p><img src="'+u+'" height="1" width="1" alt="*"><'+'/p>'); } ;
    sitestat(bl_pu);
    // ]]>
    </script>
    <noscript><p><img src="//uk.sitestat.com/bl/test/s?no_script_pages" height="1" width="1" alt="*"/></p></noscript>
    <!-- End CMC -->
    <!--EndBLNedstat-->
</body>
</html>
