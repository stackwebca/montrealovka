<?php session_start(); ?>
<?php include 'includes/config.php';

$_SESSION['Chosen'] = $_GET['choice'];
$chosen = $_SESSION['Chosen'];

if (!isset($_SESSION['numPerPage'])) {
    $_SESSION['numPerPage'] = 5;
} else {
    $numPerPage = $_SESSION['numPerPage'];
}

?>
</div>