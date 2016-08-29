<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" />
        <title>Laravel-blog</title>
    </head>
    <body>
        <div class="container">
            <div class="card purple lighten-3" style="padding:18px;">
                <div class="valign-wrapper">
                    <h1 class="center-align" style="width:100%;">
                        <i class="medium material-icons">bubble_chart</i>
                        laravel-blog
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div id="entry"></div>
                </div>
            </div>
        </div>
        <input type="hidden" id="entryId" value="{{$id}}" />
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        <script src="{{{asset('/js/script-view.js')}}}"></script>
    </body>
</html>