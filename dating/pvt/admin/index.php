<?php include '../../includes/config.php';

if (!isset($_SESSION['staffID'])) {
    $next_id = mysqli_query($con, "SELECT * FROM staff_info ORDER BY 'staff_id' DESC");
    while ($staff_data = mysqli_fetch_assoc($next_id)) {
        $staff_id = $staff_data['staff_id'];
    }
} else {
    $staff_id = $_SESSION['staffID'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    Meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hire world class fashion models, male and female models available"</title>
    <meta name="description" content="Hire top rated male and female models for your advertising campaign">
    <meta name="keywords" content="Models,Runway,Fashion,Photoshoot">
    <meta name="author" content="Steve Masterson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    Style Sheets-->
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/core.css">
    <link rel="stylesheet" href="../../css/models.css">

    <!--    Date Time Picker-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <!-- Font-->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    FavIcon-->
    <link rel="icon" type="image/png" href="image/favicon.png">
    <script src="../../js/myScripts.js"></script>
    <!--    Scripts-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function navCollapse() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</head>
<body>
<!--    Primary Content-->
<div class="header"><div class='container'>
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
                </div>
                <div style="height: .5em;"></div>
                <div class="collapse navbar-collapse" id="mobileNav">
					<?php include '../../../navbar.php'?>
                    <!--        Div to lock in the nav when in responsive since all content and live links are on the main page-->
                </div>
        </nav>
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
<main style="margin-left:0; padding-left:0;">

    <div id="mainContainer">
        <div class="mGridLeft  rAltImageContainer">
            <div class="mGridB">
                <style>
                    .rAltImageContainer {
                        margin-left: -2em;
                        margin-right: 1em;
                    }
                </style>
                <div class="mGridCr">
                    <div class="mGridImages ">
                        <script>
                            $(document).ready(function () {
                                $(".bioPic").click(function () {
                                    var $modelID = $(this).attr("name");
                                    console.log($modelID);
                                    $(".mGridBigPic").load("staff_id.php?choice=" + $modelID)
                                    window.location.reload();
                                });
                            });
                        </script>
                        <?php
                        $query_model = mysqli_query($con, "SELECT * FROM staff_info WHERE staff_id=$staff_id");
                        while ($first_data = mysqli_fetch_assoc($query_model)){
                            echo '<img onclick="F' . $first_data["staff_id"] . '"() id="F' .
                                $first_data["staff_id"] . '" name="' . $first_data["staff_id"] . '" class="sidepics bioPic" src="../../pvt/admin/upload/' . $first_data["staff_image1_name"] . '"/>';
                        $no_repeat = $first_data["staff_id"];
                            echo '<img onclick="F' . $first_data["staff_id"] . '"() id="F' .
                                $first_data["staff_id"] . '" name="' . $first_data["staff_id"] . '" class="sidepics bioPic" src="../../pvt/admin/upload/' . $first_data["staff_image1_name"] . '"/>';
                        $no_repeat = $first_data["staff_id"];
                        }

                        $query = mysqli_query($con, "SELECT * FROM staff_info WHERE staff_id NOT LIKE $no_repeat ORDER BY rand() DESC");
                        while ($getmodel_data = mysqli_fetch_assoc($query)) {
                            echo '<img onclick="F' . $getmodel_data["staff_id"] . '"() id="F' .
                                $getmodel_data["staff_id"] . '" name="' . $getmodel_data["staff_id"] . '" class="sidepics bioPic" src="../../pvt/admin/upload/' . $getmodel_data["staff_image1_name"] . '"/>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="mGridBigPic">
            <container class="profileimg">
                <?php
                $sql = "select * from staff_info where staff_id=$staff_id";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result);
                $image_src1 = $row['staff_image1'];
                $_SESSION['image_src2'] = $row['staff_image2'];
                $_SESSION['image_src3'] = $row['staff_image3'];
                ?>
                <div class=" overlay-imagef _bp ">
                    <div id="theBigPicture">
                    <img src="<?php echo $image_src1 ?>" id="bigImage"/>
                    </div>
                    <div class=" normal _bs " hidden>
                        <div class=" text _q ">
                            <div style="margin-left:-10em; padding:1em;" hidden>
                            <div style="font-weight: 600; margin-bottom:.2em; ">
                            Meet <?php echo $row['staff_name'] ?></div>
                            <?php echo $row['staff_name'] ?> is a <?php echo $row['staff_age'] ?> year old
                            who is  <?php echo $row['staff_height_inches'] ?> inches tall
                            and is a natural <?php echo $row['staff_hair_colour'] ?>
                            with <?php echo $row['staff_eye_colour'] ?> eyes
                            from <?php echo $row['staff_city'] ?> and is
                            offering <?php echo $row['staff_services'] ?>.<br>
                            <br><p>Book now and spend time with <?php echo $row['staff_name'] ?> today!</p>
                            </div>
                        </div>
                    </div>
                    <div class=" hover _br " hidden>
                        <div class=" text _q ">
                            Select A Headshot For More Info
                        </div>
                    </div>
                    <p class="text-left"><br>
	                    <?php echo $row['staff_name'] ?>
                        is a <?php echo $row['staff_age'] ?> year old
                        who is  <?php echo $row['staff_height_inches'] ?> inches tall
                        and is a natural <?php echo $row['staff_hair_colour'] ?>
                        with <?php echo $row['staff_eye_colour'] ?> eyes
                        from <?php echo $row['staff_city'] ?> and is
                        offering <?php echo $row['staff_services'] ?>.<br>
                </p>
                </div>
            </container>
        </div>
        <div class="mGridBio">
        <?php include "../../../dating/MyChat/signin.php" ?>
        </div>
    </div>
    </div>
</main>
<footer>
    <p>&copy 2020 JRSM Entertainment | <a href="index.php#about">Terms of Service</a> | <a
                href="index.php#about">About Us</a></p>
    <div class="socials"><i class="fa fa-twitter-square fa-inverse" aria-hidden="true"></i> <i
                class="fa fa-facebook-square fa-inverse" aria-hidden="true"></i> <i class="fa fa-rss-square fa-inverse" aria-hidden="true"></i></div>
</footer>
</body>
</html>
