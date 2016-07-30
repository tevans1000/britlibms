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
                <img src="http://www.bl.uk/IllImages/{$record[9]}/big/{$record[10]|truncate:4:"":true}/{$record[10]}.jpg">
                {else}
                <img src="http://www.bl.uk/IllImages/{$record[9]}/big/{$record[10]}.jpg">
                {/if}
                <h2>
                    Description
                </h2>
                <p>
                    {$record[11]}
                </p>
                <h2>
                    Notes
                </h2>
                <p>
                    {$record[12]}
                </p>
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
