<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Parallax Demo</title>

    <link href="Parallax/css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="Parallax/css/chrome.css" rel="stylesheet" type="text/css"/>
    <link href="css/demo1.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery.jgrowl.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.arcticmodal.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
  <script src="js/html5.js"></script>
    <![endif]-->

    <script type="text/javascript" src="Parallax/js/jquery-1.7.1.js"></script>
    <script type="text/javascript" src="Parallax/js/simpslider-dev.js"></script>
    <script type="text/javascript" src="feedback/js/feedback.js"></script>
    <script type="text/javascript" src="feedback/js/jquery.arcticmodal.js"></script>
    <script type="text/javascript" src="feedback/js/jquery.jgrowl.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', '.modal_btn', function () {
                $('#small-modal').arcticmodal();
            });
        });
    </script>

    <script type="text/javascript" src="share42/share42.js"></script>
    <script type="text/javascript" src="http://vk.com/js/api/openapi.js?115"></script>
    <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {mode:0, width:"245", height:"340", color1:'FFFFFF', color2:'2B587A', color3:'5B7FA6'}, 20003922);
    </script>
    <script type="text/javascript">
        VK.Widgets.Subscribe("vk_subscribe", {mode:2, soft:1}, 145030);
    </script>
    <script type="text/javascript" src="Parallax/js/side-nav.js"></script>
    <script type="text/javascript" src="Parallax/js/backgrounds.js"></script>
    <script type="text/javascript" src="Parallax/js/kinetics.js"></script>
    <script type="text/javascript" src="Parallax/js/custom.js"></script>
    <script type="text/javascript" src="Parallax/js/parallax.js"></script>

</head>
<body>

<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "http://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- this is to make the page's vertical scrollbar appear the correct height -->

<div id="mock-scroller"></div>
<ul id="nav"></ul>
<div id="content">


