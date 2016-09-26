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
    <script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
    <script src='../masonry.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='../style.css'>
    <title>
        {$record[4]|regex_replace:'/~([^~]*)~/':'\1'|default:'untitled illumination'} &mdash; British Library catalogue of Illuminated Manuscripts
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
                <a href='../manuscript?id={$record[0]}'>
                    {$record[1]} {$record[2]}
                </a>
                {if $record[3]}({$record[3]}){/if} &mdash;
                {$record[4]|regex_replace:'/~([^~]*)~/':'<i>\1</i>'|default:'(untitled)'}
            </h1>
            <h2>
                from
                <a href='../manuscript?id={$record[0]}#part{$record[7]}'>
                    {$record[6]|regex_replace:'/~([^~]*)~/':'<i>\1</i>'|regex_replace:'/\(index [^\)]*\)/':''|default:'this part'}
                </a>
            </h2>
            {if $record[5]}<h3>by {$record[5]}</h3>{/if}
            {if $record[8]==1}
            <div class='alert alert-danger'>
                <span class='glyphicon glyphicon-eye-close'></span>
                This image is not available here.
                You may
                <a href='http://www.bl.uk/catalogues/illuminatedmanuscripts/ILLUMIN.ASP?Size=mid&IllID={$id}'>
                    view it on the old site
                </a>
                instead.
            </div>
            {elseif $record[8]==5 or $record[8]==8 or $record[8]==9}
            <img class='img-responsive' src="http://www.bl.uk/IllImages/{$record[9]}/big/{$record[10]|truncate:4:"":true}/{$record[10]}.jpg">
            {else}
            <img class='img-responsive' src="http://www.bl.uk/IllImages/{$record[9]}/big/{$record[10]}.jpg">
            {/if}
            {if $description}
            <h2>Description</h2>
            {foreach $description as $para}<p>{$para}</p>{/foreach}
            {/if}
            {if $same_page}
            <h2>
                Other images from the same
                page{if $is_multipage_image}s{/if}
            </h2>
            <div class='grid'>{foreach $same_page as $image}
                <div class='grid-item{if $image_widths['same_page'][$image[0]] > 37} grid-item--width{min(4,ceil($image_widths['same_page'][$image[0]]/37.5))}{/if}{if $image_heights['same_page'][$image[0]] > 37} grid-item--height{min(4,ceil($image_heights['same_page'][$image[0]]/37.5))}{/if}'>
                    <a href='../illumination?id={$image[0]}' data-toggle='tooltip' title='{$image[5]|escape|default:'untitled'}{if $image[4]} ({$image[4]}){/if}'>
                        <img class='img-responsive' src='{$image_urls['same_page'][$image[0]]}'>
                    </a>
                </div>
            {/foreach}</div>
            {/if}
            {if !$too_many_in['same_part']}
            {if $same_part}
            <h2>
                Other images from
                <a href='../manuscript?id={$record[0]}#part{$record[7]}'>
                    {$record[6]|regex_replace:'/~([^~]*)~/':'<i>\1</i>'|regex_replace:'/\(index [^\)]*\)/':''|default:'this part'}
                </a>
            </h2>
            {if !$record[6]}<aside>
                (Some manuscripts are made up of
                 several documents which were originally separate.
                 Each of these is called a &quot;part&quot;
                 on this site.)
            </aside>{/if}
            <div class='grid'>{foreach $same_part as $image}
                <div class='grid-item{if $image_widths['same_part'][$image[0]] > 37} grid-item--width{min(4,ceil($image_widths['same_part'][$image[0]]/37.5))}{/if}{if $image_heights['same_part'][$image[0]] > 37} grid-item--height{min(4,ceil($image_heights['same_part'][$image[0]]/37.5))}{/if}'>
                    <a href='../illumination?id={$image[0]}' data-toggle='tooltip' title='{$image[5]|escape|default:'untitled'}{if $image[4]} ({$image[4]}){/if}'>
                        <img class='img-responsive' src='{$image_urls['same_part'][$image[0]]}'>
                    </a>
                </div>
            {/foreach}</div>
            {/if}
            {if $other_part}
            <h2>
                Other images from
                <a href='../manuscript?id={$record[0]}'>
                    {$record[1]} {$record[2]}
                </a>
            </h2>
            {if !$too_many_in['other_part']}
            <div class='grid'>{foreach $other_part as $image}
                <div class='grid-item{if $image_widths['other_part'][$image[0]] > 37} grid-item--width{min(4,ceil($image_widths['other_part'][$image[0]]/37.5))}{/if}{if $image_heights['other_part'][$image[0]] > 37} grid-item--height{min(4,ceil($image_heights['other_part'][$image[0]]/37.5))}{/if}'>
                    <a href='../illumination?id={$image[0]}' data-toggle='tooltip' title='{$image[5]|escape|default:'untitled'}{if $image[4]} ({$image[4]}){/if}'>
                        <img class='img-responsive' src='{$image_urls['other_part'][$image[0]]}'>
                    </a>
                </div>
            {/foreach}</div>
            {else}
            <div class='alert alert-warning'>
                <span class='glyphicon glyphicon-picture'></span>
                <span class='glyphicon glyphicon-warning-sign'></span>
                This manuscript
                has too many images to view on one page.
                You can view 50 images at a time in the
                <a href='../gallery/?id={$record[0]}'>
                    gallery of images for this manuscript
                </a>.
            </div>
            {/if}
            {/if}
            {else}
            <h2>
                Other images from
                <a href='../manuscript?id={$record[0]}'>
                    {$record[1]} {$record[2]}
                </a>
            </h2>
            <div class='alert alert-warning'>
                <span class='glyphicon glyphicon-picture'></span>
                <span class='glyphicon glyphicon-warning-sign'></span>
                This manuscript
                has too many images to view on one page.
                You can view 50 images at a time in the
                <a href='../gallery/?id={$record[0]}'>
                    gallery of images for this manuscript
                </a>.
            </div>
            {/if}
        </div></div> <!-- end of content-row -->
        
    </div>

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
