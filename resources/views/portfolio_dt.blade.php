<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" href="{{asset('/css/dt.css')}}">
</head>

<body>
    <div class="wrapper">
        <h1> ポートフォリオサイト</h1>
        <div class="horizontal"></div>
        <a href="https://sm-portfolio.net/" target="_blank">
            <img width="500" src="{{asset('img/portfolio1.png')}}" alt="">
        </a>

        <p>
            HP:<a href="https://sm-portfolio.net/" target="_blank">https://sm-portfolio.net/</a>
        </p>
        <p>
            Git hub:<a href="https://github.com/morishima06/ms-portfolio" target="_blank">https://github.com/morishima06/ms-portfolio</a>
        </p>

        <h1> 使用環境</h1>
        <div class="horizontal"></div>
        <li>PHP8.08</li>
        <li>Laravel 8.83.23</li>
        <li> Javascript(jquery)</li>
        <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- ajax</li>
        <li> sass(css)</li>
        <li>webpack/laravel mix(ビルドツール)</li>

        <li>heroku</li>
        <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- お名前.com(DNS)</li>
        <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- cloudFlare(ssl)</li>

        <h2>インフラ構成</h2>
        <p>
            <strong>開発環境</strong><br>
            Laravel/Mysql/Mamp(apache)<br>
            ↓<br>
            github<br>
            ↓<br>
            <strong>本番環境</strong><br>
            Laravel/Mysql<br>
            Aws(apache)
        </p>


        <h1>制作サイト一覧</h1>
        <div class="horizontal"></div>
        <li><a href="https://search-shops.com/" target="_blank">search(Ecサイト)</a></li>
        <li><a href="https://location-shops.com/" target="_blank">location(アパレルショップ検索サイト)</a></li>
        <h1>機能一覧</h1>
        <div class="horizontal"></div>
        <li>お問い合わせフォーム</li>
        <h2>主な機能</h2>

        <p>
            初期はバックエンドでバリデーションしていましたが入力フォームにてjqueryにてバリデーションしてます。<br>
            入力がなければメッセージが発生します。
        </p>
        <div class="movie">
            <a href="https://gyazo.com/685fc5c0d855a22e45b460d6f84e3365"><img src="https://i.gyazo.com/685fc5c0d855a22e45b460d6f84e3365.gif" alt="Image from Gyazo" width="500" /></a>
        </div>
        <h3>送信確認画面</h3>
        <p>
            メールの送信はajaxにて送信しております。<br>
            最後に送信完了のメッセージの表示となります。
        </p>
        <div class="movie">
            <a href="https://gyazo.com/488acec3e6904aaa409ee27c4b72b11d"><img src="https://i.gyazo.com/488acec3e6904aaa409ee27c4b72b11d.gif" alt="Image from Gyazo" width="500" /></a>
        </div>
        <div class="flex">
            <div>
                <h3>自動送信メール</h3>
                <p>
                    送信者に自動メールを送っています。
                </p>
                <div class="movie">
                    <img width="500" src="{{asset('img/portfolio_screen_mail1.png')}}" alt="" style="width: 300px;">
                </div>
            </div>
            <div>
                <h3>受信メール</h3>
                <p>お問い合わせメールになります。</p>
                <div class="movie">
                    <img width="500" src="{{asset('img/portfolio_screen_mail2.png')}}" alt="" style="width: 300px;">
                </div>
            </div>
        </div>
        <h1> 総評</h1>
        <div class="horizontal"></div>
        <h2>感想</h2>
        <p>
            HerokuでデプロイしていますがEcoプランの関係でサーバーが30分アクセスがないとサーバーが停止して不便かつ、ssl化もCloudFlareでやっており料金に対してコスパが悪く、今後ためしにリリースする際は違うサーバーを選択肢にいれたいなと思います。<br>
            ただAwsみたいに柔軟性はないですが、やはりデプロイはすごく楽だなと感じました。
        </p>
    </div>
</body>