<section id="story-header">
    <img class="bg" src="images/slide1/back.png" anim-detached="true" style="width:100%" height="100%"/>

    <div class="story">

        <div id="main-menu">
            <div class="inner">
                <div id="logo"><a href="#">
                    <img class="logoimg" src="images/slide1/logo.png" alt="Internet marketing company"
                         title="Internet marketing company"></a>
                </div>
                <div class="aim">СОЗДАНИЕ УНИКАЛЬНЫХ LANDING PAGE</div>
                <div class="phone">

                    <div class="bigphone">+7(495)665-07-08</div>
                    <div class="backcall"><span class="btn btn-block btn-large btn-success modal_btn">Заказать обратный звонок</span>
                    </div>

                </div>
            </div>
            <img class="topImg" src="images/slide1/main-menu.png" alt=""/>
        </div>
        <div id="slogan"><img src="images/slide1/slogan.png" alt="" title=""/></div>
        <div class="plane"><img src="images/slide1/plane.png" alt="" title=""/></div>
        <div class="man-glass">
            <div class="parashut"><img src="images/slide1/p2.png" alt="" title=""/></div>
            <div class="glass"><img src="images/slide1/glass.png" alt="" title=""/></div>
        </div>
        <div class="text12">
            <p>
                Профессиональная разработка уникальных Landing Page
                проработка и ведение рекламных компаний,
                поисковое продвижение и информационно-техническая
                поддержка.
            </p>

            <div id="zajavka">
                <form class="zajavka">
                    <span class="btn btn-block btn-large btn-success modal_btn"><input type="button"
                                                                                       value="Сделать заявку"/></span>
                </form>
            </div>

        </div>
        <div style="display:none;">
            <!-- Формы в модальных окнах -->
            <div class="box-modal" id="small-modal">
                <div class="toppopup"><img src="images/pop-up/top.png" alt=""/></div>
                <div class="modal-close arcticmodal-close"></div>
                <div class="modal-content-box">
                    <legend>ОФОРМЛЕНИЕ ЗАЯВКИ</legend>
                    <form action="" method="get" name="form-1">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user">Ф.И.О. контактного лица:<span
                                    class="red"> *</span></i></span>
                            <input class="input-medium focused" name="name" type="text" placeholder="">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-book">Телефон: <span class="red"> *</span></i></span>
                            <input class="input-medium focused" name="tell" type="text" placeholder="">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-mail">E-mail:<span class="red"> *</span></i></span>
                            <input class="input-medium focused" name="mail" type="text" placeholder="">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-tarif">Интересующий тариф:</i></span>
                            <select class="span2" name="select">
                                <option value="">Выбрать по списку</option>
                                <option value="select-1">Пакет Lite</option>
                                <option value="select-2">Пакет Standart</option>
                                <option value="select-3">Пакет Prestige</option>
                                <option value="select-4">Пакет PREMIUM</option>
                            </select>
                        </div>
                        <div class="input-prepend1">
                            <span class="add-on"><i class="icon-add">Дополнительно:</i></span>
                            <textarea class="input-lage focused" name="text" placeholder=""></textarea>
                        </div>
                        <div class="lablemod"><span class="red"> *</span> - Заполнить обязательно</div>
                        <div id="captcha_block">
                        <img src="captcha/captcha.php" id="captcha"/><br/>
                        <a href="#" onclick="
                        document.getElementById('captcha').src='captcha/captcha.php?'+Math.random();
                          document.getElementById('captcha-form').focus();"
                           id="change-image">Not readable? Change text.</a><br/><br/>
                        <b>Human Test</b><br/>
                        <input type="text" name="captcha" id="captcha-form"/><br/>
                            <?php
                          session_start();
                          var_dump($_SESSION); ?>
                      </div>
                        <input class="feedback btn btn-block btn-success" name="send" type="button"
                               value="Отправить заявку">
                    </form>
                </div>
                <div class="bottompopup"><img src="images/pop-up/bottom.png" alt=""/></div>
            </div>
            <!-- // Формы в модальных окнах -->
        </div>
    </div>
    <div class="footerslide1">
        <a href="#intel"><span>Листать далее</span></a>

        <div class="bottomheader"><img src="images/slide1/bottom.png" alt="" title=""/></div>
    </div>
</section>


