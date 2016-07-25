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
            <div class='col-sm-12'>
                <h1>
                    {$record[0]} {$record[1]}
                </h1>
                <dl>
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
                </dl>
                <h2>Parts</h2>
                <ul>
                    {foreach $parts as $no => $details}
                    <article id='part{$details[10]}'>
                        <h3>
                            {1+$no}{if $details[0] != ''} ({$details[0]}){/if}: {$details[2]|default:'(untitled)'}
                        </h3>
                        {if $details[1] != ''}
                        <h4>
                            {* regex_replace removes indexing details *}
                            by {$details[1]|regex_replace:"/\(index[^\)]*\)/":""}
                        </h4>
                        {/if}
                        <dl>
                            <dt>
                                Dates
                            </dt>
                            <dd>
                                {$details[3]}
                            </dd>
                            <dt>
                                Language
                            </dt>
                            <dd>
                                {$details[4]}
                            </dd>
                            <dt>
                                Dimensions
                            </dt>
                            <dd>
                                {$details[5]}
                            </dd>
                            <dt>
                                Script
                            </dt>
                            <dd>
                                {$details[6]}
                            </dd>
                            <dt>
                                Scribe
                            </dt>
                            <dd>
                                {$details[7]}
                            </dd>
                            <dt>
                                Provenance
                            </dt>
                            <dd>
                                {$details[8]}
                            </dd>
                            <dt>
                                Attribution
                            </dt>
                            <dd>
                                {$details[9]}
                            </dd>
                        </dl>
                    </article>
                    {if !($details@last)}
                    <hr>
                    {/if}
                    {/foreach}
                </ul>
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
