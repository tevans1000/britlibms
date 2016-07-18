<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
</head>
<body>
    <p>
       You are on page {$pageno},
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
</body>
</html>
