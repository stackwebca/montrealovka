<?php include ('script/config/header.php'); ?>
<?php
require_once ('script/pdocrud.php');
 
$pdocrud = new PDOCrud();

// change the type of the dept_id field from textfield to select dropdown
$data =  $pdocrud->getPDOModelObj()->select("client_booking");
$options = array();
foreach($data as $record) {
    $options[$record['staff_id']] = $record['staff_id'];
}
$pdocrud->fieldTypes("staff_name", "select");
$pdocrud->fieldDataBinding("staff_id", $options, "", "","array");
 
$pdocrud->crudTableCol(array("staff_name", "booked", "client_name","message"));
$pdocrud->joinTable("staff_info", "staff_info.staff_id = client_booking.staff_id", "INNER JOIN");
echo $pdocrud->dbTable("client_booking")->render();
?>
<?php include 'script/config/footer.php'; ?>