<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <link href="{{ secure_asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/home.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
    </head>
    
    <body>
        <header>
            <div class="header-logo">
                <a href="/">keita-naito</a>
            </div>
            
            <!--ドロップダウンメニュー-->
            <div id="nav-drawer">
                <input id="nav-input" type="checkbox" class="nav-unshown">
                <label id="nav-open" for="nav-input"><span></span></label>
                <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                <div id="nav-content">
                    <ul>
                        <li><a href="#news">NEWS</a></li>
                        <li><a href="#menu">MENU</a></li>
                        <li><a href="#access">ACCESS</a></li>
                        <li><a href="#reservation">ご予約</a></li>
                        <li><a href="contact/form">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="header-list">
                <ul>
                    <li><a href="#news">NEWS</a></li>
                    <li><a href="#menu">MENU</a></li>
                    <li><a href="#access">ACCESS</a></li>
                    <li><a href="#reservation">ご予約</a></li>
                    <li><a href="contact/form">お問い合わせ</a></li>
                </ul>
            </div>
        </header>
        
        <main>
            @yield('content')
        </main>
        
        <footer>
            <div class="footer-area">
                <div class="list-navbar">
                    <h5 class="nav-title">お問い合わせ</h5>
                    <ul>
                        <li><a href="tel:03-1234-5678">03-1234-5678</a></li>
                        <li><a href="mailto:sample_email@co.jp">sample_email@co.jp</a></li>
                    </ul>
                </div>
                <div class="list-navbar">
                    <h5 class="nav-title">CONTENTS</h5>
                    <ul>
                        <li><a href="#news">NEWS</a></li>
                        <li><a href="#access">ACCESS</a></a></li>
                        <li><a href="#menu">MENU</a></li>
                    </ul>
                </div>
                <div class="list-navbar outer">
                    <h5 class="nav-title">ご予約</h5>
                    <p>WEB予約</p>
                    <button type="button" onclick="location.href='#'">WEBで予約する</button>
                    <p>電話予約</p>
                    <a href="tel:03-1234-5678">
                    <button type="button">03-1234-5678</button>
                    </a>
                </div>
                <div class="list-navbar">
                    <h5 class="nav-title shop-information">店舗情報</h5>
                    <p>・営業時間<br>【9:00～18:00】</p>
                    <p>・定休日<br>毎週火曜日</p>
                </div>
            </div>
            <div class="copy-right">
                <p>©2019 ○○美容室 DESIGNED BY NAITO</p>
            </div>
        </footer>
    </body>
</html>
