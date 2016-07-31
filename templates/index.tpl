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
            <div id='filter-column' class='col-xs-3'>
                <nav>
                    <h2>
                        Filters
                    </h2>
                    <ul class='nav nav-tabs'>
                        {if count($region_list) > 1} {* else region facet is exhausted *}
                        <li class='active'>
                            <a data-toggle='tab' href='#region'>
                                Region
                            </a>
                        </li>
                        {/if}
                        {if count($collection_list) > 1} {* else collection facet is exhausted *}
                        <li>
                            <a data-toggle='tab' href='#collection'>
                                Collection
                            </a>
                        </li>
                        {/if}
                        {if count($language_list) > 1} {* else language facet is exhausted *}
                        <li>
                            <a data-toggle='tab' href='#language'>
                                Language
                            </a>
                        </li>
                        {/if}
                        {if count($attribution_list) > 1} {* else attribution facet is exhausted *}
                        <li>
                            <a data-toggle='tab' href='#attribution'>
                                Attribution
                            </a>
                        </li>
                        {/if}
                        {if count($scribe_list) > 1} {* else scribe facet is exhausted *}
                        <li>
                            <a data-toggle='tab' href='#scribe'>
                                Scribe
                            </a>
                        </li>
                        {/if}
                        {if count($dates) > 1} {* else language facet is exhausted *}
                        <li>
                            <a data-toggle='tab' href='#date'>
                                Date
                            </a>
                        </li>
                        {/if}
                        {if count($script_list) > 1} {* else script facet is exhausted *}
                        <li>
                            <a data-toggle='tab' href='#script'>
                                Script
                            </a>
                        </li>
                        {/if}
                    </ul> <!-- end of facet tabs -->
                    <div class='tab-content'>
                        <div id='region' class='tab-pane active'>
                            <ul id='region-list'>
                                {foreach $region_list as $row}
                                <li>
                                    <a href='?region={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != 'region'}&amp;{$name}={$value}{/if}{/foreach}'>
                                        {$row[1]} ({$row[2]})
                                    </a>
                                </li>
                                {/foreach}
                            </ul> <!-- end of region-list -->
                        </div>
                        <div id='collection' class='tab-pane'>
                            <ul id='collection-list'>
                                {foreach $collection_list as $row}
                                <li>
                                    <a href='?collection={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != 'collection'}&amp;{$name}={$value}{/if}{/foreach}'>
                                        {$row[1]} ({$row[2]})
                                    </a>
                                </li>
                                {/foreach}
                            </ul> <!-- end of collection-list -->
                        </div>
                        <div id='language' class='tab-pane'>
                            <ul id='language-list'>
                                {foreach $language_list as $row}
                                <li>
                                    <a href='?language={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != 'language'}&amp;{$name}={$value}{/if}{/foreach}'>
                                        {$row[1]} ({$row[2]})
                                    </a>
                                </li>
                                {/foreach}
                            </ul> <!-- end of language-list -->
                        </div>
                        <div id='attribution' class='tab-pane'>
                            <ul id='attribution-list'>
                                {foreach $attribution_list as $row}
                                <li>
                                    <a href='?attribution={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != 'attribution'}&amp;{$name}={$value}{/if}{/foreach}'>
                                        {$row[1]} ({$row[2]})
                                    </a>
                                </li>
                                {/foreach}
                            </ul> <!-- end of attribution-list -->
                        </div>
                        <div id='scribe' class='tab-pane'>
                            <ul id='scribe-list'>
                                {foreach $scribe_list as $row}
                                <li>
                                    <a href='?scribe={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != 'scribe'}&amp;{$name}={$value}{/if}{/foreach}'>
                                        {$row[1]} ({$row[2]})
                                    </a>
                                </li>
                                {/foreach}
                            </ul> <!-- end of scribe-list -->
                        </div>
                        <div id='date' class='tab-pane'>
                            <ul id='date-list'>
                                {foreach $dates as $row}
                                {if $row['start']} {* datable *}
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
                            </ul> <!-- end of collection-list -->
                        </div>
                        <div id='script' class='tab-pane'>
                            <ul id='script-list'>
                                {foreach $script_list as $row}
                                <li>
                                    <a href='?script={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != 'script'}&amp;{$name}={$value}{/if}{/foreach}'>
                                        {$row[1]} ({$row[2]})
                                    </a>
                                </li>
                                {/foreach}
                            </ul> <!-- end of script-list -->
                        </div>
                    </div>
                </nav>
            </div> <!-- end of filter-column -->
            <div id='results-column' class='col-xs-9'>
                <section>
                    <h1>
                        Results
                    </h1>
                    <p>
                        {if $maxpage > 1}
                        {$firstret}&ndash;{$lastret} of {$rescount} (page {$pageno} / {$maxpage})
                        {elseif $rescount>1}
                        Viewing all {$rescount} results found
                        {elseif $rescount==1}
                        Only 1 result found
                        {else}
                        None found
                        {/if}
                    </p>
                    <h6>
                        Group by:
                    </h6>
                    <ul class='nav nav-pills'>
                        <li{if $get['grouping']=='m'} class='active'{/if}>
                            <a href='?grouping=m{foreach $get as $name => $value}{if $name != 'page' and $name != 'grouping'}&amp;{$name}={$value}{/if}{/foreach}'>
                                Manuscript
                            </a>
                        </li>
                        <li{if $get['grouping']=='p'} class='active'{/if}>
                            <a href='?grouping=p{foreach $get as $name => $value}{if $name != 'page' and $name != 'grouping'}&amp;{$name}={$value}{/if}{/foreach}'>
                                Part
                            </a>
                        </li>
                        <li{if $get['grouping']=='i'} class='active'{/if}>
                            <a href='?grouping=i{foreach $get as $name => $value}{if $name != 'page' and $name != 'grouping'}&amp;{$name}={$value}{/if}{/foreach}'>
                                Image
                            </a>
                        </li>
                    </ul>
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
                    {if ($res@iteration-1) is div by 2}
                    <hr>
                    <div class='row'>
                    {/if}
                        <div class='col-lg-6'>
                            <a href='../illumination?id={$res[0]}'>
                                <h4>
                                    {$res[3]} {$res[4]} ({$res[5]})
                                </h4>
                                <h3>
                                    {$res[6]}
                                </h3>
                                {if $res[8]==1}
                                <p>
                                    (image of {$res[2]} from folder {$res[1]})
                                </p>
                                {elseif $res[8]==5 or $res[8]==8 or $res[8]==9}
                                <img class='img-responsive' src="http://www.bl.uk/IllImages/{$res[1]}/mid/{$res[2]|truncate:4:"":true}/{$res[2]}.jpg">
                                {else}
                                <img class='img-responsive' src="http://www.bl.uk/IllImages/{$res[1]}/mid/{$res[2]}.jpg">
                                {/if}
                                {if $res[7]}
                                <p>
                                    by {$res[7]}
                                </p>
                                {/if}
                            </a>
                        </div>
                    {if $res@iteration is div by 2}
                    </div>
                    {elseif $res@last}
                    <div class='row'>
                    {/if}
                    {* end of image results formatting block *}
                    {elseif $get['grouping']=='p'}
                    <hr>
                    <a href='../manuscript?id={$res[8]}#part{$res[6]}'>
                        <h4>
                            {$res[1]} {$res[2]} {if $res[3]}({$res[3]}){/if}
                            [part {$res[6]} of {$res[7]}]
                        </h4>
                        <h3>
                            {$res[5]|default:'(untitled)'|regex_replace:"/~([^~]*)~/":"<i>\\1</i>"}
                        </h3>
                        {if $res[4]}
                        <h5>
                            {* regex_replace gets rid of indexing details
                               - of no interest to visitors *}
                            by {$res[4]|regex_replace:"/\(index[^\)]*\)/":""}
                        </h5>
                        {/if}
                    </a>
                    {if count($images[$res[0]])>0}
                    {foreach $images[$res[0]] as $image}
                    {if ($image@iteration - 1) is div by 6}
                    <div class='row'>
                    {/if}
                        {if ($image@iteration - 1) is div by 3}
                        <div class='col-lg-6'>
                            <div class='row'>
                        {/if}
                                <div class='col-sm-4'>
                                    <a href='../illumination?id={$image[0]}'>
                                        <h6>
                                            {if $image[1]}{$image[1]}:{/if} {$image[2]|default:'(No caption)'}
                                        </h6>
                                        {if $image[3]==1}
                                        <p>
                                            (image of {$image[5]} from folder {$image[4]})
                                        </p>
                                        {elseif $image[3]==5 or $image[3]==8 or $image[3]==9}
                                        <img class='img-responsive' src="http://www.bl.uk/IllImages/{$image[4]}/thm/{$image[5]|truncate:4:"":true}/{$image[5]}.jpg">
                                        {else}
                                        <img class='img-responsive' src="http://www.bl.uk/IllImages/{$image[4]}/thm/{$image[5]}.jpg">
                                        {/if}
                                    </a>
                                </div>
                        {if $image@iteration is div by 3}
                            </div>
                        </div>
                        {elseif $image@last}
                            </div>
                        </div>
                        {/if}
                    {if $image@iteration is div by 6}
                    </div>
                    {elseif $image@last}
                    </div>
                    {/if}
                    {/foreach}
                    {/if}
                    {* end of part results formatting block *}
                    {elseif $get['grouping']='m'}
                    <hr>
                    <h3>
                        <a href='../manuscript?id={$res[0]}'>
                            {$res[1]} {$res[2]}
                        </a>
                    </h3>
                    {* end of manuscript results formatting block *}
                    {/if}
                    {*if !($res@last)}
                    <hr>
                    {/if*}
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
