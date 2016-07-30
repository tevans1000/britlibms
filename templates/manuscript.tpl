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
                    {$record[0]} {$record[1]}
                </h1>
                <dl id='manuscript-details-list'>
                    <dt>
                        Official foliation
                    </dt>
                    <dd>
                        {$record[2]}
                    </dd>
                    <dt>
                        Collation
                    </dt>
                    <dd>
                        {$record[5]}
                    </dd>
                    <dt>
                        Form
                    </dt>
                    <dd>
                        {$record[3]}
                    </dd>
                    <dt>
                        Binding
                    </dt>
                    <dd>
                        {$record[4]}
                    </dd>
                    <dt>
                        Provenance
                    </dt>
                    <dd>
                        <ul>
                            {foreach $provenance as $per}
                            <li>
                                {$per}
                            </li>
                            {/foreach}
                        </ul>
                    </dd>
                    <dt>
                        Notes
                    </dt>
                    <dd>
                        {foreach $note as $n}
                        <p>
                            {$n}
                        </p>
                        {/foreach}
                    </dd>
                    <dt>
                        Select bibliography
                    </dt>
                    <dd>
                        <ul>
                            {foreach $bib as $ref}
                            <li>
                                {$ref}
                            </li>
                            {/foreach}
                        </ul>
                    </dd>
                </dl> <!-- end of manuscript-details-list -->
                <h2>
                    Parts
                </h2>
                {foreach $parts as $no => $details}
                <article id='part{$details[10]}'>
                    <h3>
                        {1+$no}{if $details[0]} ({$details[0]}){/if}:
                        {$details[2]|default:'(untitled)'|regex_replace:"/~([^~]*)~/":"<i>\\1</i>"}
                    </h3>
                    {if $details[1]}
                    <h4>
                        by {$details[1]}
                    </h4>
                    {/if}
                    <dl>
                        <dt>
                            Origin
                        </dt>
                        <dd>
                            <ul>
                                {foreach $regions[$details[11]] as $region}
                                <li>
                                    <a href='../results?region={$region[0]}'>
                                        {$region[1]}
                                    </a>
                                </li>
                                {/foreach}
                            </ul>
                        </dd>
                        {if $details[4]}
                        <dt>
                            Language
                        </dt>
                        <dd>
                            {$details[4]}
                        </dd>
                        {/if}
                        <dt>
                            Language list
                        </dt>
                        <dd>
                            <ul>
                                {foreach $languages[$details[11]] as $lang}
                                <li>
                                    <a href='../results?language={$lang[0]}'>
                                        {$lang[1]}
                                    </a>
                                </li>
                                {/foreach}
                            </ul>
                        </dd>
                        {if $details[3]}
                        <dt>
                            Dates
                        </dt>
                        <dd>
                            {$details[3]}
                        </dd>
                        {/if}
                        {if $details[5]}
                        <dt>
                            Dimensions
                        </dt>
                        <dd>
                            {$details[5]}
                        </dd>
                        {/if}
                        {if $details[6]}
                        <dt>
                            Script
                        </dt>
                        <dd>
                            {$details[6]}
                        </dd>
                        {/if}
                        {if $details[7]}
                        <dt>
                            Scribe
                        </dt>
                        <dd>
                            {$details[7]}
                        </dd>
                        {/if}
                        {if $details[8]}
                        <dt>
                            Provenance
                        </dt>
                        <dd>
                            {$details[8]}
                        </dd>
                        {/if}
                        {if $details[9]}
                        <dt>
                            Attribution
                        </dt>
                        <dd>
                            {$details[9]}
                        </dd>
                        {/if}
                    </dl>
                </article>
                {if !($details@last)}
                <hr>
                {/if}
                {/foreach}
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
