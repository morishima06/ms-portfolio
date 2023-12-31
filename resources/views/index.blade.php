<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume - Start Bootstrap Theme</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" b integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- フロートメニュー -->
    <div class="floating_menu">
        <div class="main_menu">
            <ul>
                <div class="menu_content">
                    <a href="">
                        <li class="main_list">トップ</li>
                        <li class="sub_list">top</li>
                    </a>
                </div>
                <div>
                    <a href="">

                        <li class="main_list">私について</li>
                        <li class="sub_list">about</li>
                    </a>

                </div>
                <div>
                    <a href="">

                        <li class="main_list">スキル</li>
                        <li class="sub_list">skill</li>
                    </a>

                </div>
                <div>
                    <a href="">

                        <li class="main_list">作品</li>
                        <li class="sub_list">work</li>
                    </a>

                </div>
                <div>
                    <a href="">

                        <li class="main_list">お問い合わせ</li>
                        <li class="sub_list">contact</li>
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
        <section class="section_top" id="about">
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
                    <p>神奈川在住。個人事業主としてアパレル販売をしており、活動する中でアパレル版
                        価格.comという<strong>LYST</strong>という海外のサイトに出会い、日本向けのサイトして作成してみたいと思い
                        プログラミングを学習,作品の制作に至る。また、勉強する中でプログラミングの面白さに
                        気付き現在プログラマーを目指し転職活動を決意。
                    </p>
                </div>

                <video autoplay loop controls width="400px" src="storage/ttt.mov">
                </video>


                <div class="career_item">
                    <p class="career_title">学歴</p>
                    <div class="career_content">
                        <div class="career_content_in">
                            <p>日本大学 法学部 法律学科</p>
                            <p>UKGトータルクリエイティブスクール</p>
                        </div>
                        <div class="carrer_month">
                            <p>2016年2月〜2018年6月</p>
                            <p>2016年2月〜2018年6月</p>
                        </div>
                    </div>
                </div>
                <div class="career_item">
                    <p class="career_title">経歴</p>
                    <div class="career_content">
                        <div class="career_content_in">
                            <p>アニメーション制作/制作進行</p>
                            <p>web制作/webデザイナー,コーダー</p>
                            <p>個人事業主開業/アパレル販売</p>
                        </div>
                        <div class="carrer_month">
                            <p>2016年2月〜2018年6月</p>
                            <p>2016年2月〜2018年6月</p>
                            <p>2016年2月〜2018年6月</p>
                        </div>
                    </div>
                </div>

        </section>
        <hr />
        <!-- スキル-->
        <section class="section_content" id="education">
            <div class="skill">
                <h1 class="content_title">スキル</h1>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-0">
                    <div class="skill_top">
                        <div class="">
                            <div class="skill_item ">
                                <h2 class="skill_title">言語</h2>
                                <ul class="skill_list_item">
                                    <li class="skill_list">Html</li>
                                    <li class="skill_list">Css</li>
                                    <li class="skill_list">Php</li>
                                    <li class="skill_list">Javascript</li>
                                    <li class="skill_list">Python</li>
                                </ul>
                            </div>
                            <div class="skill_item">
                                <h2 class="skill_title">フレームワーク</h2>
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


                        <h2 class="study_title">学習内容/できること</h2>
                        <div class="study_item">
                            <div class="study_subject">
                                <h3>javascript</h3>
                            </div>
                            <div>
                                <div>
                                    <p>es2015<br>
                                        vanila jsでの基本的なDOM操作<br>

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
                                <h3>css</h3>
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
                                <h3>python</h3>
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
                                <h3>laravel</h3>
                            </div>
                            <div>
                                <div>
                                    <p>crud操作<br>
                                        laravel ui/laravel breeze<br>
                                        Inertia.js<br>
                                        laravel6,8<br>
                                        laravel mix
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_subject">
                                <h3>react</h3>
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
                                        git hub<br>
                                        mysql<br>
                                        mailtrap<br>
                                        docker/dockercompose<br>
                                        aws<br>
                                        npm<br>
                                        linux<br>
                                        stripe.api<br>
                                        vite<br>
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
                <div class="work_content1">
                    <div class="content1">
                        <img src="{{asset('img/portfolio1.png')}}" alt="">
                    </div>
                    <h3>ポートフォリオサイト</h3>
                </div>

                <div class="work_content2">
                    <div class="content2">
                        <img src="{{asset('img/search.png')}}" alt="">
                    </div>
                    <h3>Ecサイト</h3>
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