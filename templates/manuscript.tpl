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
                <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#manuscript-details-list'>
                    <span class='glyphicon glyphicon-th-list'></span>
                </button>
                <div id='manuscript-details-list' class='collapse'>
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
                        <span class='glyphicon glyphicon-th-list'></span>
                    </button>
                    {if $images[$details[11]]}
                    <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#part{$details[10]}-images'>
                        <span class='glyphicon glyphicon-picture'></span>
                    </button>
                    {/if}
                    </div>
                    <div id='part{$details[10]}-details-list' class='collapse'>
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
                        <dd class='oneline'>
                            {$details[3]}
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
                        {if $details[7]}
                        <dt>
                            Scribe
                        </dt>
                        <dd class='oneline'>
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
                            <a href='../illumination?id={$image[0]}' data-toggle='tooltip' title='{$image[5]|default:'untitled'}{if $image[4]} ({$image[4]}){/if}'>
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
