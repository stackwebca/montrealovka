<!DOCTYPE html>
<html lang="en">
<head>
  <!--    Meta-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact us, Get in touch with a talent manager today and find the perfect model for your campaign."</title>
  <meta name="description" content="Are you looking for the worlds finest models for your marketing campaign? Click the link for the hottest models the world has to offer.">
  <meta name="keywords" content="Models,Runway,Fashion,Photoshoot">
  <meta name="author" content="Steve Masterson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--    Style Sheets-->
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="css/core.css">
  <link rel="stylesheet" href="css/contact.css">

  <!-- Font-->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--    FavIcon-->
  <link rel="icon" type="./img/png" href="./img/favicon.png">

  <!--    Date Time Picker-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

  <!--    Scripts-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript"
          src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="./js/myScripts.js"></script>
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
<body>
<!--    Primary Content-->
<header>
  <container class="logo_container">
    <img id="logo" src="./img/logo.png"/>
  </container>
  <container class="nav_container">
    <nav class="topnav" id="myTopnav">
      <a href="index.php" class="active">Home</a>
      <a href="models.php">Models</a>
      <a href="featured.php">Featured</a>
      <a href="testimonials.php">Testimonials</a>
      <a href="leadership.php">Leadership</a>
      <a href="contact.php">Contact</a>
      <a href="javascript:void(0);" class="icon" onclick="navCollapse()">
        <i class="fa fa-bars"></i>
      </a>
    </nav>
  </container>
</header>
<div class="mainContact">
  <container id="contactPage">
    <container class="cHeroImg">
      <div id="innerHero">
        <img class="sidepics" src="img/contact_heroImage.jpg"/>
      </div>
    </container>
    <div class="contactGrid">
      <div class="col-md-13">
        <div class="contact">
          <div class="col-md-13">
          <div class="center">
            <h3>Send Us A Secure Message</h3>
          </div>
          <h3>Contact Us</h3>
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

          if (isset($_POST['email'])) {
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

            if ($error) {
              $result = '<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error</strong>. Please correct the following: ' . $error . '</div>';
            } else {
              mail("stevie.m672@gmail.com", "Contact message", "Name: " . $_POST['name'] . "
                    Email: " . $_POST['email'] . "
                    Message: " . $_POST['message']);
              {
                $result = '<div class="alert alert-success" role="alert">Thank you, someone will return your message soon. </div>';
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
              <div class="form-group m-1">
                <input type="email" name="email" class="form-control" placeholder="Your email"
                       value="<?php echo $_POST['email']; ?>">
              </div>
              <div class="form-group m-1">
                                <textarea name="message" rows="5" class="form-control"
                                          placeholder="message..."><?php echo $_POST['message']; ?></textarea>
              </div>
              <div>
                <label class="readable" text-align: left">I am human</label>
                <div style="width:2em">
                  <input class="form-group" type="checkbox" name="check" style="text-align: left">
                </div>
              </div>
              <div class="form-group" style="padding: .5em">
                <input type="submit" name="submit" class="btn btn-success" value="Send"
                       style="width:13em; text-align:center; background: #dedac4; "/>
              </div>
            </form>
          </form>
        </div>
        </div>
      </div>
    </div>
    <container class="map">
      <div class="col-md-13">
        <div class="center">
          <h3>Visit Our Office Location</h3>
        </div>
      </div>
      <div id="googleMap"></div>
      <p><br>
      <h5>Our office is conveniently located in the heart of downtown Toronto.</h5></p>
      <p>100 King Street West <br>
        Suite 555 <br>
        Toronto, ON M5M 5Y5 <br>
        Call us at: <a href="tel:+62896706255135">555-555-5555</a> <br>
        Fax: 555-555-5556 <br>
      <p>We are open 8am to 6pm weekdays</p>
      </p>
    </container>
    <div class="cDetails">
      <div class="col-md-12">
        <div class="c-press-articles__copy">
          <div class="center">
            <h3>How To Reach Our Team Members<br></h3>
          </div>
          <h3>Support</h3>
          <p>We have an amazing team of support ambassadors that have the answers to dozens of the most common questions
            about JRSM Models! <a href="leadership.php">Check it out here.</a></p>
          <p>If you don’t find what you need, please submit a message through our contact form and our amazing staff
            will be in touch soon.</p>
        </div>
        <div class="c-press-articles__copy">
          <h3>Sales</h3>
          <p>Interested in learning more about JRSM? To learn more check out our about section <a
              href="index.php#about">About Us</a></p>
        </div>
        <div class="c-press-articles__copy">
          <h3>Models</h3>
          <p>Are you a model looking for representation? Get connected with our talent management team at <a
              href="mailto:talent@jrsmmodels.com">talent@jrsmmodels.com.</a></p>
        </div>
        <div class="c-press-articles__copy">
          <h3>Talent Agent</h3>
          <p>Are you an agent, manager, or representative that would like to partner with JRSM Models? Get connected
            with our Partner team at <a href="mailto:talent@jrsmmodels.com">talent@jrsmmodels.com.</a></p>
        </div>
        <div class="c-press-articles__copy">
          <h3>General Questions</h3>
          <p>Have a general question for us? Contact us at <a href="mailto:info@jrsmmodels.com">info@jrsmmodels.com.</a>
          </p>
        </div>
      </div>
      <div class="cBlank3"></div>
  </container>
</div>
<footer>
  <p>&copy 2020 JRSM Entertainment | <a href="index.php#about">Terms of Service</a> | <a href="index.php#about">About
      Us</a></p>
  <div class="socials"><i class="fa fa-twitter-square fa-inverse" aria-hidden="true"></i> <i
      class="fa fa-facebook-square fa-inverse" aria-hidden="true"></i> <i class="fa fa-rss-square fa-inverse"
                                                                          aria-hidden="true"></i></div>
</footer>
<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(43.649051, -79.381694),
            zoom: 18,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>

<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYhsAcS0bME4ofChrkaTNqUCIUaddTFy8&callback=myMap"></script>
</body>
</html>
