<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
</head>
<body>
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
    <ul>
        {for $linkno=$pageno-2 to $pageno+2}
        {if ($linkno<=0) || ($linkno>$maxpage)}
        {continue}
        {/if}
        <li>
            <a href='?page={$linkno}'>{$linkno}</a>
        </li>
        {/for}
    </ul>
</body>
</html>
