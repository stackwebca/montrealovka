<?php session_start(); ?>
<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Montrealovka</title>
    <meta name='description'
          content='Деловое сообщество и информационный гид в Монреале, Россия'>
    <meta name='keywords'
          content='Русский, Монреаль, Сообщество, Информация, Бизнес, Реклама, Русский канадский'>
    <meta name='author'
          content='JRSM Entertainment'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
    <!--    Google Fonts-->
    <link href='https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Nunito+Sans:wght@300;400;700&family=Open+Sans:wght@300;400;700&family=Roboto:wght@100;300;400;700&display=swap'
          rel='stylesheet'>
    <!--    CSS Styles-->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
          rel='stylesheet'/>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.14.0/css/all.css'>
    <link rel="stylesheet" href="css/style.css">
    <!-- Script-->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
</head>
<body>
<div class='container-fluid mainBody'>
    <!--  Main Grid System-->
    <div class="header">
        <div id="topPage"></div>
        <nav class="navbar navbar-fixed-top navbar--color--ghost navbar--size--xl"
             data-startColor="navbar--color--ghost"
             data-startSize="navbar--size--xl" data-intoColor="navbar--color--secondary text-color:white"
             data-intoSize="navbar--size--md">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                            data-target="#mobileNav"
                            aria-expanded="false"><span class="sr-only">Toggle navigation</span><span
                                class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <div style="height: .75em;"></div>
                    <!--            <a class="navbar-brand" href="#">Montrealovka (need logo)</a>-->
                </div>
                <div style="height: .5em;"></div>
                <div class="collapse navbar-collapse" id="mobileNav">
	                <?php include 'navbar.php'?>
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
            $(document).ready(function () {
                $('.searchbtn').click(function () {
                    $("#ad_results").load("searchads.php?choice=" + "%");
                    window.location.replace("ads.php?page=1&per-page=1");
                });
            });
        </script>
        <script>
            $('.adresults').hide();
            $('#bigadkeywords').change(function () {
                $('.adresults').hide();
                var txt = $('#bigadkeywords').val();
                $('.adresults').each(function () {
                    if ($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1) {
                        $(this).show();
                    }
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
                            &nbsp<i
                                    class="fas fa-fire text-warning flameglow"></i>
                        </div>
                    </div>
                </div>
                <!--                This Logo Set "transtext" is hidden in desktop and will show when in mobile view.-->
            </div>
        </div>
    </div>
    <div class='row'>
    </div>
    <div class="row">
        <div class='col-md-2 text-center myLBanner'>
            <div class='row'>
                <div class='col-sm-12 bannerAd'><img
                            src="img/mockads/ad4.png"
                            alt=""></div>
            </div>
        </div>
        <div class='col-md-8 text-center myMainContent mainContent'>
            <?php
            if (isset($_SESSION['userName'])) {
                $userActive = $_SESSION["userName"];
            } else {
                $userActive = '';
            }
            $sql = "SELECT * FROM register WHERE username = '$userActive'";
            $result = $conn->query($sql);
            if (isset($_SESSION['userName'])) {
                echo "<p class='h3' style='margin-top:1%;'>Привет " . $_SESSION['userName'] .
                    ', Создать объявление ? <a href="logout.php" class="text-danger text-decoration-none">
                                        | Выйти</a></p>';
                echo '<div class="col-sm-12"><div class="row">
                                <div class="col-md-6 col-sm-12 text-left"><p class="h3 text-info">Ваша информация</p>
                                <div class="userInfoCard">'; ?>
                <?php
                while ($reg_user = mysqli_fetch_assoc($result)) {
                    echo '<p><span style="font-weight:600;">Имя пользователя: </span><span class="text-info">' .
                        $_SESSION["userName"] . '</span></p>';
                    echo '<p><span style="font-weight:600;">Эл. адрес: </span><span class="text-info">' . $reg_user["email"]
                        . '</span></p>';
                }
                echo '
                                <div class="row" style="margin-bottom:.5em;">
                                <form action="profile.php" method="Post">
                                <div class="col-md-6 col-sm-12"><input type="email" class="form-control" name="updateEmail"
                                                             placeholder="Введите новый адрес электронной почты"
                                                             id="updateEmail"></div>
                                <div class="col-md-6 col-sm-12"><input type="email" class="form-control" name="updateEmail2"
                                                     id="updateEmail2" placeholder="Новое письмо снова"></div>
                                <div class="col-md-6 col-sm-12"><button class="btn btn-primary" name="newEmail" type="submit">Обновить</button></div>
                                </form>     
                                <div class="col-md-6 col-sm-12"></div>
                                </div>
                                <div class="row">
                                <form action="profile.php" method="Post">
                                <div class="col-md-6"><input type="text" class="form-control" name="updatePW"
                                                             placeholder="Новый пароль"
                                                             id="updatePw"></div>
                                <div class="col-md-6"><input type="text" class="form-control" name="updatePW2"
                                                             id="updatePw2" placeholder="Пароль еще раз"></div>
                                    <div class="col-md-6"><button class="btn btn-primary" name="newPW" type="submit">Обновить</button></div>
                                </form>
                                <div class="col-sm-6" style="max-width:90%;"></div>
                                </div>
                                </div>  
                                
                        <div class="text-left">
                            <div id="table" class="table-editable">
                                <table class="table table-responsive-md table-striped text-left">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th class="mobileHide"></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>'; ?>

                <?php
                $sql = "SELECT * FROM forum WHERE post_user = '$userActive'";
                $result = $conn->query($sql);
                while ($forum_data = mysqli_fetch_assoc($result)) {
                    print '<tr><td class="pt-3-half" contenteditable="true">' . $forum_data["post_category"] .
                        '</td><td class="pt-3-half mobileHide" contenteditable="true">' .
                        $forum_data["post_title"] . '</td>' .
                        '</td><td class="pt-3-half" contenteditable="true">' . $forum_data["post_content"] . '</td>
                                    <td><span class="table-remove"><a id="' .
                        $forum_data["post_id"]
                        . '" href="deletepost.php?id=' . $forum_data["post_id"] . '" data-toggle="tooltip" data-placement="left" title="Delete" class="btn btn-danger btn-rounded btn-sm deleteBtn" name="' . $forum_data["post_id"] . '"value="' . $forum_data["post_id"] . '" ></a></span></td>';

                }
                echo '  
                                </tbody>
                                </table>
                                </div>
                                </div>                   
                                </div>
                                <div class="col-md-6 col-xs-12 text-left"><p class="h3 text-info text-center">Ваше текущее объявление</p>'; ?>
                <?php
                $query = "SELECT * FROM site_usradverts WHERE ad_user = '$userActive'";
                $result = $conn->query($query);
                if ($result->num_rows < 1) {
                    while ($row = $result->fetch_assoc()) {
                        echo 'test';
                    }
                    echo "<h3 class='text-info text-center'>" . "Вы еще не создали объявление.</h3>
                                            <p class='h5 text-center'>" . "Вы можете создать объявление с главной страницы.</p> <br>";
                }
                $sql = "SELECT * FROM site_usradverts WHERE ad_user = '$userActive'";
                $result = $conn->query($sql);
                while ($ad_data = mysqli_fetch_assoc($result)) {
                    print '<tr><td><div class="panel panel-default filtered adresults panel_ads"' .
                        'data-category="' . $ad_data["ad_subdataset"] . " " . $ad_data["ad_reqtypedataset"] . " " . $ad_data["ad_reqtype"] . '">' . '<div class="panel-heading" style="padding-top:.35em;padding-bottom:.35em;"><div class="col-lg-6 col-md-6 col-sm-6>"<div><span class="h9 text-primary">' . $ad_data["ad_category"] .
                        '</span>: &nbsp' . $ad_data["ad_subcategory"] . '</div> <div class="col-sm-6 text-info ad_reqmobi">' . $ad_data["ad_reqtype"] . "</strong></div><br> " .
                        "</div><div class='panel-body' style='margin-left:.9em;'> <strong style='color:black;font-size:1em;'>" . $ad_data["ad_busname"] . "</strong> <p style='text-decoration: underline; line-height:1.2em;';>" . $ad_data["ad_title"]
                        . "</p><span style='line-height:.5em;';>" . $ad_data["ad_content"] . '</span><span class="text-muted" style="font-size:.8em;">' . "<p></p>Phone:&nbsp" . $ad_data["ad_tel"] . "&nbsp|  Email:&nbsp &nbsp" . $ad_data["ad_email"] . "<br><div id='delAdBtn' class='row'><a id='" . $ad_data['ad_id'] . "' href='deletead.php?id=" . $ad_data['ad_id'] . "' 
class='btn btn-danger btn-rounded btn-sm removeAdBtn' style='margin-left:1.2em; margin-top:.25em;' name='" . $ad_data['ad_id'] .
                        "'value='" . $ad_data['ad_id'] . "'></a></div></span></div></div></tr></td>";
                }
                echo '  
                                </div>
                                <div class="col-sm-6 text-left"></div>

                <div class="col-sm-6 text-left"><!--reserved for profile image--></div>
                                </div>
                                </div>                                
                                ';
            } else {
                echo '<div style="margin-top:10%;">';
                echo '<span class="text-danger"><p>Ошибка!</p></span><p>Вы должны войти в систему, чтобы
                                      просмотреть эту страницу.</p>';
                echo '<button id="jqSignin1"><span style="color:#6888d0;">Войти в систему</span></button>&nbsp Или &nbsp';
                echo '<button id="jqRegisters1"><span style="color:#d04c3d;">регистр</span></button><p></p>';

                echo '  <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                    <div id="jqSign1">
                                    <p class="h3">Логин участника</p>
                                    <form action="profile.php" method="POST">' .
                    '<div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                   name="log_username"
                                                                   placeholder="или" required>
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="password" class="form-control"
                                                                   name="log_password"
                                                                   placeholder="введите пароль"
                                                                   required>
                                                        </div>
                                                        <button type="submit"
                                                                class="btn btn-primary mb-2"
                                                                name="login_user">Войти в систему
                                                                </button>
                                                            </form>
                                                        </div>
                                                     ';
                echo '<div id="jqRegister1">
                                                        <p class="h3">Регистрация участника</p>
                                                        <form action="profile.php" method="POST">' . '
                                                        <div class="form-group mb-2">
                                                                <input type="text" class="form-control"
                                                                       name="username"
                                                                       placeholder="имя пользователя"
                                                                       required>
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <input type="email" class="form-control"
                                                                       name="email"
                                                                       placeholder="Эл. адрес"
                                                                       required>
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <input type="password" class="form-control"
                                                                       name="password"
                                                                       placeholder="выберите пароль"
                                                                       required>
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <input type="password" class="form-control"
                                                                       name="password_1"
                                                                       placeholder="введите еще раз пароль"
                                                                       required>
                                                            </div>                                                            
                                                    <div class="form-group">
                                                    <fieldset class="my-2 text-left">
                                                        <!--            If we plan a future forum, will make dynamic and use ad CMS system coding-->
                                                        <select name="reg_question" class="form-control" required>
                                                            <option value="" selected disabled>Выберите вопрос для восстановления пароля?</option>
                                                            <option value="Какая девичья фамилия вашей матери?">Какая девичья фамилия вашей матери?</option>
                                                            <option value="каком городе вы впервые работали полный рабочий день?">каком городе вы впервые работали полный рабочий день?</option>
                                                            <option value="Какое ваше любимое время года?">Какое ваше любимое время года?</option>
                                                            <option value="Как зовут вашего лучшего друга детства?">Как зовут вашего лучшего друга детства?</option>
                                                            <option value="Ваше любимое блюдо?">Ваше любимое блюдо?</option>
                                                            <option value="Как зовут вашу любимую группу или знаменитость?">Как зовут вашу любимую группу или знаменитость?</option>
                                                        </select>
                                                    </fieldset>
                                                        <input name="reg_answer" class="form-control"
                                                   type="text"
                                                   placeholder="Введите свой ответ на вопрос о восстановлении ароля?" required>
                                                    </div>
                                                            <button type="submit"
                                                                    class="btn btn-primary mb-2"
                                                                    name="register">
                                                                Зарегистрироваться
                                                            </button>
                                                        </form>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>';
            } ?>
        </div>
        <div class='col-md-2  text-center myRBanner'>
            <div class='row'>
                <div class='col-sm-12 bannerAd'><img
                            src="img/mockads/ad2.png"
                            alt=""></div>
            </div>
        </div>
    </div>
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
<!--scripts-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="js/sitescripts.js"></script>
</body>
</html>