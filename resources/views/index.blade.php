<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shunya-Morihima-Portfolio</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" b integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- フロートメニュー -->
    <div class="floating_menu">
        <div class="main_menu">
            <ul>
                <div class="menu_content">
                    <a class="floating_link" href="#top">
                        <li class="main_list">
                            トップ <br>
                            <span class="sub_list">top</span>
                        </li>
                    </a>
                </div>
                <div class="menu_content">
                    <a class="floating_link" href="#experience">
                        <li class="main_list">
                            私について
                            <br><span class="sub_list">about</span>
                        </li>
                    </a>
                </div>
                <div class="menu_content">
                    <a class="floating_link" href="#skill">
                        <li class="main_list">
                            スキル
                            <br><span class="sub_list">skill</span>
                        </li>
                    </a>
                </div>
                <div class="menu_content">
                    <a class="floating_link" href="#work">
                        <li class="main_list">
                            作品
                            <br><span class="sub_list">work</span>
                        </li>
                    </a>
                </div>
                <div class="menu_content">
                    <a class="floating_link" href="#contact">
                        <li class="main_list">
                            お問い合わせ
                            <br><span class="sub_list">contact</span>
                        </li>
                    </a>
                </div>
            </ul>
        </div>
    </div>
    <div class="nav_button">
        <span class="line1"></span>
        <span class="line2"></span>
        <span class="line3"></span>
    </div>


    <div class="frame">

        <!-- トップ-->
        <section class="section_top" id="top">
            <div class="top_content">
                <h1 class="top_text">PORTFOLIO</h1>
                <div class="underline"></div>
                <h3 class="top_text_name">MORSHIMA SHUNYA</h3>
            </div>
            <div class="triangle"></div>
        </section>
        <hr />

        <!-- 私について-->
        <section class="section_content" id="experience">
            <div class="about">
                <h1 class="content_title">私について</h1>
                <div class="intro">
                    <p>神奈川在住。個人事業主としてアパレル販売する中でとある海外サイトでアパレル版価格.comのようなサイトに
                        出会い、日本向けのサイトして作成してみたいと思いプログラミングを学習,作品の制作に至る。また、勉強する中でより本格的にアプリの開発を行いたいと思い転職活動を決意。
                    </p>
                </div>

                <div class="career_item">
                    <p class="career_title">学歴</p>
                    <div class="career_content">
                        <div class="career_content_in">
                            <p>日本大学 法学部 法律学科</p>
                            <p>UKGトータルクリエイティブスクール</p>
                        </div>
                        <div class="carrer_month">
                            <p>2009年9月〜2014年3月</p>
                            <p>2016年1月〜2016年6月</p>
                        </div>
                    </div>
                </div>
                <div class="career_item">
                    <p class="career_title">経歴</p>
                    <div class="career_content">
                        <div class="career_content_in">
                            <p>アニメーション制作/制作進行</p>
                            <p>web制作/webデザイナー,コーダー</p>
                            <p>個人事業主/アパレル販売</p>
                            <p>エステサロン/受付・管理</p>

                        </div>
                        <div class="carrer_month">
                            <p>2013年9月〜2015年12月</p>
                            <p>2016年7月〜2017年10月</p>
                            <p>2017年11月〜2020年11月</p>
                            <p>2021年2月〜2023年9月</p>
                        </div>
                    </div>
                </div>
        </section>
        <hr />

        <!-- スキル-->
        <section class="section_content" id="skill">
            <div class="skill">
                <h1 class="content_title">スキル</h1>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-0">
                    <div class="skill_top">
                        <div class="">
                            <div class="skill_item ">
                                <h2 class="skill_title"><strong>言語</strong></h2>
                                <ul class="skill_list_item">
                                    <li class="skill_list">Html</li>
                                    <li class="skill_list">Css</li>
                                    <li class="skill_list">Php</li>
                                    <li class="skill_list">Javascript</li>
                                    <li class="skill_list">Python</li>
                                    <li class="skill_list">Mysql</li>
                                </ul>
                            </div>
                            <div class="skill_item">
                                <h2 class="skill_title"><strong>フレームワーク</strong></h2>
                                <ul class="skill_list_item">
                                    <li class="skill_list">React</li>
                                    <li class="skill_list">Jquery</li>
                                    <li class="skill_list">Laravel</li>
                                    <li class="skill_list">Tailwind</li>
                                    <li class="skill_list">Bootstrap</li>
                                    <li class="skill_list">Scss</li>
                                </ul>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_subject">
                                <h3>Javascript</h3>
                            </div>
                            <div>
                                <div>
                                    <p>es2015<br>
                                        DOM操作<br>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_subject">
                                <h3>Jquery</h3>
                            </div>
                            <div>
                                <div>
                                    <p>ajax</p>
                                </div>
                            </div>
                        </div>

                        <div class="study_item">
                            <div class="study_subject">
                                <h3>Css</h3>
                            </div>
                            <div>
                                <div>
                                    <p>cssアニメーション
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_subject">
                                <h3>Python</h3>
                            </div>
                            <div>
                                <div>
                                    <p>スクレイピング <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_subject">
                                <h3>Laravel</h3>
                            </div>
                            <div>
                                <div>
                                    <p>crud操作<br>
                                        laravel ui/laravel breeze<br>
                                        Inertia.js<br>
                                        Alpine.js<br>
                                        laravel6,8<br>
                                        laravel mix
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_subject">
                                <h3>React</h3>
                            </div>
                            <div>
                                <div>
                                    <p>
                                        react hooks<br>
                                        react router<br>
                                        next.js<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_subject">
                                <h3>その他</h3>
                            </div>
                            <div>
                                <div>
                                    <p>
                                        Illustrator<br>
                                        Photoshop<br>
                                        homebrew/nodebrew<br>
                                        mamp<br>
                                        wordpress<br>
                                        github/git hub actions<br>
                                        mailtrap<br>
                                        docker/dockercompose<br>
                                        aws<br>
                                        node.js<br>
                                        linux<br>
                                        heroku<br>
                                        vite/webpack<br>
                                        phpmyadmin/sequel ace<br>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr />

        <!-- 作品-->
        <section class="section_content" id="work">
            <h1 class="content_title">作品</h1>
            <div class="work">

                <div class="work_content">
                    <div class="work_content1">
                        <div class="content1">
                            <a href="https://sm-portfolio.net/"><img src="{{asset('img/portfolio1.png')}}" alt=""></a>
                        </div>
                        <h3>ポートフォリオサイト</h3>
                    </div>
                    <div class="buttons">
                        <button class="button1" type="button" onclick="location.href='https://github.com/morishima06/ms-portfolio'">Git hub</button>
                        <button class="button2" type="button" onclick="location.href='{{route('portfolio_dt')}}'">詳細ページ</button>
                    </div>
                </div>

                <div class="work_content">
                    <div class="work_content2">
                        <div class="content2">
                            <a href="https://search-shops.com/"><img src="{{asset('img/search.png')}}" alt=""></a>
                        </div>
                        <h3>Search</h3>
                    </div>
                    <div class="buttons">
                        <div>
                            <button class="button1" type="button" onclick="location.href='https://github.com/morishima06/search'">Git hub</button>
                            <button class="button2" type="button" onclick="location.href='{{route('search_dt')}}'">詳細ページ</button>
                        </div>
                    </div>
                </div>
                <div class="work_content">
                    <div class="work_content2">
                        <div class="content2">
                            <a href="https://location-shops.com/"><img src="{{asset('img/location.png')}}" alt=""></a>
                        </div>
                        <h3>Location</h3>
                    </div>
                    <div class="buttons">
                        <div>
                            <button class="button1" type="button" onclick="location.href='https://github.com/morishima06/location'">Git hub</button>
                            <button class="button2" type="button" onclick="location.href='{{route('location_dt')}}'">詳細ページ</button>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <hr />
        <div>
        </div>

        <!-- お問い合わせフォーム-->
        <section class="section_content" id="contact">
            <h1 class="content_title">お問い合わせ </h1>

            <form action="" class="form">
                <div class="contact_item1">
                    <div class="contact_item1_name">
                        <label for="">名前</label>
                        <p>
                            <input type="text" name="username" id="contact_name">
                        </p>
                    </div>
                    <div class="contact_item1_mail">
                        <label for="">メールアドレス</label>
                        <p>
                            <input type="text" name="email" id="contact_mail">
                        </p>
                    </div>
                </div>
                <div class="contact_item2">
                    <label for="">メッセージ</label>
                    <p>
                        <textarea id="contact_message" name="message" cols="80" rows="20"></textarea>
                    </p>
                </div>
                <button type="button" class="confirm_btn">入力内容を確認する</button>
            </form>
            <div id="err_textarea"></div>
        </section>
    </div>

    <!-- 送信確認モーダルフォーム  -->
    <div id="modal_section">
        <form id="" method="post" class="modal_form">
            <div class="close_button_section">
                <button type="button" class="close_button">
                    <img class="close_button" src="{{asset('img/close_button.png')}}" alt="">
                </button>
            </div>
            <div class="modal_main_section">
                <h2 class="modal_title">以下内容でよろしければ送信ボタンを押してください。</h2>

                <div class="modal_item">
                    <p class="modal_item_subject"> お名前</p>
                    <p class="modal_name">name</p>
                    <input type="text" class="modal_name" name="modal_name" value="">
                </div>
                <div class="modal_item">
                    <p class="modal_item_subject">email</p>
                    <p class="modal_email">email</p>
                    <input type="text" class="modal_email" name="modal_email" value="">
                </div>
                <div class="modal_item">
                    <p class="modal_item_subject">お問い合わせ内容</p>
                    <p class="modal_message">modal_message</p>
                    <input type="text" class="modal_message" name="modal_message" value="">
                </div>
                <button class="modal_button" type="submit">送信する</button>
            </div>
        </form>
    </div>
</body>
<script src="/js/ajax.js"></script>
<script src="/js/main.js"></script>

</html>