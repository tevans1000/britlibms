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
                    {if count($filter_lists)==0}
                    <p>
                        No further filtering possible
                    </p>
                    {else}
                    <ul class='nav nav-tabs'>
                        {foreach $filter_lists as $name => $list}
                        <li {if $list@first}class='active'{/if}>
                            <a data-toggle='tab' href='#{$name}'>
                                {$name|capitalize}
                            </a>
                        </li>
                        {/foreach}
                    </ul> <!-- end of facet tabs -->
                    <div class='tab-content'>
                        {foreach $filter_lists as $name => $list}
                        <div id='{$name}' class='tab-pane {if $list@first}active{/if}'>
                            {if $name == 'date'}
                            <form class='form-inline' role='form' method='get'>
                                <div class='form-group'>
                                    <label for='yearstart'>From year:</label>
                                    <input type='number' min='300' max='1873' name='yearstart'>
                                </div>
                                <div class='form-group'>
                                    <label for='yearend'>to year:</label>
                                    <input type='number' min='300' max='1873' name='yearend'>
                                </div>
                                {foreach $get as $k => $v}
                                {if $k != 'yearstart' and $k != 'yearend' and $k != 'page'}
                                <input type='hidden' name='{$k}' value='{$v}'>
                                {/if}
                                {/foreach}
                                {foreach $get_arrays as $k => $v}
                                {if $k != 'yearstart' and $k != 'yearend' and $k != 'page'}
                                <input type='hidden' name='{$k}' value='{$v}'>
                                {/if}
                                {/foreach}
                                <div class='form-group'>
                                    <button type='submit' class='btn btn-primary'>
                                        <span class='glyphicon glyphicon-refresh'></span>
                                    </button>
                                </div>
                            </form>
                            <table>
                                {foreach $list as $item}
                                {if $item['start']} {* datable *}
                                <tr>
                                    <td>
                                    {if $item['count'] != 0}
                                    <a href='?yearstart={$item['start']}&amp;yearend={$item['end']}{foreach $get as $arg => $val}{if $arg != 'page' and $arg != 'yearstart' and $arg != 'yearend'}&amp;{$arg}={$val}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={$val}{/foreach}'>
                                    {/if}
                                        {if ($item['start']%10==0 and $item['end']==$item['start']+9 and $item['start']%100!=0) or ($item['start']%100==0 and $item['end']==$item['start']+99)}
                                        {$item['start']}s {* 1400-1499 -> 1400s, 1490-1499 -> 1490s, 1400-1409 -> 1400-1409 *}
                                        {elseif $item['start'] == $item['end']}
                                        {$item['start']} {* 1 year not considered a range *}
                                        {else}
                                        {$item['start']}&ndash;{$item['end']} {* nicely formatted range *}
                                        {/if}
                                    {if $item['count'] != 0}
                                    </a>
                                    {/if}</td><td>
                                        <meter value='{$item['count']}' min='0' max='{$rescount}' style='float: right;'>
                                            ({$item['count']})
</td>
                                </tr>
                                {else}
                                {* TODO: link for undatable manuscripts *}
                                {/if}
                                {/foreach}
                            </table> <!-- end of date-list -->
                            {else}
                            <table>
                                {foreach $list as $item}
                                <tr>
                                    <td><a href='?{$name}={$item[0]}{foreach $get as $arg => $val}{if $arg != $name and $arg != 'page'}&amp;{$arg}={$val}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={if $arg == $name}{$val|replace:'[]':'['|replace:']':','}{$item[0]}]{else}{$val}{/if}{/foreach}'>
                                        {$item[1]}</a></td><td>
                                        <meter value='{$item[2]}' min='0' max='{$rescount}' style='float: right;'>
                                            ({$item[2]})
                                        </meter>
                                    </td>
                                </tr>
                                {/foreach}
                            </table>
                            {/if}
                        </div>
                        {/foreach}
                    </div>
                    {/if}
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
                            <a href='?grouping=m{foreach $get as $name => $value}{if $name != 'page' and $name != 'grouping'}&amp;{$name}={$value}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={$val}{/foreach}'>
                                Manuscript
                            </a>
                        </li>
                        <li{if $get['grouping']=='p'} class='active'{/if}>
                            <a href='?grouping=p{foreach $get as $name => $value}{if $name != 'page' and $name != 'grouping'}&amp;{$name}={$value}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={$val}{/foreach}'>
                                Part
                            </a>
                        </li>
                        <li{if $get['grouping']=='i'} class='active'{/if}>
                            <a href='?grouping=i{foreach $get as $name => $value}{if $name != 'page' and $name != 'grouping'}&amp;{$name}={$value}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={$val}{/foreach}'>
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
                                <a href='?page={$linkno}{foreach $get as $name => $value}{if $name != 'page'}&amp;{$name}={$value}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={$val}{/foreach}'>
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
                    <dl>
                        {if $res[3]}
                        <dt>
                            Official foliation
                        </dt>
                        <dd>
                            {$res[3]}
                        </dd>
                        {/if}
                        {if $res[4]}
                        <dt>
                            Collation
                        </dt>
                        <dd>
                            {$res[4]}
                        </dd>
                        {/if}
                        {if $res[5]}
                        <dt>
                            Form
                        </dt>
                        <dd>
                            {$res[5]}
                        </dd>
                        {/if}
                        {if $res[6]}
                        <dt>
                            Binding
                        </dt>
                        <dd>
                            {$res[6]}
                        </dd>
                        {/if}
                    </dl>
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
                            <a href='?page={$linkno}{foreach $get as $name => $value}{if $name != 'page'}&amp;{$name}={$value}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={$val}{/foreach}'>
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