<section id="story-intel" anim-pause="1000">
    <img class="bg" src="images/slide2/bg2.png" anim-detached="true" width="100%" height="80%"/>

    <div class="story">
        <div id="innerintel">
            <div id="text21"><img src="images/slide2/text1.png" alt="" title=""/></div>
            <div id="text22"><img src="images/slide2/text2.png" alt="" title=""/></div>
            <div class="text23">
                <p>
                    ОНИ ПОКА ТОЛЬКО ПОСТИГАЮТ АЗЫ ИЗГОТОВЛЕНИЯ LANDING PAGE, НО УЖЕ ПРАКТИКУЮТ НА ЖИВЫХ КЛИЕНТАХ
                </p>
            </div>
            <div class="text24">
                <p>
                    СЕГОДНЯ ЛЕКГО НАТКНУТЬСЯ НА ТАКИХ "МАСТЕРОВ" И ПОЛУЧИТЬ ДЕЛИТАНСКИ ВЫПОЛНЕННУЮ РАБОТУ, КОТОРАЯ НЕ
                    ПРИНЕСЁТ ОЩУТИМОЙ ПОЛЬЗЫ ВАШЕМУ БИЗНЕСУ...
                </p>
            </div>
            <div id="imageleftarrow2"><img src="images/slide2/leftarrow.png" alt="" title=""/></div>
            <div id="imageleft2"><img src="images/slide2/leftimage.png" alt="" title=""/></div>
            <div class="texttable">
                <div class="text25">
                    <div class="firstpart">
                        <div class="text251">
                            <p>
                                <span>МЫ НЕ ИСКЛЮЧАЕМ,</span>
                            </p>
                        </div>
                        <div class="text252">
                            <p>
                                <span>ЧТО НАИБОЛЕЕ УСПЕШНЫЕ ИЗ НИХ</span>
                            </p>
                        </div>
                    </div>
                    <div class="text251">
                        <p>
                            ЧЕРЕЗ НЕСКОЛЬКО ЛЕТ
                        </p>
                    </div>
                    <div class="text252">
                        <p>
                            СМОГУТ СОСТАВИТЬ НАМ ОТЛИЧНУЮ КОНКУРЕНЦИЮ
                        </p>
                    </div>
                </div>
                <div class="text26">
                    <p>
                        А ПОКА ЭТОГО НЕ ПРОИЗОШЛО, ПРЕДЛАГАЕМ ВАМ ПОДОЙТИ К ВЫБОРУ ИСПОЛНИТЕЛЯ БОЛЕЕ ВЗВЕШЕНО, ЧТОБЫ
                        ПОТОМ НЕ БЫЛО МУЧИТЕЛЬНО БОЛЬНО ЗА ЗРЯ ПОТРАЧЕННЫЕ ДЕНЬГИ
                    </p>
                </div>
            </div>
            <div id="imageright2"><img src="images/slide2/rightimage.png" alt="" title=""/></div>
            <div id="imagerightarrow2"><img src="images/slide2/rightarrow.png" alt="" title=""/></div>
            <div id="text27"><img src="images/slide2/text3.png" alt="" title=""/></div>
            <div id="zajavka2">
                <form class="zajavka22">
                    <span class="btn btn-block btn-large btn-success modal_btn"><input type="button"
                                                                                       value="Сделать заявку"/></span>
                </form>
            </div>
        </div>
    </div>
    <div class="footerslide2">
        <div class="firstarr"><a href="#header"><span>Листать обратно</span></a></div>
        <div class="secondarr"><a href="#william"><span>Листать далее</span></a></div>
    </div>
</section>


<section id="story-william">
    <img class="bg animate" src="images/slide3/bg3.png" anim-detached="true" width="100%" height="80%"/>

    <div class="story">
        <div id="innerwilliam">
            <div id="text31"><img src="images/slide3/text31.png" alt="" title=""/></div>
            <div class="text32">
                <p>
                    Основная задача продающего Landing Page - ЗАХВАТ внимания посетителя и побуждение
                    его к совершению ПОЛЕЗНОГО действия - оставить заявку или позвонить ВАМ...
                </p>
            </div>
            <div class="text33">
                <p>
                    С этой целью мы разработали комплекс специальных мероприятий, которые идеально подходят для
                    выполнения
                    поставленной задачи:
                </p>
            </div>
            <div class="meroprijat">
                <div class="item item0">
                    <div class="item-img"><img src="images/slide3/one.png" alt="" title=""/></div>
                    <div class="item-text"><p>Наши копирайтеры используют
                        <strong>уникальные техники написания
                            продающих текстов</strong>
                        и руководствуются проверенными
                        продающими концепциями.</p></div>
                </div>
                <div class="item item1">
                    <div class="item-img"><img src="images/slide3/two.png" alt="" title=""/></div>
                    <div class="item-text"><p>У нас особая методика <strong>разработки
                        уникальных дизйнов</strong>, способных
                        заинтересовать Вышего
                        потенциального клиента.</p></div>
                </div>
                <div class="item item2">
                    <div class="item-img"><img src="images/slide3/three.png" alt="" title=""/></div>
                    <div class="item-text"><p>Наши программисты используют
                        <strong>уникальный комплекс
                            програмного обеспечения</strong>
                        для создания продающих страниц
                        захвата.</p></div>
                </div>
                <div class="item item3">
                    <div class="item-img"><img src="images/slide3/four.png" alt="" title=""/></div>
                    <div class="item-text"><p>Мы разработали и внедрили
                        собственную <strong>систему
                            контроля качества</strong>
                        Landing Page </p></div>
                </div>
            </div>
            <div class="text34"><img src="images/slide3/text32.png" alt="" title=""/></div>
            <div id="zajavka3">
                <form class="zajavka3">
                    <span class="btn btn-block btn-large btn-success modal_btn"><input type="button"
                                                                                       value="Сделать заявку"/></span>
                </form>
            </div>


        </div>
    </div>
    <div class="footerslide3">
        <div class="firstarr"><a href="#intel"><span>Листать обратно</span></a></div>
        <div class="secondarr"><a href="#bing"><span>Листать далее</span></a></div>
    </div>
