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
        <p>
            You are on page {$pageno} of {$maxpage},
            viewing {$perpage} of the {$mscount} results.
        </p>
        <ul>
            {foreach $mslist as $ms}
            <li>
                <ul>
                    {foreach $ms as $attr}
                    <li>
                        {$attr}
                    </li>
                    {/foreach}
                </ul>
            </li>
            {/foreach}
        </ul>
        <ul class='pagination'>
            {for $linkno=$pageno-2 to $pageno+2}
            {if ($linkno<=0) || ($linkno>$maxpage)}
            {continue}
            {/if}
            {if $linkno==$pageno}
            <li class='active'>
            {else}
            <li>
                {/if}
                <a href='?page={$linkno}'>{$linkno}</a>
            </li>
            {/for}
        </ul>
    </div>
</body>
</html>
