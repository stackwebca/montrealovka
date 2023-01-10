<?php
include('../../includes/config.php');
?>

<?php
//This will have to be changed to "profile ID based on register table"
$staff_id = 1;

?>

<?php

//update this to default to a users profile ID for dating will require a login page
$sql = "select * from staff_info where staff_id=$staff_id";
$result = mysqli_query($con, $sql);
$staffdata = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <!--    Meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hire world class fashion models, male and female models available"</title>
    <meta name="description" content="Hire top rated male and female models for your advertising campaign">
    <meta name="keywords" content="Models,Runway,Fashion,Photoshoot">
    <meta name="author" content="Steve Masterson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    Date Time Picker-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!--    Style Sheets-->
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/core.css">
    <link rel="stylesheet" href="../../css/models.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    FavIcon-->
    <link rel="icon" type="image/png" href="../../image/favicon.png">
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
<!--  Main Grid System-->
<div class="header"><div class='container-fluid mainBody'><div class="blink_me" id="backtop">&#9650;</div>
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

                </div>
                <div style="height: .5em;"></div>
                <div class="collapse navbar-collapse" id="mobileNav">
					<?php include '../../../navbar.php'?>
                    <!--        Div to lock in the nav when in responsive since all content and live links are on the main page-->
                </div>
        </nav>
        <script>
            // use this function example to search dating profiles, create symbols to search gender
            $(document).ready(function () {
                $('.searchbtn').click(function () {
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
                            &nbsp<i
                                    class="fas fa-fire text-warning flameglow"></i>
                        </div>
                    </div>
                </div>
                <!--                This Logo Set "transtext" is hidden in desktop and will show when in mobile view.-->
            </div>
        </div>
    </div>
<style>
    #main_content {
        top: 8.25em;
        padding-bottom: 6em;
        overflow-x: -moz-hidden-unscrollable;
    }

    .card {
        margin-top: .5em;
        height: 520px;
        margin-bottom: 2em;
    }

    label {
        margin-top: -.75em;
        padding-left: 1.5em;
    }

    textarea {
        resize: none;
        border-left: 0 !important;
        border-right: 0 !important;
        border-top: 0 !important;
    }
</style>
<main id="main_content" style="width:99%;">
    <div id="no_show">
    </div>
    <script>
        $(document).ready(function () {
            $("#staff_list").change(function () {
                $("#no_show").load("staff_id.php?choice=" + $("#staff_list").val());
                console.log($("#staff_list").val());
                window.location.reload();
            });
        });
    </script>
    <div class="col-md-1" style="margin-bottom:.5em;"></div>
    <div class="col-md-2" style="margin-bottom:.5em;">
    </div>
    <div id="staff_id" style="display: none;"></div>

    <div class="col-md-2" style="margin-bottom:.5em; z-index:1;">
<!--        Was add profile, will automatically insert a profile when user clicks in-->
        <?php
        if (isset($_POST['add_staff'])) {
            $sql = mysqli_query($con, "INSERT INTO staff_info (staff_can_sms) VALUES ('no')");
            $next_id = mysqli_query($con, "SELECT * FROM staff_info ORDER BY 'staff_id' DESC");
            while ($staff_data = mysqli_fetch_assoc($next_id)) {
                $_SESSION['staffID'] = $staff_data['staff_id'];
            }
            echo "<meta http-equiv='refresh' content='0'>";
        }
        ?>
    </div>
    <div class="col-md-2" style="margin-bottom:.5em;">

    </div>

    <div class="col-md-2" style="margin-bottom:.5em;">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <button name="delete_profile" id="delete_profile" type="submit" class="btn btn-danger btn-block"
                    style="margin-bottom:.5em;
        z-index:1">Delete Profile
            </button>
        </form>
    </div>
    <?php
    if (isset($_POST['delete_profile'])) {
        $del_query = ("DELETE FROM staff_info WHERE staff_id = $staff_id");
        mysqli_query($con, $del_query) or die(mysqli_error($con));
        $next_id = mysqli_query($con, "SELECT * FROM staff_info ORDER BY 'staff_id' ASC");
        while ($staff_data = mysqli_fetch_assoc($next_id)) {
            $_SESSION['staffID'] = $staff_data['staff_id'];
        }
        echo "<meta http-equiv='refresh' content='0'>";
    };
    ?>

    <div class="col-md-2">
        <a href="logout.php">
            <button type="button" class="btn btn-dark btn-block" style="margin-bottom:.5em; z-index:1;">Sign
                Out
            </button>
        </a>
    </div>
    <div class="col-md-1" style="margin-bottom:.5em;"></div>
    <div class="col-md-12">
        <h3 class="text-center">Your Dating Profile</h3>
    </div>
    <form id="staff_info" method="post" class="md-form" enctype='multipart/form-data' action="<?php echo
    htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <div class="container-fluid">
            <div class="col-md-1"></div>
            <div class="col-md-2" style="margin-top:-1em!important;">
                <div class="card">
                    <h5 class="card-header elegant-color white-text text-center py-4">
                        <strong>New Messages</strong>
                    </h5>
                    <div class="card-body px-lg-5 pt-0">

                    </div>
                </div>
            </div>
            <div class="col-md-2" style="margin-top:-1em!important;">
                <div class="card">
                    <h5 class="card-header elegant-color white-text text-center py-4">
                        <strong>Your Details</strong>
                    </h5>
                    <div class="card-body px-lg-5 pt-0">
                        <input type="text" id="staff_name" name="staff_name" class="form-control"
                               placeholder="Username or Firstname" <?php if (!empty($staffdata['staff_name'])) {
                            echo 'value="'
                                . $staffdata['staff_name'] . '"';
                        } ?>>
                        <input type="text" id="staff_age" name="staff_age" class="form-control"
                               placeholder="Age" <?php if (!empty($staffdata['staff_age'])) {
                            echo 'value="'
                                . $staffdata['staff_age'] . '"';
                        } ?>>
                        <input type="text" id="staff_height_inches" name="staff_height_inches" class="form-control"
                               placeholder="Height in inches"
                            <?php if (!empty($staffdata['staff_height_inches'])) {
                                echo 'value="' . $staffdata['staff_height_inches'] . '"';
                            } ?>>
                        <input type="text" id="staff_hair_colour" name="staff_hair_colour" class="form-control"
                               placeholder="Hair colour"
                            <?php if (!empty($staffdata['staff_hair_colour'])) {
                                echo 'value="' . $staffdata['staff_hair_colour'] . '"';
                            } ?>>
                        <input type="text" id="staff_eye_colour" name="staff_eye_colour" class="form-control"
                               placeholder="Eye color"
                            <?php if (!empty($staffdata['staff_eye_colour'])) {
                                echo 'value="' . $staffdata['staff_eye_colour'] . '"';
                            } ?>>
                        <input type="text" id="staff_city" name="staff_city" class="form-control"
                               placeholder="Current City"
                            <?php if (!empty($staffdata['staff_city'])) {
                                echo 'value="' . $staffdata['staff_city'] . '"';
                            } ?>>
                        <input type="text" id="staff_phone" name="staff_phone" class="form-control"
                               placeholder="tel. 555-555-5555" <?php if (!empty($staffdata['staff_phone'])) {
                            echo 'value="'
                                . $staffdata['staff_phone'] . '"';
                        } ?>>
                        <input type="email" id="staff_email" name="staff_email" class="form-control"
                               placeholder="Email" <?php if (!empty($staffdata['staff_email'])) {
                            echo 'value="'
                                . $staffdata['staff_email'] . '"';
                        } ?>>
                        <input type="text" id="staff_can_sms" name="staff_can_sms" class="form-control"
                               placeholder="Single?" <?php if (!empty($staffdata['staff_can_sms'])) {
                            echo 'value="'
                                . $staffdata['staff_can_sms'] . '"';
                        } ?>>
                        <textarea id="staff_services" name="staff_services" class="form-control" placeholder="A
                        little about yourself." rows="4";
                                  style="margin-top:1em;"><?php if (!empty($staffdata['staff_services'])) {
                                echo $staffdata['staff_services'];
                            } ?>
                        </textarea>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="margin-top:-1em!important;">
                <div class="card">
                    <h5 class="card-header elegant-color white-text text-center py-4">
                        <strong>Main Photo</strong>
                    </h5>
                    <sub><p class="text-center text-muted"
                            style="margin-top:2em;">(Recommended w:640px h:1080px max:200KB)
                    </sub></p>
                    <div class="card-body px-lg-5 pt-0">
                        <?php
                        if (isset($_POST['photo1_upload'])) {
                            $image1_name = $_FILES['photo1_image']['name'];
                            $target_dir = "upload/";
                            $target_file = $target_dir . basename($_FILES["photo1_image"]["name"]);
                            // Select file type
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                            // Valid file extensions
                            $extensions_arr = array("jpg", "jpeg", "png", "gif");
                            // Check extension
                            if (in_array($imageFileType, $extensions_arr)) {
                                // Convert to base64
                                $image_base64 = base64_encode(file_get_contents($_FILES['photo1_image']['tmp_name']));
                                $image1 = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
                                // Insert record
                                $query1 = "UPDATE staff_info SET staff_image1_name='$image1_name' WHERE staff_id=$staff_id";
                                mysqli_query($con, $query1) or die(mysqli_error($con));

                                $query2 = "UPDATE staff_info SET staff_image1='$image1' WHERE staff_id=$staff_id";
                                mysqli_query($con, $query2) or die(mysqli_error($con));
                                // Upload file
                                move_uploaded_file($_FILES['photo1_image']['tmp_name'], 'upload/' . $image1_name);
                                echo "<meta http-equiv='refresh' content='0'>";
                            }
                        }
                        ?>
                        <?php
                        $sql = "select * from staff_info where staff_id=$staff_id";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image_src = $row['staff_image1'];
                        ?>
                        <div class="text-center">
                            <img src="<?php echo $image_src ?>"
                                 onerror="this.src='../.' + './img/logo_placehold.png'" ; alt="photo1"
                                 style="max-width:150px; max-height:200px; margin-bottom:1em;">
                        </div>
                        <div style="margin-top:60px;">
                            <p>Suggested filename: <strong><span></span>yourName_1.jpg</strong></p>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                                  enctype='multipart/form-data'>
                                <input type="file" name="photo1_image" id="photo1_image" class="form-control"
                                       style="margin-top:2em;">
                                <div id="photo_1" style="display:block; width:auto; text-align: center; margin-top:1em;
                            margin-bottom:2em;">
                                    <input id="photo1" type='submit' value='Upload photo' name='photo1_upload'
                                           style="bottom:0;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="margin-top:-1em!important;">
                <div class="card">
                    <h5 class="card-header elegant-color white-text text-center py-4">
                        <strong>Photo 2</strong>
                    </h5>
                    <sub><p class="text-center text-muted" style="margin-top:2em;">(Recommended w:640px h:1080px max:
                            200KB)
                    </sub></p>
                    <div class="card-body px-lg-5 pt-0">
                        <?php
                        if (isset($_POST['photo2_upload'])) {
                            $image2_name = $_FILES['photo2_image']['name'];
                            $target_dir = "upload/";
                            $target_file = $target_dir . basename($_FILES["photo2_image"]["name"]);
                            // Select file type
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                            // Valid file extensions
                            $extensions_arr = array("jpg", "jpeg", "png", "gif");
                            // Check extension
                            if (in_array($imageFileType, $extensions_arr)) {
                                // Convert to base64
                                $image_base64 = base64_encode(file_get_contents($_FILES['photo2_image']['tmp_name']));
                                $image2 = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
                                // Insert record
                                $query3 = "UPDATE staff_info SET staff_image2_name='$image2_name' WHERE staff_id=$staff_id";
                                mysqli_query($con, $query3) or die(mysqli_error($con));

                                $query4 = "UPDATE staff_info SET staff_image2='$image2' WHERE staff_id=$staff_id";
                                mysqli_query($con, $query4) or die(mysqli_error($con));
                                // Upload file
                                move_uploaded_file($_FILES['photo2_image']['tmp_name'], 'upload/' . $image2_name);
                                echo "<meta http-equiv='refresh' content='0'>";
                            }
                        }
                        ?>
                        <?php
                        $sql = "select * from staff_info where staff_id=$staff_id";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image_src2 = $row['staff_image2'];
                        ?>
                        <div class="text-center">
                            <img src="<?php echo $image_src2 ?>"
                                 onerror="this.src='../.' + './img/logo_placehold.png'" ; alt="photo2"
                                 style="max-width:150px; max-height:200px; margin-bottom:1em;">
                        </div>
                        <div style="margin-top:60px;">
                            <p>Suggested filename: <strong><span></span>yourName_2.jpg</strong></p>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                                  enctype='multipart/form-data'>
                                <input type="file" name="photo2_image" id="photo2_image" class="form-control"
                                       style="margin-top:2em;">
                                <div id="photo_2" style="display:block; width:auto; text-align: center; margin-top:1em;
                            margin-bottom:2em;">
                                    <input id="photo2" type='submit' value='Upload photo' name='photo2_upload'
                                           style="bottom:0;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="margin-top:-1em!important;">
                <div class="card">
                    <h5 class="card-header elegant-color white-text text-center py-4">
                        <strong>Photo 3</strong>
                    </h5>
                    <sub><p class="text-center text-muted" style="margin-top:2em;">(Recommended w:640px h:1080px max:
                            200KB)
                    </sub></p>
                    <div class="card-body px-lg-5 pt-0">
                        <?php
                        if (isset($_POST['photo3_upload'])) {
                            $image3_name = $_FILES['photo3_image']['name'];
                            $target_dir = "upload/";
                            $target_file = $target_dir . basename($_FILES["photo3_image"]["name"]);
                            // Select file type
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                            // Valid file extensions
                            $extensions_arr = array("jpg", "jpeg", "png", "gif");
                            // Check extension
                            if (in_array($imageFileType, $extensions_arr)) {
                                // Convert to base64
                                $image_base64 = base64_encode(file_get_contents($_FILES['photo3_image']['tmp_name']));
                                $image3 = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
                                // Insert record
                                $query5 = "UPDATE staff_info SET staff_image3_name='$image3_name' WHERE staff_id=$staff_id";
                                mysqli_query($con, $query5) or die(mysqli_error($con));

                                $query6 = "UPDATE staff_info SET staff_image3='$image3' WHERE staff_id=$staff_id";
                                mysqli_query($con, $query6) or die(mysqli_error($con));
                                // Upload file
                                move_uploaded_file($_FILES['photo3_image']['tmp_name'], 'upload/' . $image3_name);
                                echo "<meta http-equiv='refresh' content='0'>";
                            }
                        }
                        ?>
                        <?php
                        $sql = "select * from staff_info where staff_id=$staff_id";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image_src3 = $row['staff_image3'];
                        ?>
                        <div class="text-center">
                            <img src="<?php echo $image_src3 ?>"
                                 onerror="this.src='../.' + './img/logo_placehold.png'" ; alt="photo3"
                                 style="max-width:150px; max-height:200px; margin-bottom:1em;">
                        </div>
                        <div style="margin-top:60px;">
                            <p>Suggested filename: <strong><span></span>yourgirlsName_3.jpg</strong></p>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                                  enctype='multipart/form-data'>
                                <input type="file" name="photo3_image" id="photo3_image" class="form-control"
                                       style="margin-top:2em;">
                                <div id="photo_3" style="display:block; width:auto; text-align: center; margin-top:1em;
                            margin-bottom:2em;">
                                    <input id="photo3" type='submit' value='Upload photo' name='photo3_upload'
                                           style="bottom:0;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div style="display:block; width:auto; text-align: center; margin-top:-1.25em; margin-bottom:1em;">
                    <button class="btn btn-lg btn-outline-elegant btn-rounded z-depth-0 my-4 waves-effect"
                            id="save_staffInfo"
                            name="save_staffInfo" value='Save name' type="submit">Save Dating Profile
                    </button>
                </div>
            </div>
    </form>
    <?php
    if (isset($_POST['save_staffInfo'])) {

//        This needs to be user id from Register table
        $this_id = 1;

        $staff_name = $_POST['staff_name'];
        $staff_age = $_POST['staff_age'];
        $staff_height_inches = $_POST['staff_height_inches'];
        $staff_hair_colour = $_POST['staff_hair_colour'];
        $staff_eye_colour = $_POST['staff_eye_colour'];
        $staff_city = trim($_POST['staff_city']);
        $staff_phone = trim($_POST['staff_phone']);
        $staff_email = trim($_POST['staff_email']);
        $staff_can_sms = $_POST['staff_can_sms'];
        $staff_services = $_POST['staff_services'];

        $query3 = "UPDATE staff_info SET
            staff_name='$staff_name', staff_age='$staff_age', staff_height_inches='$staff_height_inches',
            staff_hair_colour='$staff_hair_colour', staff_eye_colour='$staff_eye_colour', staff_city='$staff_city', staff_phone='$staff_phone', 
            staff_email='$staff_email', staff_can_sms='$staff_can_sms',staff_services='$staff_services'            
            WHERE staff_id=$this_id";
        mysqli_query($con, $query3) or die(mysqli_error($con));
        echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>
    </div>
</main>
<footer>
    <p>&copy 2020 Montrealovka | <a href="index.php#about">Terms of Service</a> | <a
                href="index.php#about">About Us</a></p>
    <div class="socials"><i class="fa fa-twitter-square fa-inverse" aria-hidden="true"></i> <i
                class="fa fa-facebook-square fa-inverse" aria-hidden="true"></i> <i class="fa fa-rss-square fa-inverse"
                                                                                    aria-hidden="true"></i></div>
</footer>
<!-- MDB core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.0/angular.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script src="../../../js/sitescripts.js"></script>
</body>
</html>
