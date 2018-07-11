<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="3KbZLaTWDb5IasmLSCriVFaMTO1eWI0qwLa1TqHs">

    <title>創作ノート｜メニュー</title>

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
                <a class="navbar-brand" href="index.html">
                    創作ノート
                </a>
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" href="create.html">新規作成</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="list.html">ノート一覧</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="draft-list.html">下書き</a>
                </nav>

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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    永保彩佳 <span class="caret"></span>
                                </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="home.html" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                <form id="logout-form" action="home.html" method="POST" style="display: none;">
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">メニュー</div>

                            <div class="card-body">
                                <a href="create.html" class="btn btn-outline-primary btn-lg btn-block">
                                  新規作成
                              </a><br>
                                <a href="list.html" class="btn btn-outline-success btn-lg btn-block">
                                  ノート一覧
                              </a><br>
                                <a href="draft-list.html" class="btn btn-outline-info btn-lg btn-block">
                                  下書き
                              </a>
                              <br>
                              <br>
                                <img src="img/books.png"  class="rounded float-right" alt="本">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