</section>


<section id="story-bing">
    <div class="story">
        <div class="innerfour">
            <div class="text41"><img src="images/slide4/text41.png" alt="" title=""/></div>

            <div class="work">
                <div class="row row0">
                    <div class="row-img-circle"><img src="images/slide4/one.png" alt="" title=""/></div>
                    <div class="row-img-arrow"><img src="images/slide4/arrowex.png" alt="" title=""/></div>
                    <div class="elements">
                        <div class="item item0">
                            <div class="item-img"><img src="images/slide4/h1.png" alt="" title=""/></div>
                            <div class="item-num"><p>1</p></div>
                            <div class="item-text"><p><strong>Вы оставляете заявку,</strong> и наш менеджер связывается
                                с вами в течение 30 минут.</p></div>
                        </div>
                        <div class="item item1">
                            <div class="item-img"><img src="images/slide4/h2.png" alt="" title=""/></div>
                            <div class="item-num"><p>2</p></div>
                            <div class="item-text"><p>Мы проводим <strong>комплексное маркетинговое
                                исследование</strong> вашего бизнеса.</p></div>
                        </div>
                        <div class="item item2">
                            <div class="item-img"><img src="images/slide4/h3.png" alt="" title=""/></div>
                            <div class="item-num"><p>3</p></div>
                            <div class="item-text"><p>Разрабатываем <strong>концепцию страницы захвата</strong> для
                                достижения максимальной конверсии.</p></div>
                        </div>
                    </div>
                </div>
                <div class="row row1">
                    <div class="row-img-circle"><img src="images/slide4/two.png" alt="" title=""/></div>
                    <div class="row-img-arrow"><img src="images/slide4/arrowex.png" alt="" title=""/></div>
                    <div class="elements">
                        <div class="item item3">
                            <div class="item-img"><img src="images/slide4/k1.png" alt="" title=""/></div>
                            <div class="item-num"><p>4</p></div>
                            <div class="item-text"><p>Разрабатываем <strong>продающий текст</strong> для Landing Page.
                            </p></div>
                        </div>
                        <div class="item item4">
                            <div class="item-img"><img src="images/slide4/k2.png" alt="" title=""/></div>
                            <div class="item-num"><p>5</p></div>
                            <div class="item-text"><p>Проводим <strong>внутренний аудит</strong> продающего текста. </p>
                            </div>
                        </div>
                        <div class="item item5">
                            <div class="item-img"><img src="images/slide4/k3.png" alt="" title=""/></div>
                            <div class="item-num"><p>6</p></div>
                            <div class="item-text"><p>Разрабатываем <strong>структуру</strong> Landing Page <strong>(прототип
                                страницы)</strong>.</p></div>
                        </div>
                    </div>
                </div>
                <div class="row row2">
                    <div class="row-img-circle"><img src="images/slide4/three.png" alt="" title=""/></div>
                    <div class="row-img-arrow"><img src="images/slide4/arrowex.png" alt="" title=""/></div>
                    <div class="elements">
                        <div class="item item6">
                            <div class="item-img"><img src="images/slide4/f1.png" alt="" title=""/></div>
                            <div class="item-num"><p>7</p></div>
                            <div class="item-text"><p>Разрабатываем <strong>дизайн-макет</strong> для Landing Page.</p>
                            </div>
                        </div>
                        <div class="item item7">
                            <div class="item-img"><img src="images/slide4/f2.png" alt="" title=""/></div>
                            <div class="item-num"><p>8</p></div>
                            <div class="item-text"><p>Проводим <strong>внутренний аудит</strong> дизайна. </p></div>
                        </div>
                        <div class="item item8">
                            <div class="item-img"><img src="images/slide4/f3.png" alt="" title=""/></div>
                            <div class="item-num"><p>9</p></div>
                            <div class="item-text"><p>Проводим <strong>внутренний аудит</strong> на наличие необходимых
                                <strong>продающих триггеров</strong> на странице.</p></div>
                        </div>
                    </div>
                </div>
                <div class="row row3">
                    <div class="row-img-circle"><img src="images/slide4/four.png" alt="" title=""/></div>
                    <div class="row-img-arrow"><img src="images/slide4/arrowlastex.png" alt="" title=""/></div>
                    <div class="elements">
                        <div class="item item9">
                            <div class="item-img"><img src="images/slide4/j1.png" alt="" title=""/></div>
                            <div class="item-num"><p>10</p></div>
                            <div class="item-text"><p><strong>Финальная проверка</strong> Landing Page и запуск проекта.
                            </p></div>
                        </div>
                        <div class="item item10">
                            <div class="item-img"><img src="images/slide4/j2.png" alt="" title=""/></div>
                            <div class="item-num"><p>11</p></div>
                            <div class="item-text"><p><strong>Верстка</strong> страницы захвата, настройка форм и
                                <strong> размещение на хостинге.</strong></p></div>
                        </div>
                        <div class="item item11">
                            <div class="item-img"><img src="images/slide4/j3.png" alt="" title=""/></div>
                            <div class="item-num"><p>12</p></div>
                            <div class="item-text"><p><strong>Презентуем</strong> вам <strong>готовый макет</strong>
                                страницы захвата и <strong>вносим необходимые правки.</strong></p></div>
                        </div>
                    </div>
                    <div class="row-img-key"><img src="images/slide4/key.png" alt="" title=""/></div>
                </div>
            </div>
            <div id="zajavka4">
                <form class="zajavka4">
                    <span class="btn btn-block btn-large btn-success modal_btn"><input type="button"
                                                                                       value="Сделать заявку"/></span>
                </form>
            </div>

        </div>
    </div>
    <div class="footerslide4">
        <div class="firstarr"><a href="#william"><span>Листать обратно</span></a></div>
        <div class="secondarr"><a href="#five"><span>Листать далее</span></a></div>
    </div>
