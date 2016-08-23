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
                    <a href='../manuscript?id={$record[0]}#part{$record[7]}'>
                        {$record[1]} {$record[2]}
                    </a>
                    {if $record[3]}({$record[3]}){/if} &mdash;
                    {$record[4]|default:'(untitled)'}
                </h1>
                <h2>
                    from {$record[6]|default:'an untitled part'}
                </h2>
                {if $record[5]}
                <h3>
                    by {$record[5]}
                </h3>
                {/if}
                {if $record[8]==1}
                <p>
                    (image of {$record[10]} from folder {$record[9]})
                </p>
                {elseif $record[8]==5 or $record[8]==8 or $record[8]==9}
                <img class='img-responsive' src="http://www.bl.uk/IllImages/{$record[9]}/big/{$record[10]|truncate:4:"":true}/{$record[10]}.jpg">
                {else}
                <img class='img-responsive' src="http://www.bl.uk/IllImages/{$record[9]}/big/{$record[10]}.jpg">
                {/if}
                <h2>
                    Description
                </h2>
                <p>
                    {$record[11]}
                </p>
                {if $same_page}
                <h2>
                    Other images from the same page{if $is_multipage_image}s{/if}
                </h2>
                    <div class='grid'>
                        {foreach $same_page as $image}
                        <div class='grid-item{if $image_widths[0][$image[0]] > 37} grid-item--width{min(4,ceil($image_widths[0][$image[0]]/37.5))}{/if}{if $image_heights[0][$image[0]] > 37} grid-item--height{min(4,ceil($image_heights[0][$image[0]]/37.5))}{/if}'>
                            <a href='../illumination?id={$image[0]}' data-toggle='tooltip' title='{$image[5]|default:'untitled'}{if $image[4]} ({$image[4]}){/if}'>
                                <img class='img-responsive' src='{$image_urls[0][$image[0]]}'>
                            </a>
                        </div>
                        {/foreach}
                    </div>
                {/if}
                {if $same_part}
                <h2>
                    Other images from the same part
                </h2>
                    <div class='grid'>
                        {foreach $same_part as $image}
                        <div class='grid-item{if $image_widths[1][$image[0]] > 37} grid-item--width{min(4,ceil($image_widths[1][$image[0]]/37.5))}{/if}{if $image_heights[1][$image[0]] > 37} grid-item--height{min(4,ceil($image_heights[1][$image[0]]/37.5))}{/if}'>
                            <a href='../illumination?id={$image[0]}' data-toggle='tooltip' title='{$image[5]|default:'untitled'}{if $image[4]} ({$image[4]}){/if}'>
                                <img class='img-responsive' src='{$image_urls[1][$image[0]]}'>
                            </a>
                        </div>
                        {/foreach}
                    </div>
                {/if}
                {if $other_part}
                <h2>
                    Other images from this manuscript
                </h2>
                    <div class='grid'>
                        {foreach $other_part as $image}
                        <div class='grid-item{if $image_widths[2][$image[0]] > 37} grid-item--width{min(4,ceil($image_widths[2][$image[0]]/37.5))}{/if}{if $image_heights[2][$image[0]] > 37} grid-item--height{min(4,ceil($image_heights[2][$image[0]]/37.5))}{/if}'>
                            <a href='../illumination?id={$image[0]}' data-toggle='tooltip' title='{$image[5]|default:'untitled'}{if $image[4]} ({$image[4]}){/if}'>
                                <img class='img-responsive' src='{$image_urls[2][$image[0]]}'>
                            </a>
                        </div>
                        {/foreach}
                    </div>
                {/if}
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
