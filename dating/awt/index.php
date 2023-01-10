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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
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
<body class="bg_1">
<!--    Primary Content-->
<header>
  <container class="logo_container">
    <img id="logo" src="image/logo.png"/>
  </container>
  <container class="nav_container">
    <nav class="topnav" id="myTopnav">
      <a href="index.php">Home</a>
<!--      <a href="models.php" class="active">Models</a>-->
<!--      <a href="featured.php">Featured</a>-->
<!--      <a href="testimonials.php">Testimonials</a>-->
<!--      <a href="leadership.php">Leadership</a>-->
<!--      <a href="contact.php">Contact</a>-->
      <a href="javascript:void(0);" class="icon" onclick="navCollapse()">
        <i class="fa fa-bars"></i>
      </a>
    </nav>
  </container>
</header>
<main>
  <div id="mainContainer">
    <div class="mGridLeft">
      <div class="mGridB">
        <div class="mGridC">
          <div class="mGridImages">
            <img onclick="F0()" id="F0" class="sidepics" src="image/F0.jpg"/>
            <img  onclick="F10()" id="F10" class="sidepics" src="image/F10.jpg"/>
            <img onclick="F4()" id="F4" class="sidepics" src="image/F4.jpg"/>
            <img onclick="F12()" id="F12" class="sidepics" src="image/F12.jpg"/>
            <img onclick="F5()" id="F5" class="sidepics" src="image/F5.jpg"/>
            <img onclick="F7()" id="F7" class="sidepics" src="image/F7.jpg"/>
            <img onclick="F6()" id="F6" class="sidepics" src="image/F6.jpg"/>
            <img onclick="F8()" id="F8" class="sidepics" src="image/F8.jpg"/>
            <img onclick="F11()" id="F11" class="sidepics" src="image/F11.jpg" />
            <img onclick="F9()" id="F9" class="sidepics" src="image/F9.jpg"/>
            <img onclick="F2()" id="F2" class="sidepics" src="image/F2.jpg"/>
            <img src="image/BN1.jpg"/>
          </div>
        </div>
      </div>
    </div>
    <div class="mGridBigPic">
      <container class="profileimg">
        <img src="./image/female_lg1.jpg" id="bigImage"/>
      </container>
    </div>
    <div class="mGridBio">
      <container class="profileBio">
        <div id="innerBio">
          <h3>Book This Model</h3>
          <div>The Database Bio Will Come Here</div>
          <!-- start date time code -->
          <?php
          $host = "144.217.242.80";    /* Host name */
          $user = "jrsm_super";         /* User */
          $password = "89297e2ce464e766439d2c31f9c7d02ef30090a4";         /* Password */
          $dbname = "jrsm_services";   /* Database name */

          // Create connection
          $con = mysqli_connect($host, $user, $password, $dbname);

          // Check connection
          if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
          }
          // Set Variables
          $userid = "1";  // <-- This ID sets the details - must set with javascript
          $id = "$userid";
          $strid = strval($id);
          $DateTime = $_POST['datetime'];
          $DateTimeCheck = $DateTime . $strid;
          $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
          $con->exec("SET CHARACTER SET utf8");
          $sql = "SELECT booked FROM user_booking WHERE `booked` = :booked";
          $sqlprep = $con->prepare($sql);
          $ar_val = array(':booked' => $DateTimeCheck);
          $error = '';

          if (isset($_POST['datetime'])) {
            if (!$_POST['name']) {
              $error = "<br/>- Please enter your name";
            }
            if (!$_POST['email']) {
              $error .= "<br/>- Please enter your email";
            }
            if (!$_POST['message']) {
              $error .= "<br/>- Please enter a message";
            }
            if (!$_POST['check']) {
              $error .= "<br/>- Please confirm you are human";
            }
            if ($sqlprep->execute($ar_val)) {
              while ($row = $sqlprep->fetch(PDO::FETCH_OBJ)) {
                $DateTimeExists = $row->booked;
              }
            }
            if (isset($DateTimeExists) && $DateTimeExists != '') {
              $error .= "<br/>- The time you have requested is unavailable";
            }

            if ($error) {
              $result = '<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error</strong>. Please correct the following: ' . $error . '</div>';
            } else {
              mail("4jackriz@gmail.com", "Contact message", "Name: " . $_POST['name'] . "
                    Email: " . $_POST['email'] . "
                    When: " . $_POST['datetime'] . "
                    Message: " . $_POST['message']);
              {
                $result = '<div class="alert alert-success" role="alert">Thank you, someone will be in touch soon to confirm your appointment. </div>';
                $id = "$userid";
                $message = $_POST['message'];
                $client_name = $_POST['name'];
                $strid = strval($id);
                $DateTime = $_POST['datetime'];
                $DateTimeCheck = $DateTime . $strid;
                $strid = strval($id);
                $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO user_booking ( user_id, booked, client_name, message ) VALUES ( :id, :booked, :client_name, :message )";
                $q = $con->prepare($sql);
                $q->execute(array(':booked' => $DateTime . $strid,
                  ':id' => $id, ':client_name' => $client_name, ':message' => $message));
                $con = null;
              }
            }
          }
          ?>
          <?php echo $result; ?>

          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <form method="post" role="form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your name"
                       value="<?php echo $_POST['name']; ?>">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your email"
                       value="<?php echo $_POST['email']; ?>">
              </div>

              <div class="form-group" align="left" style="float:none">
                <label class="control-label">Date/Time</label>
                <div class='input-group date' id='datetimepicker1' style="color:black; float:none">
                  <input type='text' name="datetime" class="form-control" placeholder="desired time"
                         value="<?php echo $_POST['datetime']; ?>">
                  <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                         </span>
                </div>
              </div>
              <div class="form-group">
                                <textarea name="message" rows="5" class="form-control"
                                          placeholder="message..."><?php echo $_POST['message']; ?></textarea>
              </div>
              <div>
                <label class="readable" style="width:100%; text-align: left">I am human</label>
                <div style="width:2em">
                  <input type="checkbox" name="check" style="text-align: left">
                </div>
              </div>
              <div style="padding: .5em">
                <input type="submit" name="submit" class="btn btn-success" value="Book Now!" style="width:13em; text-align:center; background: #f0ace6; "/>
              </div>
              <div class='table-responsive-sm' id='schedule' align='center'>
                <h4 style="text-align: left">Current Availability</h4>
                <?php
                $host = "144.217.242.80";    /* Host name */
                $user = "jrsm_super";         /* User */
                $password = "89297e2ce464e766439d2c31f9c7d02ef30090a4";         /* Password */
                $dbname = "jrsm_services";   /* Database name */

                // Create connection
                $con = mysqli_connect($host, $user, $password, $dbname);

                // Check connection
                if (!$con) {
                  die("Connection failed: " . mysqli_connect_error());
                }
                $id = $userid;
                $sql = "SELECT * FROM user_schedule";
                $result = mysqli_query($con, $sql) or die("Bad Query: $sql");

                echo "<table id='schedule' border='1' width='auto' align='center' style='font-size: 1em'>";

                echo "<tr class='bg-light' align='center'><td>sun</td><td>mon</td><td>tue</td><td>wed</td><td>thu</td><td>fri</td><td>sat</td></tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr class='table-light' align='center'><td>{$row['sun']}</td><td>{$row['mon']}</td><td>{$row['tue']}</td><td>{$row['wed']}</td><td>{$row['thu']}</td><td>{$row['fri']}</td><td>{$row['sat']}</td></tr>";
                }
                echo "</table>";
                ?>
                <br><br><br><br>
              </div>
            </form>

          </form>
        </div>
      </container>
    </div>
    <div class="mGridRight">
      <div class="mGridB">
        <div class="mGridC">
          <div class="mGridImages">
            <img  onclick="M3()" id="M3" src="image/M3.jpg"/>
            <img onclick="M2()" id="M2" src="image/M2.jpg"/>
            <img  onclick="M1()" id="M1" src="image/M1.jpg"/>
            <img  onclick="M4()" id="M4" src="image/M4.jpg"/>
            <img  onclick="M5()" id="M5" src="image/M5.jpg"/>
            <img  onclick="M6()" id="M6" src="image/M6.jpg"/>
            <img onclick="M7()" id="M7" src="image/M7.jpg"/>
            <img  onclick="M8()" id="M8" src="image/M8.jpg"/>
            <img  onclick="M9()" id="M9" src="image/M9.jpg"/>
            <img  onclick="M10()" id="M10" src="image/M10.jpg"/>
            <img  onclick="M11()" id="M11" src="image/M11.jpg"/>
            <img src="image/BN1.jpg"/>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>
<footer>
  <p>&copy 2020 JRSM Entertainment | <a href="index.php#about">Terms of Service</a> | <a href="index.php#about">About Us</a></p>
  <div class="socials"><i class="fa fa-twitter-square fa-inverse" aria-hidden="true"></i> <i
      class="fa fa-facebook-square fa-inverse" aria-hidden="true"></i> <i class="fa fa-rss-square fa-inverse"
                                                                          aria-hidden="true"></i></div>
</footer>
</body>
</html>
