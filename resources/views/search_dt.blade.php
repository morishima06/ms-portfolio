<!DOCTYPE html>
<html lang="ja">

<head>
  <link rel="stylesheet" href="{{asset('/css/dt.css')}}">
</head>

<body>
  <div class="wrapper">
    <h1> search</h1>
    <div class="horizontal"></div>
    <a href="https://search-shops.com/" target="_blank">
      <img src="{{asset('img/search_screen.png')}}" alt="" width="500">
    </a>
    <p>
      HP:
      <a href="https://search-shops.com/" target="_blank">
        https://search-shops.com/
      </a>
    </p>
    <p>
      Git hub:
      <a href="https://github.com/morishima06/search" target="_blank">https://github.com/morishima06/search</a>
    </p>

    <h1>サ-ビス概要</h1>
    <div class=" horizontal">
    </div>
    <p>アパレルEcサイト<br>
    </p>
    <h2>制作理由</h2>
    <p>
      制作当初は価格.comに類似したアパレルショップのスクレイピングアンテナサイト制作して運用しようと考えていました。<br>
      しかし、制作していく中でいくつかの懸念を感じ自身の学習も含めスクレイピングサイトを改変しながらECサイトを制作しました。</p>
    <h1> 使用技術・言語・環境</h1>
    <div class="horizontal"></div>
    <li>PHP8.08</li>
    <li>Laravel8.83.23</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- laravel breeze(ログイン機能)</li>
    <li>tailwind3.1.0(css)</li>
    <li>javascript/jquery/Alpine.js</li>
    <li>Mysql5.7.3.4</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- php myadmin</li>
    <li>Stripe API(決済機能)</li>
    <li>webpack/laravelmix(ビルドツール)</li>
    <li>mail trap(メールテスト)</li>
    <li>AWS</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- VPC(EC2(Amazon Linux2/APACHE)/RDS/S3/ELB/Route53)</li>
    <li>Git hub actions(ci/cd)</li>

    <h2>インフラ構成</h2>
    <p>
      <strong>開発環境</strong><br>
      Laravel/Mysql<br>
      Mamp(apache)<br>
      ↓<br>
      github/github actions(デプロイ)<br>
      ↓<br>
      <strong>本番環境</strong><br>
      Laravel/Mysql<br>
      Aws(apache)
    </p>

    <h1> 機能一覧</h1>
    <div class="horizontal"></div>
    <li>キーワード検索</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- 商品絞り込み</li>
    <li>会員登録機能</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- メール認証会員登録</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- パスワード再発行</li>
    <li>商品出品、登録、削除</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- マウスオーバー画像アップロード</li>
    <li>カート機能(session管理)</li>
    <li>決済機能(stripe Api)</li>
    <li>お問合せフォーム</li>
    <li>loading画面アニメーション</li>
    <li>レスポンシブ対応</li>

    <h2>主な機能</h2>
    <h3>1.トップカテゴリーSwiperスライダ-</h3>
    <p>
      トップのカテゴリーをライブラリーswiper.jsにてスライダーにて表示しています。<br>
      横幅が狭くなった時だけスライダーでの表示のレスポンシブ使用にしています。
    </p>
    <a href="https://gyazo.com/72616b1cb257265bbe06f32ff8ece0eb"><img src="https://i.gyazo.com/72616b1cb257265bbe06f32ff8ece0eb.gif" alt="Image from Gyazo" width="500" /></a>
    <h3>2.ドラッグ＆ドロップでの画像表示、登録</h3>
    <p>
      ドラッグ＆ドロップにて画像表示してフォームにて登録する仕様になります。<br>
      また、クリックでも表示するようにしています。
    </p>
    <p>
    <h4>ドラッグ＆ドロップで表示</h4>
    </p>
    <a href="https://gyazo.com/d70ea05d1f608f35dffe235bd62b3a24"><img src="https://i.gyazo.com/d70ea05d1f608f35dffe235bd62b3a24.gif" alt="Image from Gyazo" width="500" /></a>
    <h4> クリックで表示
    </h4>
    <a href="https://gyazo.com/a4b039cc9af8313e6679faea524189db"><img src="https://i.gyazo.com/a4b039cc9af8313e6679faea524189db.gif" alt="Image from Gyazo" width="500" /></a>
    <h3>3出品中の商品削除</h3>
    <a href="https://gyazo.com/6b335fc5dbd9733ae52f69c234394a6a"><img src="https://i.gyazo.com/6b335fc5dbd9733ae52f69c234394a6a.gif" alt="Image from Gyazo" width="500" /></a>
    <h3>4.StripeAPIでの決済機能</h3>
    <div>
      <h4>カート画面</h4>
      <p>ajaxを使ってカート商品の追加したり、減らしたりしています。<br>
        カートアイコンの数字も変化し,商品合計価格も変動するようにしています。
        また、カート情報はsessionで管理させています。
      </p>
      <a href="https://gyazo.com/df6a22c20b57b5b159641930217b0629"><img src="https://i.gyazo.com/df6a22c20b57b5b159641930217b0629.gif" alt="Image from Gyazo" width="500" /></a>
    </div>
    <div>
      <h4>決済確認画面</h4>
      <p>
        決済確認画面になります。<br>
        配送先も変更できます。
      </p>
      <a href="https://gyazo.com/0b637f8acb37a3f14f9c21a86cceda3a"><img src="https://i.gyazo.com/0b637f8acb37a3f14f9c21a86cceda3a.gif" alt="Image from Gyazo" width="500" /></a>

    </div>
    <div>
      <h4>決済画面</h4>
      <p>StripeAPIで決済してます<br>
        TESTモードのため実際には決済はされてませんが決済が終わると
        決済確認画面の表示となります。
      </p>
      <a href="https://gyazo.com/1b275523c302277fece4bca2329c4a9a"><img src="https://i.gyazo.com/1b275523c302277fece4bca2329c4a9a.gif" alt="Image from Gyazo" width="500" /></a>
    </div>
    <div>
      <h4>Stripe管理画面</h4>
      <p>Stripeサイトでも決済完了が確認されました</p>
      <img src="{{asset('img/search_stripe_screen.png')}}" alt="" width="500">
    </div>


    <h1> ER図</h1>
    <div class="horizontal"></div>

    <img src="https://github.com/morishima06/search/assets/91010416/bcd65dc9-ee06-48c9-8c39-f4dbd4e9d147" alt="">
    <h1>総評</h1>
    <div class="horizontal"></div>
    <h2>感想</h2>

    <p>
      とにかく完成させることを目的としていたため、コードがかなり雑な作りになってしまったと思います。<br>
      動いてはいますが、FatControllerになってしまっていたり,N+1,テーブル正規化といった保守、パフォーマンスの面で所々抜け落ちてるとある程度知識がついた現在では感じます。<br>
      結果論ですが、Blade構文ではなくReact,Vueあたりでフロントを作った方が後々勉強してるので時間効率が良かったなと思いますし、
      デザインを意識して作成してないため、テンプレートを流し込んだ方が時間効率良かったなと感じました。
    </p>

    <h2>今後、実装したいこと</h2>
    <h3>会員登録機能の充実</h3>
    <p>
      ワンタイムパスワードでの会員登録、マルチ認証を実装したいなと思います。<br>
      また、laravel BreezeではなくJet streamもしくは独自で機能を作っていきたいと思います。
    </p>
    <h3>カートのロック機能</h3>
    <p>
      カートにロックを付けて商品購入のバッティング防止策を実装したいと思います。
    </p>
  </div>
</body>