</section>

<section id="story-five">
    <img class="bg" src="images/slide5/bg.png" anim-detached="true" width="100%" height="100%"/>

    <div class="story">
        <div id="innerfive">
            <div class="text51"><img src="images/slide5/text51.png" alt="" title=""/></div>
            <div class="man-img"><img src="images/slide5/man.png" alt="" title=""/></div>
            <div class="get">
                <div class="get-img"><img src="images/slide5/text52.png" alt="" title=""/></div>
                <div class="get-elements">
                    <div class="item item0">
                        <div class="item-img"><img src="images/slide5/one.png" alt="" title=""/></div>
                        <div class="item-text"><p>Качественно новый<br> уровень своего<br> бизнеса</p></div>
                    </div>
                    <div class="item item1">
                        <div class="item-img"><img src="images/slide5/two.png" alt="" title=""/></div>
                        <div class="item-text"><p>Новых,<br> заинтересованных<br> клиентов</p></div>
                    </div>
                    <div class="item item3">
                        <div class="item-img"><img src="images/slide5/three.png" alt="" title=""/></div>
                        <div class="item-text"><p>Сформированную<br> постоянную<br> клиентскую базу</p></div>
                    </div>
                    <div class="item item4">
                        <div class="item-img"><img src="images/slide5/four.png" alt="" title=""/></div>
                        <div class="item-text"><p>Регулярную <br>отчетность о результатах <br>рекламной кампании </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text52"><p>ЗАКАЖИ УНИКАЛЬНЫЙ <br>LANDING PAGE - СТАНЬ ЛИДЕРОМ!</p></div>
            <div id="zajavka5">
                <form class="zajavka5">
                    <span class="btn btn-block btn-large btn-success modal_btn"><input type="button"
                                                                                       value="Сделать заявку"/></span>
                </form>
            </div>

        </div>
    </div>
    <div class="footerslide5">
        <div class="firstarr"><a href="#bing"><span>Листать обратно</span></a></div>
        <div class="secondarr"><a href="#six"><span>Листать далее</span></a></div>
    </div>
