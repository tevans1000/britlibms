<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <div id='filter-column' class='col-sm-2'>
                <nav>
                    <h2>
                        Filters
                    </h2>
                    {if count($region_list) > 1} {* else region facet is exhausted *}
                    <h3>
                        Regions
                    </h3>
                    <ul id='region-list'>
                        {foreach $region_list as $row}
                        <li>
                            <a href='?region={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != 'region'}&amp;{$name}={$value}{/if}{/foreach}'>
                                {$row[1]} ({$row[2]})
                            </a>
                        </li>
                        {/foreach}
                    </ul> <!-- end of region-list -->
                    {/if}
                    {if count($collection_list) > 1} {* else collection facet is exhausted *}
                    <h3>
                        Collections
                    </h3>
                    <ul id='collection-list'>
                        {foreach $collection_list as $row}
                        <li>
                            <a href='?collection={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != 'collection'}&amp;{$name}={$value}{/if}{/foreach}'>
                                {$row[1]} ({$row[2]})
                            </a>
                        </li>
                        {/foreach}
                    </ul> <!-- end of collection-list -->
                    {/if}
                    {if count($language_list) > 1} {* else collection facet is exhausted *}
                    <h3>
                       Languages
                    </h3>
                    <ul id='collection-list'>
                        {foreach $language_list as $row}
                        <li>
                            <a href='?language={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != 'language'}&amp;{$name}={$value}{/if}{/foreach}'>
                                {$row[1]} ({$row[2]})
                            </a>
                        </li>
                        {/foreach}
                    </ul> <!-- end of language-list -->
                    {/if}
                    {if count($attribution_list) > 1} {* else attribution facet is exhausted *}
                    <h3>
                       Attribution
                    </h3>
                    <ul id='attribution-list'>
                        {foreach $attribution_list as $row}
                        <li>
                            <a href='?attribution={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != 'attribution'}&amp;{$name}={$value}{/if}{/foreach}'>
                                {$row[1]} ({$row[2]})
                            </a>
                        </li>
                        {/foreach}
                    </ul> <!-- end of attribution-list -->
                    {/if}
                    {if count($dates) > 1} {* else attribution facet is exhausted *}
                    <h3>
                       Date
                    </h3>
                    <ul id='date-list'>
                        {foreach $dates as $row}
                        {if $row['start']}
                        <li>
                            {if $row['count'] != 0}
                            <a href='?yearstart={$row['start']}&amp;yearend={$row['end']}{foreach $get as $name => $value}{if $name != 'page' and $name != 'yearstart' and $name != 'yearend'}&amp;{$name}={$value}{/if}{/foreach}'>
                            {/if}
                                {if ($row['start']%10==0 and $row['end']==$row['start']+9 and $row['start']%100!=0) or ($row['start']%100==0 and $row['end']==$row['start']+99)}
                                {$row['start']}s {* 1400-1499 -> 1400s, 1490-1500 -> 1490s, 1400-1409 -> 1400-1409 *}
                                {elseif $row['start'] == $row['end']}
                                {$row['start']} {* 1 year not considered a range *}
                                {else}
                                {$row['start']}&ndash;{$row['end']} {* nicely formatted range *}
                                {/if}
                                ({$row['count']})
                            {if $row['count'] != 0}
                            </a>
                            {/if}
                        </li>
                        {else}
                        {* TODO: link for undatable manuscripts *}
                        {/if}
                        {/foreach}
                    </ul> <!-- end of date-list -->
                    {/if}
                </nav>
            </div> <!-- end of filter-column -->
            <div id='results-column' class='col-sm-10'>
                <section>
                    <h1>
                        Results
                    </h1>
                    <p>
                        {if $maxpage > 1}
                        {$firstret}&ndash;{$lastret} of {$rescount} (page {$pageno} / {$maxpage})
                        {else}
                        Viewing all {$rescount} results found
                        {/if}
                    </p>
                    {if $maxpage > 1} {* pagination not required if only 1 page *}
                    <nav>
                        <ul class='pagination'>
                            {for $linkno=$pageno-4 to $pageno+4}
                            {if ($linkno<=0)}
                            {continue}
                            {/if}
                            {if $linkno==$pageno}
                            <li class='active'>
                            {else}
                            <li>
                            {/if}
                                <a href='?page={$linkno}{foreach $get as $name => $value}{if $name != 'page'}&amp;{$name}={$value}{/if}{/foreach}'>
                                    {$linkno}
                                </a>
                            </li>
                            {if ($linkno==$maxpage)}
                            {break}
                            {/if}
                            {/for}
                        </ul>
                    </nav>
                    {/if}
                    {foreach $reslist as $res}
                    {if $get['grouping']=='i'}
                    <h4>
                        {$res[3]} {$res[4]} ({$res[5]})
                    </h4>
                    <h3>
                        <a href='illumination?ID={$res[0]}'>
                            {$res[6]}
                        </a>
                    </h3>
                    <p>
                        (image of {$res[2]} from folder {$res[1]})
                    </p>
                    {if $res[7]}
                    <p>
                        by {$res[7]}
                    </p>
                    {/if}
                    {* end of image results formatting block *}
                    {elseif $get['grouping']=='p'}
                    <h4>
                        {$res[1]} {$res[2]} ({$res[3]})
                        [part {$res[6]} of {$res[7]}]
                    </h4>
                    <h3>
                        <a href='../manuscript?id={$res[8]}#part{$res[6]}'>
                            {$res[5]|default:'(untitled)'}
                        </a>
                    </h3>
                    {if $res[4]}
                    <h5>
                        {* regex_replace gets rid of indexing details
                           - of no interest to visitors *}
                        by {$res[4]|regex_replace:"/\(index[^\)]*\)/":""}
                    </h5>
                    {/if}
                    {* end of part results formatting block *}
                    {elseif $get['grouping']='m'}
                    <h3>
                        <a href='../manuscript?id={$res[0]}'>
                            {$res[1]} {$res[2]}
                        </a>
                    </h3>
                    {* end of manuscript results formatting block *}
                    {/if}
                    {if !($res@last)}
                    <hr>
                    {/if}
                    {/foreach}
                </section>
            </div> <!-- end of results-column -->
        </div> <!-- end of content-row -->
        
        {if $maxpage > 1} {* Pagination not required for only 1 page *}
        <div id='pagination-row' class='row'>
            <div class='col-sm-12'>
                <nav>
                    <ul class='pagination'>
                        {for $linkno=$pageno-4 to $pageno+4}
                        {if ($linkno<=0)}
                        {continue}
                        {/if}
                        {if $linkno==$pageno}
                        <li class='active'>
                        {else}
                        <li>
                        {/if}
                            <a href='?page={$linkno}{foreach $get as $name => $value}{if $name != 'page'}&amp;{$name}={$value}{/if}{/foreach}'>
                                {$linkno}
                            </a>
                        </li>
                        {if ($linkno==$maxpage)}
                        {break}
                        {/if}
                        {/for}
                    </ul>
                </nav>
            </div>
        </div> <!-- end of pagination-row -->
        {/if}
        
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
