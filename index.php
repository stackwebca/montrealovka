<?php session_start(); ?>
<?php include 'includes/config.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html lang='ru'>

    <head>
        <title>Montrealovka</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name='description' content='Деловое сообщество и информационный гид в Монреале, Россия'>
        <meta name='keywords' content='Русский, Монреаль, Сообщество, Информация, Бизнес, Реклама, Русский канадский'>
        <meta name='author' content='Montrealovka'>
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
        <!--    Google Fonts-->
        <link
            href='https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Nunito+Sans:wght@300;400;700&family=Open+Sans:wght@300;400;700&family=Roboto:wght@100;300;400;700&display=swap'
            rel='stylesheet'>
        <!--    CSS Styles-->
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet' />
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.14.0/css/all.css'>
        <link rel="stylesheet" href="css/style.css">
        <!-- Script-->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    </head>

    <body>
        <!--  Main Grid System-->
        <div class="header">
            <div class='container-fluid mainBody'>
                <div class="blink_me" id="backtop">&#9650;</div>
                <div id="topPage"></div>
                <nav class="navbar navbar-fixed-top navbar--color--ghost navbar--size--xl"
                    data-startColor="navbar--color--ghost" data-startSize="navbar--size--xl"
                    data-intoColor="navbar--color--secondary text-color:white" data-intoSize="navbar--size--md">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                                data-target="#mobileNav" aria-expanded="false"><span class="sr-only">Toggle
                                    navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
                                    class="icon-bar"></span>
                            </button>
                            <div style="height: .75em;"></div>
                            <!--            <a class="navbar-brand" href="#">Montrealovka (need logo)</a>-->
                        </div>
                        <div style="height: .5em;"></div>
                        <div class="collapse navbar-collapse" id="mobileNav">
                            <?php include 'navbar.php' ?>
                            <!--        Div to lock in the nav when in responsive since all content and live links are on the main page-->
                            <div class="transnav">
                                <div class="wrapper">
                                    <div class="searchbox glow">
                                        <input id='bigadkeywords' type="text" class="notinput">
                                        <a href='#topPage' id='bigsearch' class="searchbtn glow"><i
                                                class="fas fa-search glow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </nav>
                <script>
                $(document).ready(function() {
                    $('.searchbtn').click(function() {
                        $("#ad_results").load("searchads.php?choice=" + "%");
                        window.location.replace("ads.php?page=1&per-page=1");
                    });
                });
                </script>
                <div class="hero">
                    <div class="overlay">
                        <!--                This Logo Set "transtext" is hidden in desktop and will show when in mobile view.-->
                        <div class="container-fluid">
                            <div class="mobtranstext">
                                <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap"
                                    rel="stylesheet">
                                <a class="navbar-brand logoglow p-0" href="#">Montrealovka</a><br>
                                <div class="logoguide"
                                    style="font-size: .75em;  font-style: italic; margin-left:-1em; margin-top:0; padding:0;">
                                    Русский хаб
                                    &nbsp<i class="fas fa-fire text-warning flameglow"></i>
                                </div>
                            </div>
                        </div>
                        <!--                This Logo Set "transtext" is hidden in desktop and will show when in mobile view.-->
                    </div>
                </div>
            </div>
            <div class='row'>
            </div>
            <div class="row mb-0">
                <div class='col-md-2 text-center myLBanner'>
                    <div class='row'>
                        <div class='col-sm-12 bannerAd'><img src="img/mockads/ad4.png" alt=""></div>
                        <div class='col-sm-12 bannerAd'><img src="img/mockads/ad5.png" alt=""></div>
                        <div class='col-sm-12 bannerAd'><img src="img/mockads/ad6.png" alt=""></div>
                    </div>
                </div>
                <div class='col-md-8 text-center myMainContent mainContent'>
                    <div class='col-sm-12 mainContent pageSection myWeather'>
                        <div class='row'>
                            <div class='col-md-4 myRoadInfo'>
                                <iframe id="myRoadInfo" src="https://embed.waze.com/ru/iframe?zoom=10&lat=45.466057&lon=-73.6
                                        &ct=livemap" width="400" height="285" allowfullscreen
                                    style="width:100%; border: none;"></iframe>
                            </div>
                            <div class='col-md-4 myRSSFeed text-left' style='padding-left:1em; padding-right:1em;'>
                                <!--                                <form>-->
                                <select onchange="showRSS(this.value)" class="form-control">
                                    <option value="">Выберите ленту новостей RSS:</option>
                                    <option value="ln">CBC Montreal News</option>
                                    <option value="mtt">Москва Таймс</option>
                                    <option value="rt">Russia Today</option>
                                </select>
                                </form>
                                <br>
                                <div class="scrollable text-left" id="rssOutput" style="font-size: .8em; ">Если вы
                                    хотите быть
                                    в курсе
                                    и читать ежедневные новости,
                                    используйте раскрывающийся список выше и выберите свой источник новостей. Для
                                    вашего
                                    удобства у
                                    нас есть каналы Montreal Local News, Moscow Times и Russia Today, чтобы вы
                                    всегда были в
                                    курсе.
                                </div>
                                <script>
                                function showRSS(str) {
                                    if (str.length == 0) {
                                        document.getElementById("rssOutput").innerHTML = "";
                                        return;
                                    }
                                    if (window.XMLHttpRequest) {
                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                        xmlhttp = new XMLHttpRequest();
                                    } else { // code for IE6, IE5
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                    xmlhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                            document.getElementById("rssOutput").innerHTML = this.responseText;
                                        }
                                    }
                                    xmlhttp.open("GET", "includes/core/getrss.php?q=" + str, true);
                                    xmlhttp.send();
                                }
                                </script>
                            </div>
                            <div class='col-md-4 myWeatherWidget'>
                                <div class="weatherwidget">
                                    <a class="weatherwidget-io disabled"
                                        href="https://forecast7.com/en/45d50n73d57/montreal/" data-label_1="MONTREAL"
                                        data-label_2="WEATHER" data-font="Noto Sans" data-icons="Climacons Animated"
                                        data-mode="Current" data-days="3" data-theme="original">MONTREAL
                                        WEATHER</a>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <a class="weatherwidget-io disabled"
                                                href="https://forecast7.com/en/45d50n73d57/montreal/"
                                                data-label_1="MONTREAL" data-label_2="WEATHER" data-font="Noto Sans"
                                                data-icons="Climacons Animated" data-mode="Forecast" data-days="5"
                                                data-theme="original">MONTREAL WEATHER</a>
                                            <script>
                                            ! function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (!d.getElementById(id)) {
                                                    js = d.createElement(s);
                                                    js.id = id;
                                                    js.src = 'https://weatherwidget.io/js/widget.min.js';
                                                    fjs.parentNode.insertBefore(js, fjs);
                                                }
                                            }(document, 'script', 'weatherwidget-io-js');
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-xs-12 myGovInfo mainContent pageSection'>
                                <div class="row">
                                    <div class="col-sm-3 OverlayTxt_Container">
                                        <a href="http://www.immigration-quebec.gouv.qc.ca/fr/accueil.html"
                                            target="_blank">
                                            <div class="overlayTxt_center">Иммиграция</div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 OverlayTxt_Container">
                                        <a href="https://www.omhm.qc.ca/en/about-us/types-housing" target="_blank">
                                            <div class="overlayTxt_center">Корпус</div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 OverlayTxt_Container">
                                        <a href="https://www.ramq.gouv.qc.ca/en/citizens/health-insurance/register"
                                            target="_blank">
                                            <div class="overlayTxt_center">Здоровье</div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 OverlayTxt_Container">
                                        <a href="https://saaq.gouv.qc.ca/en/drivers-licences/obtaining-licence/"
                                            target="_blank">
                                            <div class="overlayTxt_center">Вождение</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 mainContent pageSection myAdFeed'>
                        <hr>
                        <h2>Информация об услугах местного бизнеса</h2>
                        <div class='row'>
                            <div class='col-sm-5 myAdCats'>
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <ul>
                                            <li class="adverts"><a href="ads.php">Все для дома</a></li>
                                            <li class="adverts"><a href="ads.php">Астрологи</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Красота и здоровье</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Дети</a></li>
                                            <li class="adverts"><a href="ads.php"></i>компьютеры</a></li>
                                            <li class="adverts"><a href="ads.php"></i>культура</a></li>
                                            <li class="adverts"><a href="ads.php"></i>образование</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Трудоустройство</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Финансы и страхование</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Юридические услуги</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 text-left">
                                        <ul>
                                            <li class="adverts"><a href="ads.php"></i>СМИ</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Другие услуги</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Домашние питомцы</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Телефон и почта</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Фото и видео</a></li>
                                            <li class="adverts"><a href="ads.php"></i>печать</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Недвижимость</a></li>
                                            <li class="adverts"><a href="ads.php"></i>отдых</a></li>
                                            <li class="adverts"><a href="ads.php"></i>Транспортные средства</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-7 myAdFeeds text-left '>
                                <div class="recentAds" style="margin-top:-.75em;">
                                    <ul class="clearfix">
                                        <?php $query = mysqli_query($conn, "SELECT * FROM site_usradverts");
                                    while ($data = mysqli_fetch_assoc($query)) {
                                        echo '<p><li class="adverts"><a href="#topPage"><strong><span class="h9 text-primary">' . " [" . $data["ad_category"] . "]</span></strong> " . "<strong>" . $data["ad_busname"] . "</strong>: &nbsp" . $data["ad_title"] . "<br>" . $data["ad_content"] . '<span class="text-muted" style="font-size:12px;">' . " - " . $data["ad_tel"] . "</span></a></li></p>";
                                    } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 myMkt1 mainContent pageSection'>
                        <div class="col-sm-2">
                            <img class="smallAdvert" src="img/mockads/Untitled-5.jpg" alt="mockad"
                                style="max-height:122px;">
                        </div>
                        <div class="col-sm-8">
                            <img class="wideAdvert" src="img/mockads/Untitled-1.jpg" alt="mockad"
                                style="max-height:122px;">
                        </div>
                        <div class="col-sm-2">
                            <img class="smallAdvert" src="img/mockads/Untitled-4.jpg" alt="mockad"
                                style="max-height:122px;">
                        </div>
                    </div>
                    <div class="col-sm-12 mainContent pageSection myPostAd ">
                        <h2 class="text-center">Рекламируйте свои бизнес-услуги</h2>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                            <?php if (isset($_SESSION['userName'])) {
                            echo "<p style='padding-left:1em;'>Привет " . $_SESSION['userName'] . ', Создать объявление ? <a href="logout.php" class="text-danger text-decoration-none"> | Выйти</a></p>';
                        } else {
                            echo '<p class="h9" style="margin-left:1em; margin-top:-1em;">Пожалуйста, войдите, чтобы сделать рекламу</p>';
                        } ?>
                            <script>
                            $(document).ready(function() {
                                $("#main-adcategory").change(function() {
                                    $("#ad-subcategory").load("ads_subcats.php?choice=" + $(
                                        "#main-adcategory").val());
                                    $("#ad-reqtype").load("ads_reqtypes.php?choice=" + $(
                                        "#main-adcategory").val());
                                });
                            });
                            </script>
                            <div class="row">
                                <div class="col-sm-12 myPostingAd mainContent">
                                    <div class="row form-pad">
                                        <div class="col-sm-6">
                                            <input type="textarea" class="form-control" name="ad-busname"
                                                placeholder="Ваше имя или название компании"
                                                aria-label="Заголовок поста" required>
                                        </div>
                                        <div class="col-sm-2">
                                            <fieldset class="my-2">
                                                <select id="main-adcategory" name="main-adcategory"
                                                    class="form-control">
                                                    <?php
                                                $query = mysqli_query($conn, "SELECT * FROM ad_category_vals");
                                                while ($getcategory_data = mysqli_fetch_assoc($query)) {
                                                    echo '<option value="' . $getcategory_data["ad_categorydataset"] . '">' .
                                                        $getcategory_data["ad_category"] . '</option>';
                                                } ?>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-2">
                                            <fieldset>
                                                <select id="ad-subcategory" name="ad-subcategory"
                                                    class="form-control"></select>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-2">
                                            <fieldset class="my-2">
                                                <select id="ad-reqtype" name="ad-reqtype" class="form-control"></select>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="email" class="form-control" name="ad-email"
                                                placeholder="Введите ваш адрес электронной почты" aria-label="Ad Email"
                                                required>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="tel" class="form-control" name="ad-tel"
                                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="555-555-5555"
                                                aria-label="telephone" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="textarea" class="form-control" name="ad-title"
                                                placeholder="Введите заголовок объявления" aria-label="Ad Title"
                                                required>
                                        </div>
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-6">
                                            <textarea class="form-control rounded-0" name="ad-content"
                                                placeholder="Введите описание (не более 300 символов)"
                                                aria-label="Post Description" rows="5"></textarea>
                                        </div>
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-6 text-left">
                                            <?php if (isset($_SESSION['userName'])) {
                                            echo '<button type="submit" class="btn btn-success mb-1" name="create_advert">Отправить</button></form>';
                                        } else {
                                            echo '</form>';
                                            echo '<button id="jqSignin1"><span style="color:#6888d0;">Войти в систему</span></button>&nbsp или &nbsp';
                                            echo '<button id="jqRegisters1"><span style="color:#d04c3d;">регистр</span></button><p></p>';
                                        } ?>
                                            <div id="jqSign1">
                                                <p class="h3">Логин участника</p>
                                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                                                    method="POST">
                                                    <div class="form-group mb-2">
                                                        <input type="text" class="form-control" name="log_username"
                                                            placeholder="username" required>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <input type="password" class="form-control" name="log_password"
                                                            placeholder="введите пароль" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mb-2"
                                                        name="login_user">Войти в систему
                                                    </button>
                                                </form>
                                            </div>
                                            <div id="jqRegister1">
                                                <p class="h3">Регистрация участника</p>
                                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                                                    method="POST">
                                                    <div class="form-group mb-2">
                                                        <input type="text" class="form-control" name="username"
                                                            placeholder="имя пользователя" required>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Эл. адрес" required>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <input type="password" class="form-control" name="password"
                                                            placeholder="выберите пароль" required>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <input type="password" class="form-control" name="password_1"
                                                            placeholder="введите еще раз пароль" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <fieldset class="my-2 text-left">
                                                            <!--            If we plan a future forum, will make dynamic and use ad CMS system coding-->
                                                            <select name="reg_question" class="form-control" required>
                                                                <option value="" selected disabled>Выберите вопрос для
                                                                    восстановления пароля?
                                                                </option>
                                                                <option value="Какая девичья фамилия вашей матери?">
                                                                    Какая девичья фамилия вашей матери?</option>
                                                                <option
                                                                    value="каком городе вы впервые работали полный рабочий день?">
                                                                    каком городе вы впервые работали полный рабочий
                                                                    день?</option>
                                                                <option value="Какое ваше любимое время года?">Какое
                                                                    ваше любимое время года?</option>
                                                                <option value="Как зовут вашего лучшего друга детства?">
                                                                    Как зовут вашего лучшего друга детства?</option>
                                                                <option value="Ваше любимое блюдо?">Ваше любимое блюдо?
                                                                </option>
                                                                <option
                                                                    value="Как зовут вашу любимую группу или знаменитость?">
                                                                    Как зовут вашу любимую группу или знаменитость?
                                                                </option>
                                                            </select>
                                                        </fieldset>
                                                        <input name="reg_answer" class="form-control" type="text"
                                                            placeholder="Введите свой ответ на вопрос о восстановлении ароля?"
                                                            required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mb-2" name="register">
                                                        Зарегистрироваться
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm-12 myMkt2 mainContent pageSection">
                        <!--        <p>won't be visible in mobile</p>-->
                        <div class="col-md-2">
                            <img class="smallAdvert" src="img/mockads/Untitled-3.jpg" alt="mockad"
                                style="max-height:122px;">
                        </div>
                        <div class="col-md-8">
                            <img class="wideAdvert" src="img/mockads/Untitled-2.jpg" alt="mockad"
                                style="max-height:122px;">
                        </div>
                        <div class="col-md-2">
                            <img class="smallAdvert" src="img/mockads/Untitled-6.jpg" alt="mockad"
                                style="max-height:122px;">
                        </div>
                    </div>
                    <div class='col-sm-12 mainContent pageSection mySignUp '>
                        <hr>
                        <div class="row mySignUpContent">
                            <div class="col-sm-6 text-center">
                                <h2>Присоединиться к нашему списку рассылки</h2>
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8 text-center">
                                        <div class="card">
                                            <div class="card-body px-lg-5">
                                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                                                    method="POST">
                                                    <p>Пишем редко, но только лучший контент.</p>
                                                    <div class="mt-3">
                                                        <input type="text" id="news_signupName" name="news_signupName"
                                                            class="form-control"
                                                            placeholder="<?php
                                                                                                                                                        if (!isset($_SESSION['userName'])) {
                                                                                                                                                            echo 'как тебя зовут?';
                                                                                                                                                        }
                                                                                                                                                        if (isset($_SESSION['userName'])) {
                                                                                                                                                            $userActive = $_SESSION["userName"];
                                                                                                                                                            $sql = "SELECT * FROM register WHERE username = '$userActive'";
                                                                                                                                                            $result = $conn->query($sql);
                                                                                                                                                            while ($reg_user = mysqli_fetch_assoc($result)) {
                                                                                                                                                                echo $reg_user["username"];
                                                                                                                                                            }
                                                                                                                                                        }; ?>"
                                                            class="form-control">
                                                    </div>
                                                    <div>
                                                        <input type="text" id="news_signupEmail" name="news_signupEmail"
                                                            class="form-control"
                                                            placeholder="<?php
                                                                                                                                                        if (!isset($_SESSION['userName'])) {
                                                                                                                                                            echo 'Ваш электронный адрес';
                                                                                                                                                        }
                                                                                                                                                        if (isset($_SESSION['userName'])) {
                                                                                                                                                            $userActive = $_SESSION["userName"];
                                                                                                                                                            $sql = "SELECT * FROM register WHERE username = '$userActive'";
                                                                                                                                                            $result = $conn->query($sql);
                                                                                                                                                            while ($reg_user = mysqli_fetch_assoc($result)) {
                                                                                                                                                                echo $reg_user["email"];
                                                                                                                                                            }
                                                                                                                                                        }; ?>"
                                                            class="form-control">
                                                    </div>
                                                    <p></p>
                                                    <div>
                                                        <input type="checkbox" class="text-left" required> я человек
                                                    </div>
                                                    <p class="text-muted text-center h9" style="font-size:.7em;">
                                                        *Регистрируясь, вы соглашаетесь с тем, что мы время от времени
                                                        будем связываться с вами.</p>
                                                    <button class="btn btn-primary btn-rounded btn-block z-depth-0
                                                waves-effect" name="joinNewsletter" type="submit">Зарегистрироваться
                                                    </button>
                                                </form>
                                                <br>
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 survey">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8 border border-light text-left">
                                    <div class="survey-head" style="margin-top:2.5em;">
                                        <p><i class="fas fa-poll-h fa-3x blue-text"></i>&nbsp&nbsp
                                            <!--                                 Current Poll can be selected from Admin Page-->
                                            <?php
                                        $currentPoll = '2';
                                        $_SESSION['currPoll'] = $currentPoll;
                                        $sql = "SELECT poll_question FROM user_polls WHERE poll_id = '$currentPoll'";
                                        $result = $conn->query($sql);
                                        while ($thisPoll = mysqli_fetch_assoc($result)) {
                                            echo $thisPoll["poll_question"];
                                        } ?>
                                        <p><span style="font-weight:600"> Ваш отзыв имеет значение.</span></p>
                                        </p>
                                    </div>
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                                        <div class="form-check">
                                            <input class="form-check-input" name="pollOptions" type="radio"
                                                id="poll-option1" value="1">
                                            <label class="form-check-label" for="poll-option1">Очень хорошо</label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" name="pollOptions" type="radio"
                                                id="poll-option2" value="2">
                                            <label class="form-check-label" for="poll-option2">Легко
                                                ориентироваться</label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" name="pollOptions" type="radio"
                                                id="poll-option3" value="3">
                                            <label class="form-check-label" for="poll-option3">Возможности для
                                                улучшения</label>
                                        </div>
                                        <hr>
                                        <div class="survey-footer clearfix">
                                            <button type="submit" class="btn btn-primary" name="vote">Голос! &nbsp <i
                                                    class="fa fa-paper-plane
                                    ml-1"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-2  text-center myRBanner'>
                    <div class='row'>
                        <div class='col-sm-12 bannerAd'><img src="img/mockads/ad1.png" alt=""></div>
                        <div class='col-sm-12 bannerAd'><img src="img/mockads/ad2.png" alt=""></div>
                        <div class='col-sm-12 bannerAd'><img src="img/mockads/ad3.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="container mt-0">
                <div class="row">

                    <h2 class="text-center">Наш додаток для знайомств</h2>
                    <container id="mainContainer">
                        <div class="ftr2Container">
                            <img class="altImage" src="img/feat2.jpg" />
                        </div>
                        <div class="femContainer">
                            <div class=" overlay-imageq _bp "><a href="#!">
                                    <img class=" image _bq " src="img/banner_fem.jpg" alt="Alt text" />
                                    <div class=" normal _bs ">
                                        <div class=" text _q ">
                                            <div id="fSymbol">
                                                Знайомтесь з жінками<br>♀
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" hover _br ">
                                        <img class=" image _bq " src="img/banner_femAlt.jpg" alt="Alt text hover" />
                                        <div class=" text _q ">Доступні жінки<br>♀
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="menContainer">
                            <div class=" overlay-imageq _bp "><a href="#!">
                                    <img class=" image _bq " src="img/banner_men.jpg" alt="Alt text" />
                                    <div class=" normal _bs ">
                                        <div class=" text _q ">
                                            <div id="fSymbol">
                                                Знайомство з чоловіками<br>♂
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" hover _br ">
                                        <img class=" image _bq " src="img/banner_menAlt.jpg" alt="Alt text hover" />
                                        <div class=" text _q ">Доступні Чоловіки<br>♂
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="ftr1Container">
                            <img class="altImage" src="img/feat1.jpg" />
                        </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class='col-xs-12  text-center myFooter'>
                <div class="footer">
                    <div class="footerarea">
                        <div class="rounded-social-buttons">
                            <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="container text-center">
                            <a href="http://montrealovka.com">www.montrealovka.com</a>
                            <p>&copy 2020 Все права защищены</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--scripts-->
        <script>
        $(document).ready(function() {
            $('.recentAds').verticalLoop({
                delay: 4000,
                order: 'asc'
            });
            setTimeout(function() {
                //$('.demo1').verticalLoop('autoPause');
            }, 10 * 5000);

            var verticalLoop = new VerticalLoop('.recentPosts', {
                delay: 4000,
                order: 'desc',
                oninitend: function(res) {
                    console.log(res);
                }
            });
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
        <script src="js/sitescripts.js"></script>
        <script src="js/jquery-vertical-loop.js"></script>
    </body>

</html>