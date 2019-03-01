<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Using?</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <style>
        　　body {
                 font-family: 'Avenir','Helvetica Neue','Helvetica','Arial','Hiragino Sans','ヒラギノ角ゴシック',YuGothic,'Yu Gothic','メイリオ', Meiryo,'ＭＳ Ｐゴシック','MS PGothic'  
        　　}
            h4, h5 {
                border-bottom: solid 2px #444444;
                margin:20px;
            }
            p,h3 {
                color:#444444;
            }
        </style>
    </head>
    <body>
        @include('commons.navbar')
        <div class="container">
            @include('commons.error_messages')
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
    
</html>