</section>

<section id="story-six">
    <img class="bg animate" src="images/slide6/bg6.png" anim-detached="true" width="100%" height="100%"/>

    <div class="story">
        <div id="innersix">
            <div id="text61"><img src="images/slide6/text61.png" alt="" title=""/></div>
            <div id="text62"><p>МЫ ПРЕДЛАГАЕМ ЧЕТЫРЕ ТАРИФНЫХ ПАКЕТА, ОПЛАТА ПОЭТАПНАЯ:</p></div>
            <div class="paket">
                <div class="item item0">
                    <div class="item-titul"><p>ПАКЕТ <span>LIGHT</span></p></div>
                    <div class="item-text1"><p>СТОИМОСТЬ 30 000 РУБ,<br> СРОК 10 ДНЕЙ:</p></div>
                    <div class="item-text2">
                        <ul>
                            <li>- дизайна 1 вариант ;</li>
                            <li>- техподдержка 1 месяц;</li>
                            <li>- поисковая оптимизация;</li>
                            <li>- он-лайн консультант.</li>
                        </ul>
                    </div>
                </div>
                <div class="item item1">
                    <div class="item-titul"><p>ПАКЕТ <span>STANDART</span></p></div>
                    <div class="item-text1"><p>СТОИМОСТЬ 50 000 РУБ,<br> СРОК 10-15 ДНЕЙ:</p></div>
                    <div class="item-text2">
                        <ul>
                            <li>- техподдержка 2 месяца</li>
                            <li>- поисковая оптимизация</li>
                            <li>- он-лайн консультант</li>
                            <li>- 2 варианта дизайна.</li>
                            <li>- разработка точек захвата + Триггеры</li>
                            <li>- оптимизация + копирайтинг</li>
                            <li>- оптимизация + копирайтинг</li>
                            <li>- хостинг и домен в подарок.</li>
                        </ul>
                    </div>
                </div>
                <div class="item item2">
                    <div class="item-titul"><p>ПАКЕТ <span>PRESTIGE</span></p></div>
                    <div class="item-text1"><p>СТОИМОСТЬ 70 000 РУБ,<br> СРОК 15-20 ДНЕЙ:</p></div>
                    <div class="item-text2">
                        <ul>
                            <li>- техподдержка 3 месяца</li>
                            <li>- поисковая оптимизация</li>
                            <li>- он-лайн консультант</li>
                            <li>- 1 вариант эксклюзивного дизайна</li>
                            <li>- разработка структуры и блоков</li>
                            <li>- разработка точек захвата + Триггеры</li>
                            <li>- оптимизация + копирайтинг</li>
                            <li>- установка счетчиков и Метрик</li>
                            <li>- анимация и эффекты</li>
                            <li>- хостинг и домен в подарок.</li>
                        </ul>
                    </div>
                </div>
                <div class="item item3">
                    <div class="item-titul"><p>ПАКЕТ <span>PREMIUM</span></p></div>
                    <div class="item-text1"><p>СТОИМОСТЬ 90 000 РУБ,<br> СРОК 15-20 ДНЕЙ:</p></div>
                    <div class="item-text2">
                        <ul>
                            <li>- техподдержка 6 месяца</li>
                            <li>- поисковая оптимизация</li>
                            <li>- он-лайн консультант</li>
                            <li>- 1 вариант эксклюзивного дизайна</li>
                            <li>- разработка структуры и блоков</li>
                            <li>- разработка точек захвата + Триггеры</li>
                            <li>- оптимизация + копирайтинг</li>
                            <li>- установка счетчиков и Метрик</li>
                            <li>- анимация и эффекты</li>
                            <li>- эффекты Parallax</li>
                            <li>- настройка Яндекс Директ,<br>
                                Гугл Адвордс.
                            </li>
                            <li>- хостинг и домен в подарок.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottompart6">
                <div id="text63"><img src="images/slide6/text62.png" alt="" title=""/></div>
                <div id="img-money"><img src="images/slide6/money.png" alt="" title=""/></div>
            </div>
            <div id="zajavka6">
                <form class="zajavka6">
                    <span class="btn btn-block btn-large btn-success modal_btn"><input type="button"
                                                                                       value="Сделать заявку"/></span>
                </form>
            </div>

        </div>
    </div>
    <div class="footerslide6">
        <div class="firstarr"><a href="#five"><span>Листать обратно</span></a></div>
        <div class="secondarr"><a href="#seven"><span>Листать далее</span></a></div>
    </div>
