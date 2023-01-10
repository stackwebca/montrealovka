<?php session_start(); ?>
<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Montrealovka</title>
    <meta name='description'
          content='Деловое сообщество и информационный гид в Монреале, Россия'>
    <meta name='keywords'
          content='Русский, Монреаль, Сообщество, Информация, Бизнес, Реклама, Русский канадский'>
    <meta name='author' content='JRSM Entertainment'>
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
    <!--        <script src='js/persistent-checkboxes.js'></script>-->
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
                <div id="alignbrand" style="height: .5em;"></div>
                <div class="collapse navbar-collapse" id="mobileNav">
	                <?php include 'navbar.php'?>
                <!--        Div to lock in the nav when in responsive since all content and live links are on the main page-->
                <div class="transnav">
                    <script>
                        $(document).ready(function () {
                            $(".input").removeClass("active-width").addClass("active-width").val('');
                        });
                    </script>
                    <div class="wrapper">
                        <div class="searchbox glow">
                            <input id='bigadkeywords' type="text" class="input" placeholder="Введите ключевое слово...">
                            <a href='#topPage' id='bigsearch' class="searchbtn glow"><i
                                        class="fas fa-search glow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <script>
            $(document).ready(function () {
                $('html, body').animate({scrollTop: 0}, 'slow');
                $('#bigadkeywords').on('keyup', function () {
                    $('.adresults').hide();
                    var txt = $('#bigadkeywords').val();
                    $('.adresults').each(function () {
                        if ($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1) {
                            $(this).show();
                        }
                    });
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
                            Русский хаб &nbsp <i class="fas fa-fire text-warning flameglow"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='row'>
    </div>
    <div class="row">
        <div class='col-md-2 text-center myLBanner'>
            <div class='row'>
                <div class='col-sm-12 bannerAd'><img
                            src="img/mockads/ad6.png"
                            alt=""></div>
                <div class='col-sm-12 bannerAd'><img
                            src="img/mockads/ad5.png"
                            alt=""></div>
                <div class='col-sm-12 bannerAd'><img
                            src="img/mockads/ad4.png"
                            alt=""></div>
            </div>
        </div>
        <div class="blink_me" id="backtop">&#9650;</div>
        <div class='col-md-8 text-center myMainContent mainContent'>
            <div class='row'>
                <div id='adcontainer' class='col-md-12 text-center'>
                    <div class="row">
                        <div class="col-md-4 myCatListings">
                            <!--            Categories (to Dropdown at Mobile)-->
                            <div class="row">
                                <div class="col-sm-12 text-left">
                                    <div id="searchable container-overlay">
                                        <input id="adkeywords" class="form-control" type="text"
                                               placeholder="Фильтр результатов...">
                                        <script>
                                            $(document).ready(function () {
                                                $('#adkeywords').on('keyup', function () {
                                                    $('.adresults').hide();
                                                    var txt = $('#adkeywords').val();
                                                    $('.adresults').each(function () {
                                                        if ($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1) {
                                                            $(this).show();
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                        <div id="searchable_clrBtn">
                                            <button id="clearSearch" type="button" class="btn btn-small
                                        btn-secondary" name="clearSearch">Чисто
                                            </button>
                                            <script>
                                                $(document).ready(function () {
                                                    $("#clearSearch").click(function () {
                                                        $("#ad_results").load("searchads.php?choice=" + "%")
                                                        $("#ad_results").load(" #ad_results");
                                                    });
                                                });
                                            </script>
                                            <?php

                                            ?>
                                        </div>
                                    </div>
                                    <div class="panel-group directorycontainer" id="accordion">
                                        <script>
                                            $(document).ready(function () {
                                                $('input[type="checkbox"]').click(function () {
                                                    if ($(this).is(":checked")) {
                                                        var $box = $(this);
                                                        if ($box.is(":checked")) {
                                                            var group = "input:checkbox[name='" + $box.attr("name") + "']";
                                                            button_wasfired = "";
                                                            $(group).prop("checked", false);
                                                            $box.prop("checked", true);
                                                        } else {
                                                            $box.prop("checked", false);
                                                        }
                                                        $("#ad_results").load("searchads.php?choice=" + $(this)
                                                            .attr('cbpseudo'));
                                                        $("#ad_results").load(" #ad_results");
                                                        $('html, body').animate({scrollTop: 0}, 'slow');
                                                        // console.log($(this).attr('cbpseudo'));
                                                    } else if ($(this).is(":not(:checked)")) {
                                                        $("#ad_results").load("searchads.php?choice=" + $(this)
                                                            .attr('cbmainval'));
                                                        $("#ad_results").load(" #ad_results");
                                                        $('html, body').animate({scrollTop: 0}, 'slow');
                                                    }
                                                });
                                            });
                                        </script>
                                        <script>
                                            $(document).ready(function () {
                                                $('input.subCatSets').on('change', function () {
                                                    $('input.subCatSets').not(this).prop('checked', false);
                                                });
                                            });
                                        </script>
                                        <!--                PHP to list Category and Subs-->
                                        <?php
                                        $thisCategory = 'site_usradverts';
                                        if ($adnumquery = mysqli_query($conn, "SELECT * FROM $thisCategory")) {
                                            $adnumrow_cnt = mysqli_num_rows($adnumquery);
                                            printf("<div class='text-left' style='padding-right:.5rem;'><sup>&nbsp(%d) общие списки сайтов</sup></div>\n", $adnumrow_cnt);
                                        }
                                        $query = mysqli_query($conn, "SELECT * FROM ad_category_vals");
                                        while ($getcategory_data = mysqli_fetch_assoc($query)) {
                                            $main_category = $getcategory_data["ad_categorydataset"];
                                            print '<div class="panel panel-default ad-panel"' . ' id="panel' .
                                                $getcategory_data["ad_categorydataset"] . '"><div class="panel-heading"  style="padding-top:.35em;padding-bottom:.35em;"><p class="panel-title"><a data-toggle="collapse" data-target="#' .
                                                $getcategory_data["ad_categorydataset"] . '" ' . 'class="collapsed">'
                                                . $getcategory_data["ad_category"] . '<i id="flame" class="fas fa-fire text-warning flameglow"></i>';

                                            $showCategory = $getcategory_data["ad_category"];
	                                        $adCategory = str_replace(' ', '', $showCategory);
                                            if ($adnumquery = mysqli_query($conn, "SELECT * FROM site_usradverts WHERE ad_category LIKE '$adCategory'")) {
                                                $adnumrow_cnt = mysqli_num_rows($adnumquery);
                                                printf("<span style='top:5rem; float:right; padding-right:.25em; font-size:.6em;' class='text-primary'>(%d)</span>\n",
                                                    $adnumrow_cnt);
                                            }

                                            print'</a></p></div><div id="' . $getcategory_data["ad_categorydataset"] . '" 
                                class="panel-collapse collapse">
                            <div class="panel-body"><span class="h4" style="margin:.5em; padding-left:.25em; padding-right:.25em; font-size:1em;"><button class="btn-outline-danger allCatBtn" style="padding:.5rem; margin-bottom:.25rem;" value="' . $getcategory_data["ad_categorydataset"] . '" name="' . $getcategory_data["ad_categorydataset"] . '" ' . '>View All</button></span></br>';
                                            $sql = "SELECT main_category, sub_category, sub_dataset FROM ad_subcategories WHERE main_category='$main_category'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    print '<span class="h4" style="margin:.5em; padding-left:.25em; padding-right:.25em; font-size:1em;"> <input type="checkbox" class="subCatSets" style="margin-right:.5em;"  value="' . $row["sub_dataset"] . '" name="cb_subcat" id="' . $row["sub_category"] . '" cbpseudo="' . $row["main_category"] . $row["sub_category"] . '" . cbmainval="' . $row["main_category"] . '">' . $row["sub_category"];
                                                    $showCategory = $row["sub_category"];
                                                    if ($adnumquery = mysqli_query($conn, "SELECT * FROM site_usradverts WHERE ad_subcategory LIKE '$showCategory'")) {
                                                        $adnumrow_cnt = mysqli_num_rows($adnumquery);
                                                    }
                                                    printf("<div class='text-right' style='margin-top:-2rem'><sup>(%d) списки</sup></div>\n",
                                                        $adnumrow_cnt) . '</span><br>';
                                                }
                                            } else {
                                            }
                                            print '</div></div></div>';
                                        } ?>
                                    </div>
                                    <script>
                                        $(".allCatBtn").click(function () {
                                            $('input[type="checkbox"]:checked').prop('checked', false);
                                            var button_fired = $(this).val();
                                            button_wasfired = button_fired;
                                            // console.log(button_wasfired);
                                            $("#ad_results").load("searchads.php?choice=" + button_fired);
                                            $("#ad_results").load(" #ad_results");
                                            $('html, body').animate({scrollTop: 0}, 'slow');
                                        });
                                    </script>
                                </div>
                                <div class="col-sm-12">
                                    <!--            above will change to drop down in mobile-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 myAdListings">
                            <div id="mobileAdCriteria" class="row">
                                <div id="mobileAdSearch">
                                    <div class="row form-pad">
                                        <div class="col-xs-12">
                                            <fieldset class="my-2">
                                                <select id="mobileMain-adcategory" name="mobileMain-adcategory"
                                                        class="form-control">
                                                    <option value="" selected disabled>Категория</option>
                                                    <?php
                                                    $query = mysqli_query($conn, "SELECT * FROM ad_category_vals");
                                                    while ($getcategory_data = mysqli_fetch_assoc($query)) {
                                                        echo '<option value="' . $getcategory_data["ad_categorydataset"] . '">' . $getcategory_data["ad_category"] . '</option>';
                                                    } ?>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#mobileMain-adcategory").change(function () {
                                                    $("#ad_results").load("searchadmain.php?choice=" + $("#mobileMain-adcategory").val());
                                                    $("#ad-subcategory").load("ads_subcatsview.php?choice=" + $("#mobileMain-adcategory").val());
                                                    $("#ad-reqtype").load("ads_reqtypes.php?choice=" + $("#mobileMain-adcategory").val());
                                                });
                                                $("#ad-subcategory").change(function () {
                                                    document.getElementById("ad_results").innerPHP = "";
                                                    $("#ad_results").load("searchadsub.php?choice=" + $("#ad-subcategory").val());
                                                });
                                            });
                                        </script>
                                        <div class="col-xs-6" style="padding-right:.5em;">
                                            <fieldset>
                                                <select id="ad-subcategory" name="ad-subcategory"
                                                        class="form-control"></select>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-6" style="padding-left:0;">
                                            <fieldset class="my-2">
                                                <select id="ad-reqtype" name="ad-reqtype"
                                                        class="form-control"></select>
                                            </fieldset>
                                        </div>
                                        <script>
                                            $('.adresults').hide();
                                            $('#ad-reqtype').change(function () {
                                                $('.adresults').hide();
                                                var txt = $('#ad-reqtype').val();
                                                $('.adresults').each(function () {
                                                    if ($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1) {
                                                        $(this).show();
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <script>
                                    $(document).ready(function () {
                                        $('input[type="radio"]').click(function () {
                                            if ($(this).is(":checked")) {
                                                var $box = $(this);
                                                if ($box.is(":checked")) {
                                                    var $thisRadio = $box.attr("value");
                                                    // using array to get currently checked checkbox value
                                                    var checkbox = $('input[type="checkbox"]:checked').map(function () {
                                                        return $(this).val();
                                                    });
                                                    // concatenate checkbox value with the radio value for string
                                                    // send to php file
                                                    if (typeof checkbox[0] === 'undefined') {
                                                        var $choice = ($thisRadio);
                                                        // console.log($choice);

                                                    } else {
                                                        var $choice = (checkbox[0] + $thisRadio);
                                                        // console.log($choice);
                                                    }

                                                    if (typeof button_wasfired === 'undefined') {
                                                        var $btnchoice = "";

                                                    } else {
                                                        var $btnchoice = (button_wasfired);
                                                    }

                                                    $('.adresults').hide();
                                                    var txt = $box.attr("value");
                                                    $('.adresults').each(function () {
                                                        var $reqtype = $box.attr("value");
                                                        if ($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1) {
                                                            $(this).show();
                                                        }
                                                    });
                                                    $("#ad_results").load("searchads.php?choice=" + $btnchoice +
                                                        $choice);
                                                    $("#ad_results").load(" #ad_results");
                                                } else {

                                                }
                                            }
                                        });
                                    });
                                </script>
                                <div class="" id="panelreq">
                                <span class="h4" style="margin:.1em; padding-left:.9em; font-size:.8em; color:blue"><input type="radio" name="adradio" value="%" style="margin-right:.2em;">все</span>
<!--                                    <!--                    PHP to list Req Type-->
                                    <?php $query = mysqli_query($conn, "SELECT DISTINCT reqtype_val FROM ad_reqtype_vals");
                                    while ($reqcategory_data = mysqli_fetch_assoc($query)) {
                                        print '<span class="h4" style="margin:.1em; padding-left:.9em; font-size:.8em;"><input type="radio" name="adradio" style="margin-right:.2em;" value="' . trim($reqcategory_data["reqtype_val"]) . '"id="' . trim($reqcategory_data["reqtype_val"]) . '">' . $reqcategory_data["reqtype_val"] . '</span>';
                                    } ?>
                                </div>
                                <div class="col-sm-12">
                                    <!--            above will change to drop down in mobile-->
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        $('#pagination').on('change', function () {
                                            var pageNum = $("#pagination option:selected").text();
                                            $("#pagination").load("pagenum.php?currPage=" + pageNum);
                                        });
                                    });
                                </script>
                                <script>
                                    $(document).ready(function () {
                                        $('#numAds').on('change', function () {
                                            var numads = $("#numAds option:selected").text();
                                            $("#numAds").load("viewnum.php?numAds=" + numads);
                                            window.location.reload();
                                        });
                                    });
                                </script>
                                <div class="col-sm-12 text-left">

                                    <!--                                    Ajax Call Mysql/Jquery-->
                                    <?php
                                    if (!isset($_SESSION['Chosen'])) {
                                        $chosen = "%";
                                    } else {
                                        $chosen = $_SESSION['Chosen'];
                                    }

                                    if (!isset($_SESSION['thisPage'])) {
                                        $_SESSION['thisPage'] = 1;
                                    }

                                    if (!isset($_SESSION['numPerPage'])) {
                                        $numPerPage = 5;
                                    } else {
                                        $numPerPage = $_SESSION['numPerPage'];
                                    }

                                    $page = (isset($_GET['page']) ? $_GET['page'] : 1);
                                    $perPage = (isset($_GET['per-page']) && ($_GET['per-page']) <= 50 ? $_GET['per-page'] : $numPerPage);
                                    $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

                                    $total = $conn->query("SELECT * FROM site_usradverts WHERE ad_category LIKE '$chosen' OR ad_subcategory LIKE '$chosen'
                                OR ad_subdataset LIKE '$chosen' OR ad_reqtypedataset LIKE '$chosen' OR ad_reqtype LIKE '$chosen' OR ad_categoryreqtype LIKE '$chosen'
                                 OR ad_busname LIKE '$chosen' OR ad_title LIKE '$chosen' OR ad_content LIKE '$chosen'")->num_rows;
                                    $pages = ceil($total / $perPage);
                                    ?>
                                    <div id="ad_results">
                                        <!--                   PHP to View Listings-->
                                        <?php
                                        if ($adnumquery = mysqli_query($conn, "SELECT * FROM site_usradverts WHERE ad_category LIKE '$chosen' OR ad_subcategory LIKE '$chosen' OR ad_subdataset LIKE '$chosen' OR ad_reqtypedataset LIKE '$chosen' OR ad_reqtype LIKE '$chosen' OR ad_categoryreqtype LIKE '$chosen'
                                        OR ad_busname LIKE '$chosen' OR ad_title LIKE '$chosen' OR ad_content LIKE '$chosen'")) {
                                            $thisResult = mysqli_num_rows($adnumquery);
                                            echo '<div class="row"><div class=\'col-sm-6 text-left\' style=\'padding-right:.5rem;\'><sup>(' .
                                                $thisResult . ') Спички</sup></div><div class="col-sm-4 text-right" style="z-index:1; left:7%;"><sup>на страницу</sup></div><div id="viewNum" class="col-sm-2 text-center">
                                    <select name="numAds" id="numAds" class="form-control"style="width:70%; transform:scale(.7); padding:0;margin:0; margin-top:-.5em; text-align:right; margin-left:2.25em;" ><option selected disabled">' . $numPerPage . '</option><option value="5">5</option>
                                        <option value="10">10</option><option value="25">25</option></option><option value="50">50</option></option>
                                        <option value="100">100</option><option value="%">Все</option></select></div></div>';
                                        }

                                        $sql = "SELECT * FROM site_usradverts WHERE ad_category LIKE '$chosen' OR ad_subcategory LIKE '$chosen' OR ad_subdataset LIKE '$chosen' 
                                    OR ad_reqtypedataset LIKE '$chosen' OR ad_reqtype LIKE '$chosen' OR ad_categoryreqtype LIKE '$chosen' OR ad_busname LIKE '$chosen' 
                                    OR ad_title LIKE '$chosen' OR ad_content LIKE '$chosen' limit " . $start . " , " . $perPage . " ";

                                        $_SESSION['Pages'] = ceil($total / $perPage);
                                        $pages = $_SESSION['Pages'];
                                        $_SESSION['adRows'] = $conn->query($sql);

                                        $adrows = $_SESSION['adRows'];
                                        while ($row = $adrows->fetch_assoc()) {
                                            print '<tr><td><div class="panel panel-default filtered adresults panel_ads"' .
                                                'data-category="' . $row["ad_subdataset"] . " " . $row["ad_reqtypedataset"] . " " . $row["ad_reqtype"] . '">' . '<div class="panel-heading" style="padding-top:.35em;padding-bottom:.35em;"><div class="col-lg-6 col-md-6 col-sm-6>"<div><span class="h9 text-primary">' . $row["ad_category"] .
                                                '</span>: &nbsp' . $row["ad_subcategory"] . '</div> <div class="col-sm-6 text-info ad_reqmobi">' . $row["ad_reqtype"] . "</strong></div><br> " .
                                                "</div><div class='panel-body' style='margin-left:.9em;'> <strong style='color:black;font-size:1em;'>" . $row["ad_busname"] . "</strong> <p style='text-decoration: underline; line-height:1.2em;';>" . $row["ad_title"]
                                                . "</p><span style='line-height:.5em;';>" . $row["ad_content"] . '</span><span class="text-muted" style="font-size:.8em;">' . "<p></p>Phone:&nbsp" . $row["ad_tel"] . "&nbsp|  Email:&nbsp &nbsp" . $row["ad_email"] . "</span></div></div></tr></td>";
                                        } ?>
                                    </div>
                                    <section id="pagesCount">
                                        <div class="row text-center">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-2">
                                                <select class="form-control text-center" name="paginated"
                                                        id="pagination" style="width: 5em;"
                                                        onchange="location = this.value;">
                                                    <option value="ads.php?page=<?php echo $_SESSION['thisPage'];
                                                    ?>&per-page=<?php echo $numPerPage; ?>" selected disabled><?php echo
                                                        $_SESSION['thisPage']; ?></option>
                                                    <?php for ($i = 1; $i <= $pages; $i++): ?>
                                                        <option value="ads.php?page=<?php echo $i; ?>&per-page=<?php echo $perPage; ?>"><?php echo $i; ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-5"></div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-2  text-center myRBanner'>
            <div class='row'>
                <div class='col-sm-12 bannerAd'><img
                            src="img/mockads/ad3.png"
                            alt=""></div>
                <div class='col-sm-12 bannerAd'><img
                            src="img/mockads/ad2.png"
                            alt=""></div>
                <div class='col-sm-12 bannerAd'><img
                            src="img/mockads/ad1.png"
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.0/angular.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="js/sitescripts.js"></script>
</body>
</html>