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
                    {$record[0]} {$record[1]}
                </h1>
                <dl id='manuscript-details-list'>
                    <dt>
                        Official foliation
                    </dt>
                    <dd>
                        {$record[2]}
                    </dd>
                    <dt>
                        Collation
                    </dt>
                    <dd>
                        {$record[5]}
                    </dd>
                    <dt>
                        Form
                    </dt>
                    <dd>
                        {$record[3]}
                    </dd>
                    <dt>
                        Binding
                    </dt>
                    <dd>
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
                </dl> <!-- end of manuscript-details-list -->
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
                    <dl>
                        <dt>
                            Origin
                        </dt>
                        <dd>
                            <ul>
                                {foreach $regions[$details[11]] as $region}
                                <li>
                                    <a href='../results?region=[{$region[0]}]'>
                                        {$region[1]}
                                    </a>
                                </li>
                                {/foreach}
                            </ul>
                        </dd>
                        {if $details[4]}
                        <dt>
                            Language
                        </dt>
                        <dd>
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
                                    <a href='../results?language=[{$lang[0]}]'>
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
                        <dd>
                            {$details[3]}
                        </dd>
                        {/if}
                        {if $details[5]}
                        <dt>
                            Dimensions
                        </dt>
                        <dd>
                            {$details[5]}
                        </dd>
                        {/if}
                        {if $details[6]}
                        <dt>
                            Script
                        </dt>
                        <dd>
                            {$details[6]}
                        </dd>
                        {/if}
                        {if $details[7]}
                        <dt>
                            Scribe
                        </dt>
                        <dd>
                            {$details[7]}
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
                        <dd>
                            {$details[9]}
                        </dd>
                        {/if}
                    </dl>
                    {if $images[$details[11]]}
                    <h4>
                        Images
                    </h4>
                    <div class='grid'>
                        {foreach $images[$details[11]] as $image}
                        <div class='grid-item{if $image_widths[$details[11]][$image[0]] > 37} grid-item--width{ceil($image_widths[$details[11]][$image[0]]/37.5)}{/if}{if $image_heights[$details[11]][$image[0]] > 37} grid-item--height{ceil($image_heights[$details[11]][$image[0]]/37.5)}{/if}'>
                            <a href='../illumination?id={$image[0]}' data-toggle='tooltip' title='{$image[5]|default:'untitled'}{if $image[4]} ({$image[4]}){/if}'>
                                <img src='{$image_urls[$details[11]][$image[0]]}'>
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
