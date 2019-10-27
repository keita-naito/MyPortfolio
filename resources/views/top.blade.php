@extends('layouts.home')

@section('title', '内藤美容室')

@section('content')
    <img class="main-image" src="image/トップ画面.jpg" alt="メイン画像" >
    <div class="news-wrapper">
        <h2><a id="news">NEWS</a></h2>
        <div class="news-contents">
            <div class="news-content">
                <img src="image/IMG_サンプル.jpg">
                <h3>NEWS TITLE</h3>
                <p>2019.9.28</p>
                <hr>
                <p>記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、</p>
            </div>
            <div class="news-content">
                <img src="image/IMG_サンプル.jpg">
                <h3>NEWS TITLE</h3>
                <p>2019.9.28</p>
                <hr>
                <p>記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、</p>
            </div>
            <div class="news-content">
                <img src="image/IMG_サンプル.jpg">
                <h3>NEWS TITLE</h3>
                <p>2019.9.28</p>
                <hr>
                <p>記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、記事の内容、</p>
            </div>
        </div>
    </div>
    
    <div class="reservation">
        <img src="image/59cbc9be42454dd47ebe13c448683a1d.jpg">
        <div class="reservation-section">
            <h2><a id="reservation">ご予約</a></h2>
            <h3>WEB予約</h3>
            <button type="button" onclick="location.href='reservation'">WEBで予約する</button>
            <h3>電話予約</h3>
            <button type="button" onclick="location.href='tel:03-1234-5678'">03-1234-5678</button>
        
            <p>
                ※当日のご予約はお電話でのみ承ります。
                <br>（受付時間：9:00 - 17:00）
                <br><br>
                ※施術中は電話対応が出来ない事がありますので、
                ご了承下さい。
                <br><br>
                ※ウェブ予約の際は確認メールをお送りいたします。
            </p>
        </div>
    </div>
    
    <div class="access-section">
        <h2><a id="access">ACCESS</a></h2>
     <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3246.7154816920597!2d139.26981931521186!3d35.53602808022844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
     .1!3m3!1m2!1s0x60190490dad26c33%3A0x715818a80d4096ed!2z44CSMjQzLTAzMDcg56We5aWI5bed55yM5oSb55Sy6YOh5oSb5bed55S65Y2K5Y6f77yS77yT77yZ77yV4oiS77yR!5e0!3m2!1sja!2sjp!4v
     1569809892061!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <div class="access-information">
            <div class="information-detail">
                <h4>【定休日】</h4>
                <p>　毎週火曜日</p>
                <h4>【営業時間】</h4>
                <p>　AM9:00～PM6:00</p>
                <hr>
                <p>※店舗横に駐車スペースが2台あります。</p>
            </div>
        </div>
    </div>
    
    <div class="menu-section">
        <h2><a id="menu">MENU</a></h2>
        <table>
            <tr>
                <td>一般カット</td><td>￥4000円</td>
            </tr>
            <tr>
                <td>高校生カット</td><td>￥3500円</td>
            </tr>
            <tr>
                <td>カラーリング</td><td>￥3000円</td>
            </tr>
            <tr>
                <td>ストレートパーマ</td><td>￥8000円</td>
            </tr>
        </table>
        <h3>組み合わせや料金の詳細についてはこちらから</h3>
        <button type="button" onclick="location.href='#'">WEBで予約する</button>
    </div>
    
    <div class="stylist-section">
        <div class="icon">
            <img src="image/IMG_6108.正方形.jpg">
        </div>
        <div class="side-text">
            <h2>STAFF</h2>
            <h4>内藤 啓太【keita naito】</h4>
            <p>コメント、コメント、コメント、コメント、コメント、コメント、コメント、コメント、コメント、コメント、コメント、コメント、コメント、コメント、コメント、コメント、</p>
        </div>
    </div>
@endsection