</section>

<section id="story-seven">
    <img class="bg" src="images/slide7/bg7_2.png" anim-detached="true" width="100%" height="100%"/>

    <div class="story">
        <div id="innerseven">
            <div class="text71"><img src="images/slide7/text71.png" alt="" title=""/></div>
            <div class="text72"><p>КАЖДЫМ НАПРАВЛЕНИЕМ ЗАНИМАЮТСЯ ПРОФЕССИОНАЛЫ СВОЕГО ДЕЛА: ДИЗАЙНОМ - ДИЗАЙНЕРЫ,
                ВЁРСТКОЙ - ВЕРСТАЛЬЩИКИ, РЕКЛАМОЙ - ДИРЕКТОЛОГИ. НИКАКИХ УНИВЕРСАЛЬНЫХ ВСЕМОГУЩИХ ЛЮДЕЙ.</p></div>
            <div class="sliderfone">
                <div class="text73"><img src="images/slide7/text72.png" alt="" title=""/></div>
                <div class="bushback"><img src="images/slide7/backbush.png" alt="" title=""/></div>
                <div id="pre-slider">
                    <ul id="slider-controls">
                        <li class="active">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                        <li>10</li>
                        <li>11</li>
                        <li>12</li>
                        <li>13</li>
                        <li>14</li>
                        <li>15</li>
                        <li>16</li>
                        <li>17</li>
                    </ul>
                </div>
                <div class="monitorfone"><img src="images/slide7/onlymonitor.png" alt="" title=""/></div>
                <div class="simpslider slider-default">
                    <div class="mover">
                        <img src="images/slide7/slide1.png">
                        <img src="images/slide7/slide2.png">
                        <img src="images/slide7/slide1.png">
                    </div>
                </div>
                <div class="bushfront"><img src="images/slide7/frontbush.png" alt="" title=""/></div>
            </div>
            <div class="totalbottomseven">

                <div class="text74"><img src="images/slide7/text73.png" alt="" title=""/></div>
                <div class="bottomseven">
                    <div class="text75"><img src="images/slide7/text74.png" alt="" title=""/></div>
                    <!--<div class="littleman"><img src="images/slide7/smallman.png" alt="" title=""/></div>-->
                    <div id="zajavka7">
                        <form class="zajavka7">
                            <span class="btn btn-block btn-large btn-success modal_btn"><input type="button"
                                                                                               value="Сделать заявку"/></span>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footerslide7">
        <div class="firstarr"><a href="#six"><span>Листать обратно</span></a></div>
        <div class="secondarr"><a href="#foo"><span>Листать далее</span></a></div>
    </div>
    <!--<div class="bottomglass"><img src="images/slide7/totalglass.png" alt="" title=""/></div>-->
