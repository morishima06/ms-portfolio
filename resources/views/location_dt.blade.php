<!DOCTYPE html>
<html lang="ja">

<head>
  <link rel="stylesheet" href="{{asset('/css/dt.css')}}">
</head>

<body>
  <div class="wrapper">
    <h1>LOCATION</h1>
    <div class="horizontal"></div>
    <a href="https://location-shops.com/" target="_blank">
      <img src="https://sm-portfolio-s3.s3.ap-northeast-1.amazonaws.com/location_screen.png" alt="" width="500">
    </a>
    <p>
      HP:
      <a href="https://location-shops.com/" target="_blank" rel="noopener noreferrer">
        https://location-shops.com/
      </a>
    </p>
    <p>
      Git hub:<a href="https://github.com/morishima06/location?tab=readme-ov-file" target="_blank">https://github.com/morishima06/location?tab=readme-ov-file</a>
    </p>

    <h1>サ-ビス概要</h1>
    <div class=" horizontal">
    </div>
    <p>アパレルショップ検索アプリになります。</p>
    <h3>制作目的</h3>
    店舗を探す際にgoogleやショップサイトで住所情報を得ることができますが、
    一括して調べられるようにしたい、そこに行き着くまでの無駄な工程を省けたらと思い作成しました。<br>
    また、後々運用でき,個人的に多少なり知見があり、ごくありふれてるサービスで需要がありそうなものを考えアパレルショップ検索アプリにしました。

    <h3>参考サイト</h3>
    <p>UI,デザインを一部参考にさせてもらいました。</p>
    <li>
      <a href="https://shop.adidas.jp/store_locator/" target="_blank" rel="noopener noreferrer">ADIDAS店舗情報</a>
    </li>
    <li>
      <a href="https://www.lacoste.jp/storefinder" target="_blank" rel="noopener noreferrer">LACOSTE店舗情報</a>
    </li>
    <li>
      <a href="https://tabelog.com/" target="_blank" rel="noopener noreferrer">食べログ</a>..etc
    </li>

    <h1>使用技術・言語・環境</h1>
    <div class="horizontal"></div>
    <li>React18.2</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- atomic design</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- eslint</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- prettier</li>
    <li>PHP8.2.15</li>
    <li>Laravel9.52.7</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- laravel breeze(ログイン機能)</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- laravel query detector(n+1検知)</li>
    <li>Inertia.js</li>
    <li>tailwind css3.2.1</li>
    <li>Mysql</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- Sequel Ace(sql管理ツール)</li>
    <li>Docker/Docker Compose</li>
    <li>Vite(ビルドツール)</li>
    <li>お名前.com(DNS)</li>
    <li>Git hub actions(ci/cd)</li>
    <li>Aws</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- vpc(EC2(Amazon Linux2/NGINX)/ELB/Route53/RDS)</li>

    <h2>インフラ構成</h2>
    <p>
      <strong>開発環境</strong><br>
      React/Laravel/Mysql/Docker/Docker Compose(NGINX)<br>
      ↓<br>
      github/github actions(ビルド＋デプロイ)<br>
      ↓<br>
      <strong>本番環境</strong><br>
      React/Laravel/Mysql<br>
      Aws(NGINX)
    </p>

    <h1>機能一覧</h1>
    <div class="horizontal"></div>

    <li>検索機能</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- キーワード検索</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- キーワード履歴表示</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- ブランド検索</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- ブランド一覧表示</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- エリア検索</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- エリア一覧表示</li>
    <li>Google Map</li>
    <li class="list_none">&nbsp;&nbsp;&nbsp;&nbsp;- 店舗情報をMapに表示</li>
    <li>ログイン機能</li>
    <li>店舗情報の登録、編集</li>
    <li>ブランド、エリアの追加</li>
    <li>レスポンシブ対応</li>
    <h2>主な機能</h2>
    <h3>1.cookieを使っての検索機能</h3>
    <p>React Cookieにて検索する際にて履歴検索機能を付けています。<br>
      また、cookieの削除も出来るようにしてます。
    </p>
    <div class="movie">
      <a href="https://gyazo.com/3655dd64d8694174eec22e2c55a966f8"><img src="https://i.gyazo.com/3655dd64d8694174eec22e2c55a966f8.gif" alt="Image from Gyazo" width="500" /></a>
    </div>
    <h3>2.GoogleMapでの店舗情報の表示</h3>
    <p>
      Google Map APIを使ってマーカーを連動して表示。<br>
      選択した店舗に合わせてマーカーとマップの座標も移動させています。

    </p>
    <div class="movie flex">
      <div style="margin-right: 20px;">
        <p>PC版</p>
        <a href="https://gyazo.com/191121340319a2c50443e267214bdeb1"><img src="https://i.gyazo.com/191121340319a2c50443e267214bdeb1.gif" alt="Image from Gyazo" width="500" /></a>
      </div>
      <div>
        <p>スマホ版</p>
        <a href="https://gyazo.com/c4f89fa343ae93c67dcc84e04c796746"><img src="https://i.gyazo.com/c4f89fa343ae93c67dcc84e04c796746.gif" alt="Image from Gyazo" height="245" /></a>
      </div>
    </div>

    <h3>3.fetchAPIでの店舗情報登録</h3>
    <p>fetchで郵便番号検索APIを通信させてフォームに住所を反映させてます<br>
      また、同時に検索した県名のエリアをデータベースから、新しく追加する県名のエリアコードを用意するもように連動させています。

    </p>
    <div class="movie">
      <a href="https://gyazo.com/c28e298edd43689544bd7371159d56ae"><img src="https://i.gyazo.com/c28e298edd43689544bd7371159d56ae.gif" alt="Image from Gyazo" width="500" /></a>
    </div>
    <p>fetchでエリア登録して新しく追加したエリアも反映させてます</p>
    <div class="movie"><a href="https://gyazo.com/3e134804f35951f9434fbe42d774a10b"><img src="https://i.gyazo.com/3e134804f35951f9434fbe42d774a10b.gif" alt="Image from Gyazo" width="500" /></a>
    </div>

    <h1>ER図</h1>
    <div class="horizontal"></div>
    <p style="margin-bottom: 10px;">Shopsテーブルを軸に正規化させて構成しました。
    </p>
    <div>

      <img src="https://github.com/morishima06/brand-search/assets/91010416/1940c920-15ff-4633-8f4f-cf9579b79e2f
