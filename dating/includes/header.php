<?php include 'core/config.php'; ?>
<style>
  body {
    background: black;
    background-size: cover;
  }</style>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

  <?php

  $userid = "1";
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
  if (isset($_POST['datetime'])){

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
    if (isset($DateTimeExists) && $DateTimeExists != ''){
      $error .= "<br/>- The time you have requested is unavailable";
    }

    if ($error) {
      $result = '<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error</strong>. Please correct the following: ' . $error . '</div>';
    } else {
      mail("steviem.672@gmail.com", "Contact message", "Name: " . $_POST['name'] . "
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
          ':id' => $id, ':client_name'=> $client_name, ':message'=> $message));
        $con = null;
      }
    }
  }
  ?>

