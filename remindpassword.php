<?php session_start();
include 'includes/config.php'; ?>
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
    <!--    Google Ad Sense-->
    <script data-ad-client='ca-pub-5022663373769887'
            async
            src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
    <!--    Google Fonts-->
    <link href='https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Nunito+Sans:wght@300;400;
    700&family=Open+Sans:wght@300;400;700&family=Roboto:wght@100;300;400;700&display=swap' rel='stylesheet'>
    <!--    CSS Styles-->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
          rel='stylesheet'/>
    <link rel='stylesheet'
          href='https://use.fontawesome.com/releases/v5.14.0/css/all.css'>
    <link rel="stylesheet" href="css/style.css">
    <!-- Script-->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
</head>
<body>
<div class='container-fluid' style='padding: 0 15px; margin: 0 -15px;'>
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
                    <nav class="navbar navbar-light main-nav" data-toggle="collapse">
                        <div class="container">
                            <ul class="nav navbar-nav">
                                <li class="nav-item"><a href="index.php" id="home">Домой</a></li>
                                <li class="nav-item"><a href="ads.php">Просмотр рекламы</a></li>
                                <li class="nav-item"><a href="profile.php">Профиль</a></li>
                                <?php if (isset($_SESSION['userName'])) {
                                    echo '<li class="nav-item"><a href="./logout.php">Выйти</a></li>';
                                } else {
                                } ?>
                            </ul>
                            <!--                This Logo Set "transtext" is shown on navbar in desktop and will be hidden but replaced with a second set below when in mobile.-->
                            <div class="transtext text-center">
                                <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap"
                                      rel="stylesheet">
                                <a class="navbar-brand logoglow p-0 text-center" href="#">Montrealovka</a><br>
                                <div class="logoguide text-right"
                                     style="font-size: .75em;  font-style: italic; margin-left:-1em; margin-top:0; padding:0;">
                                    Русский хаб
                                    &nbsp<i class="fas fa-fire text-warning flameglow"></i></div>
                            </div>
                            <!--                This Logo Set is "transtext" shown on navbar in desktop and will be hidden but replaced with a second set below when in mobile.-->
                        </div>
                    </nav>
                </div>
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
    <div class='row'>
        <div class='col-md-2 text-center myLBanner'>
            <div class='row'>
                <div class='col-sm-12 bannerAd'><img
                            src="https://via.placeholder.com/160x600?text=160x600+Wide+SkyscaperC/O https://placeholder.com/banner-ads/"
                            alt=""></div>
            </div>
        </div>
        <div id="profilepg" class='col-md-8 text-center myMainContent'>
            <h2 class="text-primary">Забыли пароль?</h2>
            <p>Введите свое имя пользователя или адрес электронной почты, а затем отправьте, если совпадение будет найдено, напоминание будет
                отправлено на ваш зарегистрированный адрес электронной почты.</p>
            <div class="col-sm-4"></div>
            <div class="col-sm-4" style="margin-top:2em;">
                <script>
                    function validate_forgot() {
                        if ((document.getElementById("user-login-name").value == "") && (document.getElementById("user-email").value == "")) {
                            document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
                            return false;
                        }
                        return true
                    }
                </script>
                <?php
                if (!empty($_POST["forgot-password"])){
                $condition = "";
                if (!empty($_POST["user-login-name"]))
                    $condition = " username = '" . $_POST["user-login-name"] . "'";
                $thisUser = $_POST["user-email"];
                if (!empty($_POST["user-email"])) {
                    if (!empty($condition)) {
                        $condition = " and ";
                    } else // <= php made me write this "else" here to stop error //
                        $condition = " email = '" . $_POST["user-email"] . "'";
                    $thisEmail = $_POST["user-email"];
                }
                if (!empty($condition)) {
                    $condition = " where " . $condition;
                }
                $sql = "Select * from register " . $condition;
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result);

                if (!empty($user)) {
                //                        if user exists
                while ($sql = $result->fetch_assoc()) {
                }
                echo $user["reg_question"];
                $_SESSION['thisName'] = $user["username"];
                $_SESSION['thisEmail'] = $user["email"];
                ?>
                <div>
                    <form name="frmForgot" id="frmForgot" method="post">
                        <?php
                        echo '<input type="text" class="form-control" name="reg_answer" id="reg_answer" 
                        class="input-field">
                    </div>';
                        echo '<div class="text-center"><input type="submit" class="btn btn-primary" name="submit_answer" id="submit_answer"
                                value="Submit"
                                class="form-submit-button"></form></div><br>';
                        } else {
                            $error_message = 'No User Found';
                        }
                        } ?>
                        <?php
                        if (!isset($_SESSION['thisAnswer'])) {
                            $thisName = '';
                            $thisEmail = '';
                        } else {
                            $thisName = $_SESSION['thisName'];
                            $thisEmail = $_SESSION['thisEmail'];
                        }
                        // Test Registration Question
                        if (!empty($_POST["reg_answer"])) {
                            $thisName = $_SESSION['thisName'];
                            $thisEmail = $_SESSION['thisEmail'];
                            $_SESSION['thisAnswer'] = mysqli_real_escape_string($conn, $_POST['reg_answer']);
                            $thisAnswer = $_SESSION['thisAnswer'];
                            $query = "SELECT * FROM register WHERE username = '$thisName' && email = '$thisEmail' && reg_answer = '$thisAnswer'";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                $_SESSION["userName"] = $thisName;
                                echo "<div class='text-center'><p class='text-success text-center h3' style='margin-top:6rem;'>"
                                    . "Welcome back, update your info!</p>
                        <a type='submit' href='profile.php' class='btn btn-success' style='margin-bottom:.5em;'>Update Password</a></div><br>";
                            } else {
                                echo "No Match";
                            }
                        } ?>
                        <form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
                            <?php if (!empty($success_message)) { ?>
                                <div class="success_message"><?php echo $success_message; ?></div>
                            <?php } ?>
                            <div id="validation-message">
                                <?php if (!empty($error_message)) { ?>
                                    <?php echo $error_message; ?>
                                <?php } ?>
                            </div>
                            <div class="field-group">
                                <div><label for="username">Имя пользователя</label></div>
                                <div><input type="text" class="form-control" name="user-login-name" id="user-login-name"
                                            class="input-field">
                                </div>
                            </div>
                            <div class="field-group">
                                <div><label for="email">Эл. адрес</label></div>
                                <div><input type="text" class="form-control" name="user-email" id="user-email"
                                            class="input-field"></div>
                            </div>

                            <div class="field-group">
                                <div><input type="submit" class="btn btn-primary" name="forgot-password"
                                            id="forgot-password"
                                            value="Submit"
                                            class="form-submit-button"></div>
                            </div>
                        </form>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class='col-md-2   text-center myRBanner'>
                <div class='row'>
                    <div class='col-sm-12 bannerAd'><img
                                src="https://via.placeholder.com/160x600?text=160x600+Wide+SkyscaperC/O https://placeholder.com/banner-ads/"
                                alt=""></div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12  text-center myFooter'>
                <!--scripts-->
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                <script src="vendor/js/bootstrap.min.js"></script>
                <script src="js/sitescripts.js"></script>
                <script src="js/jquery-vertical-loop.js"></script>
                <script>
                    //smooth scroll links
                    $(document).ready(function () {
                        $('a[href*="#"]').on('click', function (e) {
                            e.preventDefault()
                            $('html, body').animate(
                                {
                                    scrollTop: $($(this).attr('href')).offset().top,
                                },
                                700,
                                'linear'
                            )
                        });
                    });
                </script>
            </div>
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
</body>
</html>