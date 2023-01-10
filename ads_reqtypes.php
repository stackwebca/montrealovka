<?php require 'includes/config.php';
$choice = $_GET['choice'];
$query = "SELECT * FROM ad_reqtype_vals WHERE main_category='$choice'";
$result = $conn->query($query);
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row{'reqtype_val'} . "'>" . $row{'reqtype_val'} . "</option>";
} ?>
