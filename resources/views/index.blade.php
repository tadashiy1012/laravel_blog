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
                <div class="col s3">
                    <button id="writeBtn" class="btn-large waves-effect waves-light modal-trigger">
                        <i class="material-icons left">send</i>
                        write
                    </button>
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>input form</h4>
                            <div class="input-field">
                                <input id="inTitle" type="text" class="validate" placeholder="input title" />
                            </div>
                            <div class="input-field">
                                <textarea id="inBody" class="materialize-textarea" placeholder="input body"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a id="submitBtn" class="waves-effect waves-green btn-flat">submit</a>
                            <a id="cancelBtn" class="waves-effect waves-green btn-flat">cancel</a>
                        </div>
                    </div>
                </div>
                <div class="col s9">
                    <div id="entries"></div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
