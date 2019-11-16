@extends('layouts.home')

@section('title', 'Beauty salon')

@section('content')
    <img class="main-mobile-image" src="image/main_mobile_image.jpg" alt="スマホ用メイン画像">
    <img class="main-image" src="image/main.jpg" alt="メイン画像">
    <div class="news-wrapper">
        <h2><a id="news">NEWS</a></h2>
        <div class="news-contents">
            @foreach ($posts as $news)
            <div class="news-content">
                <a href="{{ action('BrowseController@browse', ['id' => $news->id]) }}">
                    <img src="{{ asset('storage/image/' . $news->image_path) }}" alt="ニュース画像">
                    <h3>{{ $news->title }}</h3>
                    <p>{{ $news->updated_at->format('Y/m/d') }}</p>
                    <hr>
                    <p>{{ $news->body }}</p>
                </a>
            </div>
            @endforeach    
        </div>
    </div>
    
    <div class="reservation">
        <img src="image/reservate_image.jpg" alt="予約画像">
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
        <div class="menu-items">
            
            <table class="cut-menu">
                <tr>
                    <td>一般カット</td><td>￥4000円</td>
                </tr>
                <tr>
                    <td>高校生カット</td><td>￥3500円</td>
                </tr>
                <tr>
                    <td>中学生カット</td><td>￥3000円</td>
                </tr>
                <tr>
                    <td>ストレートパーマ</td><td>￥2000円</td>
                </tr>
            </table>
            <table class="perma-menu">
                
                <tr>
                    <td>ストレートパーマ</td><td>￥4000円</td>
                </tr>
                <tr>
                    <td>ツイストパーマ</td><td>￥3500円</td>
                </tr>
                <tr>
                    <td>デジタルパーマ</td><td>￥3000円</td>
                </tr>
                <tr>
                    <td>ナチュラルパーマ</td><td>￥8000円</td>
                </tr>
            </table>
        </div>
        <h3>組み合わせや料金の詳細についてはこちらから</h3>
        <button type="button" onclick="location.href='#'">WEBで予約する</button>
    </div>
    
    <div class="stylist-section">
        <div class="icon">
            <img src="image/IMG_6108.正方形.jpg" alt="スタッフ画像">
        </div>
        <div class="side-text">
            <h2>STAFF</h2>
            <h4>内藤 啓太【keita naito】</h4>
            <p>正確なカットでお手入れしやすいデザインを作ります。お客様と接する中で、1人1人に合ったスタイルをご提案させて頂きます。
            そして、1人でも多くのお客様を笑顔にしていけたらと思っております。何かになる点や、ご要望があれば、お気軽にお問い合わせ下さい。
    </div>
@endsection