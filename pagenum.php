<?php session_start(); ?>
<?php include 'includes/config.php';

$_SESSION['thisPage'] = $_GET['currPage'];
?>