</section>


<section id="story-foo" anim-pause="500">
    <!--<img class="bg" src="images/slide8/bg7.png" anim-detached="true" width="100%" height="100%" />-->
    <div class="story">


        <div id="innerfoo">
            <div id="footoppart">
                <div class="text81"><img src="images/slide8/text81.png" alt="" title=""/></div>
                <div id="vk_groups">
                    <div class="hend"><img src="images/slide8/hand.png" alt="" title=""/></div>
                </div>
                <div id="vk_subscribe"></div>

                <div class="text82"><p>Если вы не готовы пока сделать заказ, но в мыслях и<br>
                    перспективе вы хотели бы с нами поработать вступайте</br>
                    в нашу группу, чтобы быть к нам ближе.</p></div>
                <div class="arrowfoo"><img src="images/slide8/arrow.png" alt="" title=""/></div>
                <div class="text83"><img src="images/slide8/text82.png" alt="" title=""/></div>
                <div class="text84"><p>Мы редко проводим рекламные кампании так как почти<br>
                    всегда обеспечены заказами и считаем гораздо позитивнее<br>
                    и приятнее рекламный бюджет делегировать в пользу акций<br>
                    и скидок для наших друзей..</p></div>
                <div class="text85"><img src="images/slide8/text83.png" alt="" title=""/></div>
                <div class="text86"><p>Пока одни размышляют, другие быстро зарабатывают вместе с нами.</p></div>

            </div>

        </div>
    </div>
    <div id="foobottom">
        <div id="foomidlepart">
            <div class="innermidl">
                <div class="text87"><img src="images/slide8/text84.png" alt="" title=""/></div>
                <div class="column column1">
                    <div class="item-text1"><p>Заказать обратный звонок:</p></div>
                    <div class="item-text2"><p>Оставьте контактный телефон<br>и мы Вам перезвоним</p></div>
                    <div class="item-img">
                        <div id="call">
                            <form class="callone">
                                <span class="btn btn-block btn-large btn-success modal_btn"><input type="button"
                                                                                                   value="Сделать заявку"/></span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="column column2">
                    <div class="item-text1"><p>Позвонить нам:</p></div>
                    <div class="item-text2"><p>Мы ждем Ваших звонков<br> с 10.00 до 20.00 по московскому времени</p>
                    </div>
                    <div class="item-img"><img src="images/slide8/phonebottom.png" alt="" title=""/></div>
                </div>
                <div class="column column3">
                    <div class="item-text1"><p>Задать вопрос онлайн:</p></div>
                    <div class="item-text2"><p>Наш консультант в сети,<br>
                        можете задать вопрос</p></div>
                    <div class="item-img">
                        <div id="ask">
                            <form class="askone">
                                <span class="btn btn-block btn-large btn-success modal_btn"><input type="button"
                                                                                                   value="Сделать заявку"/></span>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="socialnet">
						<span>
						МНЕ </span>

                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button"
                     data-action="like" data-show-faces="false" data-share="false"></div>
                <span>! ПОКАЖИТЕ СТРАНИЦУ ДРУЗЬЯМ: </span>

                <div class="share42init"></div>

            </div>

            <div class="footerslide8">
                <div class="firstarr"><a href="#seven"><span>Листать обратно</span></a></div>

            </div>
        </div>
        <div id="foobottompart">
            <div class="fooinnerbottompart">
                <div class="copyr"><p>Copyright © 2014 IN-MARKETING</p></div>
                <div class="text88"><img src="images/slide8/logobottom.png" alt="" title=""/></div>

            </div>
        </div>
    </div>
</section>
</div>
</body>
</html>