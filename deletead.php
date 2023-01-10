<?php
include 'includes/config.php';
$id = (int)$_GET['id'];
$sql = "delete from site_usradverts where ad_id = '$id'";
$val = $conn->query($sql);
if ($val) {
    header('location: profile.php');
};
?>