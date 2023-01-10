<?php include 'includes/config.php'; ?>
<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$logo_id = 1;
$sql = "select bus_logo from bus_info where id=$logo_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$image_src = $row['bus_logo'];

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
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/models.css">
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
    <script src="./js/myScripts.js"></script>
    <!--    Scripts-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script type='text/javascript'>
        // Datepicker note that stepping means time minute increments ie, each 15 min interval = stepping: 15
        $(document).ready(function () {
            $('#datetimepicker1').datetimepicker({
                stepping: 15
            });
        });
    </script>
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
<body style="background: black">
<!--    Primary Content-->
<header>
    <container class="logo_container">
        <div class="logo_background">
            <img src="img/logo_bg.png" alt="">
            <div class="image_logo_container">
                <img src="<?php echo $row['bus_logo']; ?>" onerror="this.src='../.' +
                                 'img/logo_placehold.png'" ;
                     alt="sitelogo" style="max-width:100%; max-height:100%; margin-bottom:1em;">
            </div>
        </div>
    </container>
</header>
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
                                $first_data["staff_id"] . '" name="' . $first_data["staff_id"] . '" class="sidepics bioPic" src="pvt/admin/upload/' . $first_data["staff_image1_name"] . '"/>';
                        $no_repeat = $first_data["staff_id"];
                        }

                        $query = mysqli_query($con, "SELECT * FROM staff_info WHERE staff_id NOT LIKE $no_repeat ORDER BY rand() DESC");
                        while ($getmodel_data = mysqli_fetch_assoc($query)) {
                            echo '<img onclick="F' . $getmodel_data["staff_id"] . '"() id="F' .
                                $getmodel_data["staff_id"] . '" name="' . $getmodel_data["staff_id"] . '" class="sidepics bioPic" src="pvt/admin/upload/' . $getmodel_data["staff_image1_name"] . '"/>';
                        }
                        ?>
                        <!--            <img onclick="F0()" id="F0" class="sidepics" src="image/F0.jpg"/>-->
                        <img src="image/BN1.jpg"/>
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
                    <div class=" normal _bs ">
                        <div class=" text _q ">
                            <div style="margin-left:-10em; padding:1em;">
                            <div style="font-weight: 600; margin-bottom:.2em;">
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
                    <div class=" hover _br ">
                        <div class=" text _q ">
                            Select A Headshot For More Info
                        </div>
                    </div>
                </div>
            </container>
        </div>
        <div class="mGridBio">

        </div>
        <style>
            .altImageContainer {
                margin-left: 3.8em;
                margin-top: -2.5em;
                position: fixed;
            }

            .altImage img {
                height: 410px;
                width: 260px;
            }
        </style>
        <div class="mGridRight ">
            <div class="mGridB">
                <div class="mGridC altImageContainer">
                    <div class="mGridImages altImage">
                        <script>
                            $(document).ready(function () {
                                $("#alt_image2").click(function () {
                                    var $altImage2 = $(this).attr("value");
                                    $("#theBigPicture").load("get_pic2.php?choice=" + $altImage2)
                                });
                            });
                        </script>
                        <script>
                            $(document).ready(function () {
                                $("#alt_image3").click(function () {
                                    var $altImage3 = $(this).attr("value");
                                    $("#theBigPicture").load("get_pic3.php?choice=" + $altImage3)
                                });
                            });
                        </script>
                        <?php
                        $query = mysqli_query($con, "SELECT * FROM staff_info WHERE staff_id=$staff_id");
                        if ($getmodel_data = mysqli_fetch_assoc($query)) {
                            echo '<img onclick="F' . $getmodel_data["staff_id"] . '"() id="alt_image2" name="' . $getmodel_data["staff_id"] . '" value"' .
                                $getmodel_data["staff_image2_name"] . '" class="sidepics" src="pvt/admin/upload/' .
                                $getmodel_data["staff_image2_name"] . '"/>';
                            echo '<img onclick="F' . $getmodel_data["staff_id"] . '"() id="alt_image3" name="' .
                                $getmodel_data["staff_id"] .  '" value="' .
                                $getmodel_data["staff_image3_name"] . '" class="sidepics" src="pvt/admin/upload/' .
                                $getmodel_data["staff_image3_name"] . '"/>';
                        } ?>
                        <!--            <img onclick="F0()" id="F0" class="sidepics" src="image/F0.jpg"/>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<footer>
    <p>&copy 2020 JRSM Entertainment | <a href="index.php#about">Terms of Service</a> | <a
                href="index.php#about">About Us</a></p>
    <div class="socials"><i class="fa fa-twitter-square fa-inverse" aria-hidden="true"></i> <i
                class="fa fa-facebook-square fa-inverse" aria-hidden="true"></i> <i class="fa fa-rss-square fa-inverse"
                                                                                    aria-hidden="true"></i></div>
</footer>
</body>
</html>
