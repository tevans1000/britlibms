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
        <div class='row'>
            <div class='col-sm-12'>
                <header>
                    <h2>
                        Header
                    </h2>
                </header>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-2'>
                <nav>
                    <h2>
                        Filters
                    </h2>
                    <h3>
                        Regions
                    </h3>
                    <ul>
                        {foreach $region_list as $row}
                        <li>
                            <a href='?region={$row[0]}{foreach $get as $name => $value}{if $name != 'page' and $name != region}&amp;{$name}={$value}{/if}{/foreach}'>
                                {$row[1]} ({$row[2]})
                            </a>
                        </li>
                        {/foreach}
                    </ul>
                </nav>
            </div>
            <div class='col-sm-10'>
                <section>
                    <h1>
                        Results
                    </h1>
                    <p>
                        You are on page {$pageno} of {$maxpage},
                        viewing {$perpage} of the {$rescount} results.
                    </p>
                    {foreach $reslist as $res}
                    {if $get['grouping']=='i'}
                    <h4>
                        {$res[3]} {$res[4]} ({$res[5]})
                    </h4>
                    <h3>
                        {$res[6]}
                    </h3>
                    <p>
                        (image of {$res[2]} from folder {$res[1]})
                    </p>
                    {if $res[7] != ''}
                    <p>
                        by {$res[7]}
                    </p>
                    {/if}
                    {if !($res@last)}
                    <hr>
                    {/if}
                    {else}
                    <ul>
                        {foreach $res as $attr}
                        <li>
                            {$attr}
                        </li>
                        {/foreach}
                    </ul>
                    {/if}
                    {/foreach}
                </section>
            </div>
        </div>
        <div class='row'>
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
        </div>
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
