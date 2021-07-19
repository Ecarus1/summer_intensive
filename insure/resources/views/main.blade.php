<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="/css/main.css">
        @yield('link')
    </head>

    <body>
        <div class="header">
            <div class="inner_header">
                <div class="logo_conteiner">
                    <h1>ЗАСТРАХУЙ<span>БРАТУХУ</span></h1>
                </div>

                <ul class="navigation">
                    <a href="/"><li>Главня</li></a>
                    <a href="/about"><li>О нас</li></a>
                    <a href="/company"><li>Компании</li></a>
                    <a href="/login"><li>Войти</li></a>
                </ul>
            </div>
        </div>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>