" alt="">
    </div>
    <h1>総評</h1>
    <div class="horizontal"></div>

    <h2>感想</h2>
    <p>
      作り終えて思ったのが設計や基礎部分の理解が全てだど実感じました。<br>
      作りたいものに対してどのような技術,データベースやデザインの設計、フォルダ構成といったものを初期段階で選定していくことがとても重要であり、導入して変更してを繰り返しながら作っていたため途中から噛み合わなくなり、無駄な工程、やり直しが発生してしまいました。<br>
      また、基礎部分の理解に関してはフレームワークを使っているためネットの記事をコピペすれば動かすことは出来ますが、
      独自で機能を作るには基礎の部分、構造の理解ないと思ったように動かないなと思わされました。<br>
      他アプリと同様ですがを完成させるのを優先したためデザインをもっとしっかりとしたものに出来なかったのが少々心残りです。

    <h2>今後の課題</h2>
    <h3>typescriptの導入</h3>
    時間的に学習コストを渋り導入を見送ってしまったが型の定義付は必須だと痛感しました。
    <h3>不要なレンダリングを失くす</h3>
    <p>一部使ってますがusememo、usecallbackを使いを不用なレンダリングをさげることによって<br>
      パフォーマンスをあげていきたいなと思います。<br>
    </p>
    <h3>ci/cdのコンテナデプロイ...etc</h3>
    <p>
      本番環境は手動で環境構築しためコンテナデプロイに変更させたいと思います。<br>
      また,CI/CDですが自動でビルドとデプロイをさせているだけでGit hub actionsのOS内でテストからビルドすることができていないのでコンテナデプロイ含めて実装したいと思います。
    </p>

    <h2>制作を終えて</h2>
    <p>
      webデザイン制作会社に勤めていた経験もあり、そこまで苦労しないと思ってましたが<br>
      働きながら制作していく中でとにかく学ぶことが多すぎて難しいと思うより時間が全く足りないと感じたのが一番の感想です。<br>
      Awsを導入した際にはインフラの知識も多少なりとも必要になりサブネットマスク、CIDER,パプリックIP..etc<br>
      を理解していくのにも時間が取られ本当に終わりが見えないなと思いました。<br>
      また、ある程度分かっていたことですが技術の流行りが本当に早いなと思います。<br>
      制作会社に入社する辺りではjqueryがそれなりに使われてましたし、Angularがjsのフレームワーク<br>
      の認識としてありましたが、もはやreact,vueに完全に移り変わってるのかなと思っています。<br>
      ビルドツールもwebpackを勉強しましたがviteの方がだいぶ早いということで勉強し直しました。<br>
      あと、感覚で作るのではなく最低限構造をしっかりと理解したうえで作るのが大事なのかなと思います。<br>
      ログインならsession,cooikeへの理解,reactならライフサイクルの理解とかではないでしょうか。<br>
      もともとコードを書くことが苦ではなかったため、苦楽を感じながら制作、学習をここまでやってこれてよかったなと思います。<br><br>
      ここまで閲覧ありがとうございました。<br>
    </p>

    </p>
  </div>
</body>