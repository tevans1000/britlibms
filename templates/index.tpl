<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='../bootstrap-extra.js'></script>
    <script>
        function validateDateForm() {
            var x = document.forms['date-form']
            var start = x['yearstart'].value;
            var end = x['yearend'].value;
            if (start != ''  && end != ''
                             && parseInt(start)>parseInt(end)) {
                alert('Start date must precede end date.');
                return false;
            }
        }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='../style.css'>
    <title>
        Browsing &mdash;
        British Library catalogue of Illuminated Manuscripts
    </title>
</head>
<body>
    <div class='container-fluid'>
        
        <div id='header-row' class='row'><header>
            <div class='col-xs-2'><nav>
                <a href='http://www.bl.uk' title='British Library home page' style='float: left;'>
                    <img src='http://www.bl.uk/catalogues/illuminatedmanuscripts/images/logo.gif' alt='Home'>
                </a>
                <ul style='position: relative; left: 1em; list-style-type: none;'>
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
        
        {if $not_found}
        {* Row for error message if visitor redirected here from
           invalid manuscript or illumination request *}
        <div class='row'><div class='col-xs-12'>
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert'>
                    <span class='glyphicon glyphicon-remove'></span>
                </a>
                <span class='glyphicon glyphicon-warning-sign'></span>
                The
                {if $not_found == 'm'}manuscript{else}illumination{/if}
                requested was not found.
            </div>
        </div></div>
        {/if}
        
        <div id='content-row' class='row'>
            <div id='filter-column' class='col-xs-3'><nav>
                <h2>Filters</h2>
                {if count($filter_lists)==0}
                <p>No further filtering possible</p>
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
                    <div id='{$name}'
                         class='tab-pane {if $list@first}active{/if}'
                    >
                        {if $name == 'date'}
                        <form   id='date-form' class='form-inline'
                              role='form' method='get'
                              onsubmit='return validateDateForm()'
                        >
                            <div class='form-group'>
                                <label for='yearstart'>
                                    From year:
                                </label>
                                <input type='number' min='300'
                                        max='1873'   name='yearstart'
                                >
                            </div>
                            <div class='form-group'>
                                <label for='yearend'>to year:</label>
                                <input type='number' min='300'
                                        max='1873'  name='yearend'
                                >
                            </div>
                            {foreach $get as $k => $v}
                            {if $k != 'yearstart' and $k != 'yearend'
                                                  and $k != 'page'
                            }
                            <input type='hidden' name='{$k}'
                                   value='{$v}'
                            >
                            {/if}
                            {/foreach}
                            {foreach $get_arrays as $k => $v}
                            {if $k != 'yearstart' and $k != 'yearend'
                                                  and $k != 'page'
                            }
                            <input type='hidden' name='{$k}'
                                   value='{$v}'
                            >
                            {/if}
                            {/foreach}
                            <div class='form-group'>
                                <button type='submit'
                                        class='btn btn-primary'
                                >
                                    <span class='glyphicon glyphicon-refresh'></span>
                                </button>
                            </div>
                        </form>
                        <table>{foreach $list as $item}
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
                                    {/if}
                                </td>
                                <td>
                                    <meter value='{$item['count']}'
                                           min='0' max='{$rescount}'
                                    >
                                        ({$item['count']})
                                    </meter>
                                </td>
                            </tr>
                            {else}
                            {* TODO: link for undatable manuscripts *}
                            {/if}
                        {/foreach}</table> <!-- end of date-list -->
                        {else}
                        <table>{foreach $list as $item}<tr>
                            <td>
                                <a href='?{$name}={$item[0]}{foreach $get as $arg => $val}{if $arg != 'page'}&amp;{$arg}={$val}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={if $arg == $name}{$val|replace:'[]':'['|replace:']':','}{$item[0]}]{else}{$val}{/if}{/foreach}'>
                                    {$item[1]}
                                </a>
                            </td>
                            <td>
                                <meter value='{$item[2]}' min='0'
                                       max='{$rescount}'
                                >
                                    ({$item[2]})
                                </meter>
                            </td>
                        </tr>{/foreach}</table>
                        {/if}
                    </div>
                    {/foreach}
                </div>
                {/if}
            </nav></div> <!-- end of filter-column -->
            <div id='results-column' class='col-xs-9'><section>
                {if !$no_filters}
                <h2>
                    Showing
                    {if $get['grouping']=='p'}part{elseif $get['grouping']=='m'}manuscript{else}image{/if}s
                    matching
                    th{if count($active_filters)==1}is filter{else}ese filters{/if}
                </h2>
                {foreach $active_filters as $name => $value}
                <div class='btn-group'>
                    <a href='?page=1{foreach $get as $arg => $val}{if $arg != 'page' and $name != $arg and ($name != 'date' or ($arg != 'yearstart' and $arg != 'yearend'))}&amp;{$arg}={$val}{/if}{/foreach}{foreach $get_arrays as $arg => $val}{if $arg != $name}&amp;{$arg}={$val}{/if}{/foreach}' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Click to clear all {$name} filters.'>
                        <b>{$name|capitalize}</b>
                    </a>
                    {if $name == 'collection'}
                    <a href='?page=1{foreach $get as $arg => $val}{if $arg != 'page' and $arg != $name}&amp;{$arg}={$val}{/if}{/foreach}{foreach $get_arrays as $arg => $val}{if $arg != $name}&amp;{$arg}={$val}{/if}{/foreach}' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Click to remove {$value} from {$name} filters'>
                        {$value}
                    </a>
                    {elseif $name == 'date'}
                    {if isset($value['yearstart'])}
                    <a href='?page=1{foreach $get as $arg => $val}{if $arg != 'page' and $arg != 'yearstart'}&amp;{$arg}={$val}{/if}{/foreach}{foreach $get_arrays as $arg => $val}{if $arg != $name}&amp;{$arg}={$val}{/if}{/foreach}' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Click to remove {$value['yearstart']} as start date'>
                        start date: {$value['yearstart']}
                    </a>
                    {/if}
                    {if isset($value['yearend'])}
                    <a href='?page=1{foreach $get as $arg => $val}{if $arg != 'page' and $arg != 'yearend'}&amp;{$arg}={$val}{/if}{/foreach}{foreach $get_arrays as $arg => $val}{if $arg != $name}&amp;{$arg}={$val}{/if}{/foreach}' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Click to remove {$value['yearend']} as end date'>
                        end date: {$value['yearend']}
                    </a>
                    {/if}
                    {else}
                    {foreach $value as $val_id => $val_name}
                    <a href='?page=1{foreach $get as $arg=>$val}{if $arg != 'page'}&amp;{$arg}={$val}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={if $arg == $name}{$val|regex_replace:"/,$val_id(?!\d)/":''|regex_replace:"/\[$val_id,?/":'['}{else}{$val}{/if}{/foreach}' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Click to remove {$val_name} from {$name} filters'>
                        {$val_name}
                    </a>
                    {/foreach}
                    {/if}
                </div>
                {/foreach}
                {/if}
                <h2>Grouping and sorting options</h2>
                <button type='button' class='btn btn-primary'
                        data-toggle='collapse'
                        data-target='#group-sort-controls'
                >
                    Show/Hide
                </button>
                <div id='group-sort-controls' class='collapse'>
                <h6>Group by:</h6>
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
                {if $rescount>1}
                <h6>Sort:</h6>
                <ul class='nav nav-pills'>{foreach $sortings as $sort}
                    <li{if $get['sort']==$sort} class='active'{/if}>
                        <a href='?sort={$sort}{foreach $get as $name => $value}{if $name != 'page' and $name != 'sort'}&amp;{$name}={$value}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={$val}{/foreach}'>
                            {if $sort == 'rchron'}
                            New to old
                            {elseif $sort == 'chron'}
                            Old to new
                            {elseif $sort[0]=='r'}
                            {substr($sort,1)|capitalize}
                            <span class='glyphicon glyphicon-sort-by-alphabet-alt'></span>
                            {else}
                            {$sort|capitalize}
                            <span class='glyphicon glyphicon-sort-by-alphabet'></span>
                            {/if}
                        </a>
                    </li>
                {/foreach}</ul>
                {/if}
                </div>
                <h1>Results</h1>
                <p>
                    {if $maxpage > 1}
                    {if $get['grouping']=='p'}Part{elseif $get['grouping']=='m'}Manuscript{else}Image{/if}s
                    {$firstret}&ndash;{$lastret} of {$rescount}
                    (page {$pageno} / {$maxpage})
                    {elseif $rescount>1}
                    Viewing all {$rescount}
                    {if $get['grouping']=='p'}part{elseif $get['grouping']=='m'}manuscript{else}image{/if}s
                    found
                    {elseif $rescount==1}
                    Only 1
                    {if $get['grouping']=='p'}part{elseif $get['grouping']=='m'}manuscript{else}image{/if}
                    found
                    {else}
                    None found
                    {/if}
                </p>
                {if $maxpage > 1} {* no pagination if 1 page *} <nav>
                    <ul class='pagination'
                        {if $pageno > 8 or $pageno+7 < $maxpage}
                        style='float: left;'
                        {/if}
                    >
                        {for $linkno=$pageno-7 to $pageno+7}
                        {if ($linkno<=0)}{continue}{/if}
                        {if $linkno==$pageno}
                        <li class='active'>
                        {else}
                        <li>
                        {/if}
                            <a href='?page={$linkno}{foreach $get as $name => $value}{if $name != 'page'}&amp;{$name}={$value}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={$val}{/foreach}'>
                                {$linkno}
                            </a>
                        </li>
                        {if ($linkno==$maxpage)}{break}{/if}
                        {/for}
                    </ul>
                    {if $pageno > 8 or $pageno+7 < $maxpage}
                    <form   id='page-form' class='form-inline'
                          role='form'     method='get'
                    >
                        <div class='form-group'>
                            <label for='page'>Take me to page</label>
                            <input  type='number'      min='1'
                                     max='{$maxpage}' name='page'
                                   value='{$pageno}'
                            >
                            {foreach $get as $k => $v}{if $k != 'page'}
                            <input type='hidden' name='{$k}' value='{$v}'>
                            {/if}{/foreach}
                            {foreach $get_arrays as $k => $v}
                            {if $k != 'yearstart' and $k != 'yearend'
                                                  and $k != 'page'
                            }
                            <input type='hidden' name='{$k}'
                                   value='{$v}'
                            >
                            {/if}
                            {/foreach}
                            <div class='form-group'>
                                <button  type='submit'
                                        class='btn btn-primary'
                                >
                                    GO
                                </button>
                            </div>
                        </div>
                    </form>
                    {/if}
                </nav>{/if}
                {foreach $reslist as $res}
                {if $get['grouping']=='i'}
                {if ($res@iteration-1) is div by 2}
                <hr>
                <div class='row'>
                {/if}
                    <div class='col-lg-6'>
                        <a href='../illumination?id={$res[0]}'>
                            <h4>
                                {$res[3]}
                                {$res[4]}{if $res[5]} ({$res[5]}){/if}
                            </h4>
                            <h3>
                                {$res[6]|default:'(untitled)'|regex_replace:'/~([^~]*)~/':'<i>\1</i>'}
                            </h3>
                            {if $res[8]==1}
                            {* image URL uncookable *}
                            {elseif $res[8]==5 or $res[8]==8 or $res[8]==9}
                            <img class='img-responsive' src="http://www.bl.uk/IllImages/{$res[1]}/mid/{$res[2]|truncate:4:"":true}/{$res[2]}.jpg">
                            {else}
                            <img class='img-responsive' src="http://www.bl.uk/IllImages/{$res[1]}/mid/{$res[2]}.jpg">
                            {/if}
                            {if $res[7]}<p>by {$res[7]}</p>{/if}
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
                                        {if $image[1]}{$image[1]}:{/if} {$image[2]|regex_replace:'/~([^~]*)~/':'<i>\1</i>'|default:'(No caption)'}
                                    </h6>
                                    {if $image[3]==1}
                                    <img class='img-responsive' src='{$placeholder_image_url}'>
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
                    <dd class='oneline'>
                        {$res[3]|regex_replace:'/\^([^\^]*)\^/':'<sup>\1</sup>'}
                    </dd>
                    {/if}
                    {if $res[4]}
                    <dt>
                        Collation
                    </dt>
                    <dd class='oneline'>
                        {$res[4]|regex_replace:'/\^([^\^]*)\^/':'<sup>\1</sup>'}
                    </dd>
                    {/if}
                    {if $res[5]}
                    <dt>
                        Form
                    </dt>
                    <dd class='oneline'>
                        {$res[5]}
                    </dd>
                    {/if}
                    {if $res[6]}
                    <dt>
                        Binding
                    </dt>
                    <dd class='oneline'>
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
                                        {if $image[1]}{$image[1]}:{/if} {$image[2]|regex_replace:'/~([^~]*)~/':'<i>\1</i>'|default:'(No caption)'}
                                    </h6>
                                    {if $image[3]==1}
                                    <img class='img-responsive' src='{$placeholder_image_url}'>
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
            </section></div> <!-- end of results-column -->
        </div> <!-- end of content-row -->
        
        {if $maxpage > 1} {* Pagination not required for only 1 page *}
        <div id='pagination-row' class='row'>
            <div class='col-xs-12'>
                <hr>
            {if $maxpage > 1} {* pagination not required if only 1 page *}
            <nav>
                <ul class='pagination' {if $pageno > 8 or $pageno+7 < $maxpage}style='float: left;'{/if}>
                    {for $linkno=$pageno-7 to $pageno+7}
                    {if ($linkno<=0)}{continue}{/if}
                    {if $linkno==$pageno}
                    <li class='active'>
                    {else}
                    <li>
                    {/if}
                        <a href='?page={$linkno}{foreach $get as $name => $value}{if $name != 'page'}&amp;{$name}={$value}{/if}{/foreach}{foreach $get_arrays as $arg => $val}&amp;{$arg}={$val}{/foreach}'>
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
                    </div>
                    {foreach $get as $k => $v}{if $k != 'page'}
                    <input type='hidden' name='{$k}' value='{$v}'>
                    {/if}{/foreach}
                    {foreach $get_arrays as $k => $v}
                    {if $k != 'yearstart' and $k != 'yearend' and $k != 'page'}
                    <input type='hidden' name='{$k}' value='{$v}'>
                    {/if}
                    {/foreach}
                    <div class='form-group'>
                        <button type='submit' class='btn btn-primary'>
                            GO
                        </button>
                    </div>
                </form>
                {/if}
            </nav>
            {/if}
            </div>
        </div> <!-- end of pagination-row -->
        {/if}
        
    </div> <!-- end of container div -->
    
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