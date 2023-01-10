<?php require 'includes/config.php';
$choice = $_GET['choice'];
$query = "SELECT * FROM ad_subcategories WHERE main_category='$choice' ORDER BY sub_category ASC";
$result = $conn->query($query);
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row{'sub_dataset'} . "'>" . $row{'sub_category'} . "</option>";
} ?>

