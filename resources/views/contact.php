<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <title>portfolio</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css">
  </head>
  
  <body>
    
    <header>
      <div class="header-logo">keita-naito</div>
      <div class="header-list">
        <ul>
          <li><a href="index.html#news">NEWS</a></li>
          <li><a href="index.html#menu">MENU</a></li>
          <li><a href="index.html#access">ACCESS</a></li>
          <li><a href="index.html#reservation">ご予約</a></li>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
      </div>
    </header>
    
    <main>
      <form action="" method="post">
        <div class="contact-form">
          <h3 class="contact-title">お問い合わせ</h3>
          <h4 class="contact-text">お名前</h4>
          <input class="box">
          <h4 class="contact-text text-border">ご連絡について</h4>
          <label><input  type="radio" name="method" value="tell">電話で折り返して欲しい</label>
          <label><input  type="radio" name="method" value="mail">メールで折り返して欲しい</label>
          <h4 class="contact-text">電話番号</h4>
          <input class="box" placeholder="半角、ハイフン無しでお願いします。" type="number">
          <h4 class="contact-text">メールアドレス</h4>
          <input class="mail" type="email">
          <h4 class="contact-text">お問い合わせ内容</h4>
          <textarea></textarea>
          <button type="submit" name="form" value="contact">送信する</button>
        </div>
      </form>
    </main>
    
    <footer>
      <div class="footer-area">
        <div class="list-navbar">
          <h5 class="nav-title">お問い合わせ</h5>
          <ul>
            <li><a href="tel:03-1234-5678">03-1234-5678</a></li>
            <li><a href="#">sample_email@co.jp</a></li>
          </ul>
        </div>
        <div class="list-navbar">
          <h5 class="nav-title">CONTENTS</h5>
          <ul>
            <li>NEWS</li>
            <li>ご予約</li>
            <li>ACCESS</li>
            <li>MENU</li>
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