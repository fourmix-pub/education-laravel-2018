<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="3KbZLaTWDb5IasmLSCriVFaMTO1eWI0qwLa1TqHs">

    <title>創作ノート｜トップ</title>

    <!-- Scripts -->
    <script src="http://education-laravel.test/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="http://education-laravel.test/css/app.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand">
                    創作ノート
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown">
                            <a href="login.html">
                                    ログイン <span class="caret"></span>
                                </a> |
                            <a href="signup.html">
                                        新規登録 <span class="caret"></span>
                                    </a>

                            <form id="logout-form" action="http://education-laravel.test/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="3KbZLaTWDb5IasmLSCriVFaMTO1eWI0qwLa1TqHs"> </form>
                </div>
                </li>
                </ul>
            </div>
    </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1 class="display-2">「話のタネ」を育てよう。</h1>

                    <h2>
                        「創作ノート」は、思いついたストーリーの「5W1H」を記録することで<br>
                        「話のタネ」が「物語」になるのを応援するサイトです。
                      </h2>
                    <br>
                    <br>
                </div>
            </div>
            <a href="login.html" class="btn btn-outline-primary btn-block ">ログイン</a>
            <br>
            <a href="signup.html" class="btn btn-outline-info btn-block">新規登録</a>
            <img src="img/me.png" class="rounded float-right" alt="growup">

        </div>
    </main>
    </div>
</body>

</html>
