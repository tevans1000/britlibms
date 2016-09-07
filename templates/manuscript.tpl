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
        {$record[0]} {$record[1]}
        &mdash; British Library catalogue of Illuminated Manuscripts
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
                    {$record[0]} {$record[1]}
                </h1>
                {if $too_many_images}
                <div class='alert alert-warning'>
                    <span class='glyphicon glyphicon-picture'></span>
                    <span class='glyphicon glyphicon-warning-sign'></span>
                    This manuscript has too many images to view on one page.
                    You can view 50 images at a time in the <a href='../gallery/?id={$id}'>gallery of images for this manuscript</a>.
                </div>
                {/if}
                <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#manuscript-details-list'>
                    <span class='glyphicon glyphicon-th-list'></span> Show/hide details
                </button>
                <div id='manuscript-details-list' class='collapse{if $too_many_images} in{/if}'>
                <dl>
                    <dt>
                        Official foliation
                    </dt>
                    <dd class='oneline'>
                        {$record[2]|regex_replace:'/\^([^\^]*)\^/':'<sup>\1</sup>'}
                    </dd>
                    {if $record[5]}
                    <dt>
                        Collation
                    </dt>
                    <dd class='oneline'>
                        {$record[5]}
                    </dd>
                    {/if}
                    <dt>
                        Form
                    </dt>
                    <dd class='oneline'>
                        {$record[3]}
                    </dd>
                    <dt>
                        Binding
                    </dt>
                    <dd class='oneline'>
                        {$record[4]}
                    </dd>
                    <dt>
                        Provenance
                    </dt>
                    <dd>
                        <ul>
                            {foreach $provenance as $per}
                            <li>
                                {$per}
                            </li>
                            {/foreach}
                        </ul>
                    </dd>
                    {if $note}
                    <dt>
                        Notes
                    </dt>
                    <dd>
                        {foreach $note as $n}
                        <p>
                            {$n}
                        </p>
                        {/foreach}
                    </dd>
                    {/if}
                    <dt>
                        Select bibliography
                    </dt>
                    <dd>
                        <ul>
                            {foreach $bib as $ref}
                            <li>
                                {$ref}
                            </li>
                            {/foreach}
                        </ul>
                    </dd>
                </dl>
                </div> <!-- end of manuscript-details-list -->
                <hr>
                <h2>
                    Parts
                </h2>
                {foreach $parts as $no => $details}
                <article id='part{$details[10]}'>
                    <h3>
                        {1+$no}{if $details[0]} ({$details[0]}){/if}:
                        {$details[2]|default:'(untitled)'|regex_replace:"/~([^~]*)~/":"<i>\\1</i>"}
                    </h3>
                    {if $details[1]}
                    <h4>
                        by {$details[1]}
                    </h4>
                    {/if}
                    <div class='btn-group'>
                    <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#part{$details[10]}-details-list'>
                        <span class='glyphicon glyphicon-th-list'></span> Show/hide details
                    </button>
                    {if $images[$details[11]]}
                    <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#part{$details[10]}-images'>
                        <span class='glyphicon glyphicon-picture'></span> Show/hide images
                    </button>
                    {/if}
                    </div>
                    <div id='part{$details[10]}-details-list' class='collapse'>
                    <dl>
                        {if $details[14]}
                        <dt>
                            Origin
                        </dt>
                        <dd class='oneline'>
                            {$details[14]}
                        </dd>
                        {/if}
                        {if $regions[$details[11]]}
                        <dt>
                            Origin List
                        </dt>
                        <dd>
                            <ul>
                                {foreach $regions[$details[11]] as $region}
                                <li>
                                    <a href='../results?region=[{$region[0]}]&amp;grouping=p'>
                                        {$region[1]}
                                    </a>
                                </li>
                                {/foreach}
                            </ul>
                        </dd>
                        {/if}
                        {if $details[4]}
                        <dt>
                            Language
                        </dt>
                        <dd class='oneline'>
                            {$details[4]}
                        </dd>
                        {/if}
                        <dt>
                            Language list
                        </dt>
                        <dd>
                            <ul>
                                {foreach $languages[$details[11]] as $lang}
                                <li>
                                    <a href='../results?language=[{$lang[0]}]&amp;grouping=p'>
                                        {$lang[1]}
                                    </a>
                                </li>
                                {/foreach}
                            </ul>
                        </dd>
                        {if $details[3]}
                        <dt>
                            Dates
                        </dt>
                        <dd class='oneline'>
                            {if $details[12] and $details[13]}
                            <a href='../results?yearstart={$details[12]}&amp;yearend={$details[13]}&amp;grouping=p'>
                            {/if}
                            {$details[3]}
                            {if $details[12] and $details[13]}
                            </a>
                            {/if}
                        </dd>
                        {/if}
                        {if $details[5]}
                        <dt>
                            Dimensions
                        </dt>
                        <dd class='oneline'>
                            {$details[5]}
                        </dd>
                        {/if}
                        {if $details[6]}
                        <dt>
                            Script
                        </dt>
                        <dd class='oneline'>
                            {$details[6]}
                        </dd>
                        {/if}
                        {if $scripts[$details[11]]}
                        <dt>
                            Script list
                        </dt>
                        <dd>
                            <ul>
                                {foreach $scripts[$details[11]] as $spt}
                                <li>
                                    <a href='../results?script=[{$spt[0]}]'>
                                        {$spt[1]}
                                    </a>
                                </li>
                                {/foreach}
                            </ul>
                        </dd>
                        {/if}
                        {if $details[7]}
                        <dt>
                            Scribe
                        </dt>
                        <dd class='oneline'>
                            {$details[7]}
                        </dd>
                        {/if}
                        {if $scribes[$details[11]]}
                        <dt>
                            Scribe list
                        </dt>
                        <dd>
                            <ul>
                                {foreach $scribes[$details[11]] as $sbe}
                                <li>
                                    <a href='../results?scribe=[{$sbe[0]}]'>
                                        {$sbe[1]}
                                    </a>
                                </li>
                                {/foreach}
                            </ul>
                        </dd>
                        {/if}
                        {if $details[8]}
                        <dt>
                            Provenance
                        </dt>
                        <dd>
                            {$details[8]}
                        </dd>
                        {/if}
                        {if $details[9]}
                        <dt>
                            Attribution
                        </dt>
                        <dd class='oneline'>
                            {$details[9]}
                        </dd>
                        {/if}
                    </dl>
                    </div>
                    {if $images[$details[11]]}
                    <div id='part{$details[10]}-images' class='grid collapse in'>
                        {foreach $images[$details[11]] as $image}
                        <div class='grid-item{if $image_widths[$details[11]][$image[0]] > 37} grid-item--width{min(4,ceil($image_widths[$details[11]][$image[0]]/37.5))}{/if}{if $image_heights[$details[11]][$image[0]] > 37} grid-item--height{min(4,ceil($image_heights[$details[11]][$image[0]]/37.5))}{/if}'>
                            <a href='../illumination?id={$image[0]}' data-toggle='tooltip' title='{$image[5]|escape|default:'untitled'}{if $image[4]} ({$image[4]}){/if}'>
                                <img class='img-responsive' src='{$image_urls[$details[11]][$image[0]]}'>
                            </a>
                        </div>
                        {/foreach}
                    </div>
                    {/if}
                </article>
                {if !($details@last)}
                <hr>
                {/if}

                {/foreach}
            </div>
        </div> <!-- end of content-row -->

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
