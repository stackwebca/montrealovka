<?php session_start();

//local
$host = "localhost";
$user = "montrealovka_mvkadmin";
$pass = "iloveolegtymoshenko!";
$db = "montrealovka_mvkacms";

// Create connection
$con = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}