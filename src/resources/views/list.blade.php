<html>
    <head>
        <title>T.J. Mahaffey | Verso for Laravel 5.2</title>
 
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
 
        <style>
            html, body {
                height: 100%;
            }
 
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
 
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
 
            .content {
                text-align: center;
                display: inline-block;
            }
 
            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                
                <table>
                    <thead>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </thead>
                    @foreach($pages as $page)
                        <tr>
                            <td>{!! $page->title !!}</td>
                        </tr>
                    @endforeach
                </table>    

            </div>
        </div>
    </body>
</html>
