<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div>
                    <img src="{{asset('images/photo.jpg')}}" alt="Logo">
                </div>
                <div class="links">
                    <div class="item">
                        <i class="fas fa-book-open"></i>
                        <a href="#">Документация</a>
                        <p>У Laravel есть замечательная, тщательная документация,
                            охватывающая каждый аспект фреймворка. Независимо от того, являетесь ли вы новичком в фреймворке или имеете предыдущий опыт работы с Laravel,
                            мы рекомендуем прочитать всю документацию от начала до конца.</p>
                    </div>
                    <div class="item">
                        <i class="fas fa-camera"></i>
                        <a href="#">Laracasts</a>
                        <p>Laracasts предлагает тысячи видеоуроков по разработке на Laravel, PHP и JavaScript. Ознакомьтесь с ними, убедитесь сами и в процессе значительно повысьте свои навыки разработки.</p>
                    </div>
                    <div class="item">
                        <i class="far fa-comment-alt"></i>
                        <a href="#">Новости Laravel</a>
                        <p>Laravel News - это портал, управляемый сообществом, и информационная рассылка, объединяющая все последние и
                            наиболее важные новости в экосистеме Laravel, включая новые выпуски пакетов и учебные пособия.</p>
                    </div>
                    <div class="item">
                        <i class="fas fa-globe-americas"></i>
                        <a href="#">Динамичная экосистема</a>
                        <p>Мощная библиотека инструментов и библиотек сторонних разработчиков Laravel, таких как Forge, Vapor, Nova и
                            Envoyer, поможет вам вывести ваши проекты на новый уровень. Соедините их с мощными библиотеками с
                            открытым исходным кодом, такими как <a href="#">Cashier</a>, <a href="#">Dusk</a>, <a href="#">Echo</a>, <a href="#">Horizon</a>,
                            <a href="#">Sanctum</a>, <a href="#">Telescope</a> и другими</p>
                    </div>
                    <div class="item">
                        <i class="fas fa-globe-americas"></i>
                        <a href="#">Hello, world!</a>
                        <p>Программа, результатом работы которой является вывод на экран или иное устройство фразы «Hello, world!»
                            (в дословном переводе с английского — «Здравствуй, мир!»; представляет собой распространённое неформальное
                            приветствие, близкое к русскому «всем привет!»). Также используются вариации с другой пунктуацией или регистром —
                            например, «Hello World». Обычно это первый пример программы в учебниках по программированию, и для многих студентов
                            такая программа является первым опытом при изучении нового языка.</p>
                    </div>
                </div>
            </div>
        </div>
    <footer>
       <div>
           <div>
               <i class="fas fa-shopping-cart"></i>
               <a href="#">Shop</a>
           </div>
           <div>
               <i class="fas fa-heart"></i>
               <a href="#">Sponsor</a>
           </div>
       </div>
        <div>
            <span>Laravel v8..83.27 (PHP v8.0.22)</span>
        </div>
    </footer>
    </body>
</html>
