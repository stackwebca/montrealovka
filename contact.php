<?php session_start();
//ini_set('display_errors', 1);
//ini_set('log_errors',1);
//error_reporting(E_ALL);
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);?>
<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
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
    <link rel='stylesheet'
          href='css/newgrid.css'>
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
                            <input id='bigadkeywords' type="text" class="input">
                            <a href='#topPage' id='bigsearch' class="searchbtn glow"><i
                                        class="fas fa-search glow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <script>
            $("#bigsearch").click(function () {

            })
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
        <div id="profilepg" class='col-md-8 myMainContent'>
            <h2 class="text-primary text-center">Contact Us</h2>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                      method="POST">
                    <div>
                        <div class="form-group text-left">
                            <input type="text" id="Name" name="Name" class="form-control text-left"
                                   placeholder="Your Name" required>
                        </div>
                    </div>
                    <div>
                        <div class="fcf-input-group">
                            <input type="email" id="Email" name="Email" class="form-control"
                                   placeholder="Your Email" required>
                        </div>
                    </div>
                    <div>
                                    <textarea id="Message" name="Message" class="form-control" rows="6"
                                              maxlength="3000" placeholder="Enter your message." required></textarea>
                    </div>

                    <div>
                        <input type="checkbox" required> I am human<br>
                    </div>
                    <div>
                        <button type="submit" id="button" class="btn btn-primary">Send Message</button>
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