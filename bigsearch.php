<?php session_start(); ?>
<?php include 'includes/config.php';

//from earlier js
$choice = $_GET['choice'];
$numPerPage = 8;
$thisContent = $choice;
$thisAd_ReqType = "Services Offered";
$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && ($_GET['per-page']) <= 50 ? $_GET['per-page'] : $numPerPage);
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$sql = "select * from site_usradverts WHERE ad_content LIKE '%$thisContent%' OR ad_subcategory LIKE '%$thisContent%'  
OR ad_title LIKE '%$thisContent%' OR ad_category LIKE '%$thisContent%' OR ad_busname LIKE '%$thisContent%' 
OR ad_reqtype LIKE '%$thisContent%' limit "
    . $start
    . " , " . $perPage . " ";
$total = $conn->query("select * from site_usradverts  WHERE ad_content LIKE '%$thisContent%'  
OR ad_title LIKE '%$thisContent%' OR ad_subcategory LIKE '%$thisContent%' OR ad_category LIKE '%$thisContent%' 
OR ad_busname LIKE '%$thisContent%' OR ad_reqtype LIKE '%$thisContent%' ")->num_rows;
$_SESSION['numpages'] = ceil($total / $perPage);
$pages = $_SESSION['numpages'];

echo '<style>
        .adresults{        
        min-width:43.vw!important;
        }
        </style>';

if ($adnumquery = mysqli_query($conn, "select * from site_usradverts  WHERE ad_content LIKE '%$thisContent%'  
OR ad_title LIKE '%$thisContent%' OR ad_subcategory LIKE '%$thisContent%' OR ad_category LIKE '%$thisContent%' 
OR ad_busname LIKE '%$thisContent%' OR ad_reqtype LIKE '%$thisContent%'")) {
    $thisResult = mysqli_num_rows($adnumquery);
}
echo '<div class=\'text-left\' style=\'padding-right:.5rem;\'><sup>&nbsp(' . $thisResult . ') results found</sup></div>';


$rows = $conn->query($sql);
while ($row = $rows->fetch_assoc()) {
    print '<tr><td><div class="panel panel-default filtered adresults panel_ads"' . 'data-category="' . $row["ad_subdataset"]
        . " " . $row["ad_reqtypedataset"] . " " . $row["ad_reqtype"] . '">' . '<div class="panel-heading"><div class="col-lg-6 col-md-6 col-sm-6>"<div><span class="h9 text-primary">' . $row["ad_subcategory"] .
        '</span>: &nbsp' . $row["ad_reqtype"] . '</div> <div class="col-lg-6 col-md-6 col-sm-6 text-info text-right">' . $row["ad_category"] . "</strong></div><br> " .
        "</div><div class='panel-body' style='margin-left:.9em;';> <strong style='color:black;font-size:1.1em;'>" . $row["ad_busname"] . "</strong><p style='text-decoration: underline';>" . $row["ad_title"]
        . "</p>" . $row["ad_content"] . '<span class="text-muted" style="font-size:.8em;">' . "<p></p>Phone:&nbsp" . $row["ad_tel"] . "<br>Email:&nbsp &nbsp" . $row["ad_email"] . "</span></div></div></tr></td>";

} ?>


<!--//the pages variable is not storing as session-->
