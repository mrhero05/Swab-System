<?php 
include "db_connection.php";
date_default_timezone_set('Asia/Manila');
$date1 = $_POST["date1"];
$userid = $_POST["id"];
$time = "11:30AM";
$msg = "Example";
$bool = "Yes";
$status = "approve";
$sql = "INSERT INTO tbl_appointment (useri_id,apt_date,apt_time,apt_message,apt_boolean,apt_status) values ('$userid','$date1','$time','$msg','$bool','$status')";
$sql1 = "INSERT INTO tbl_approve (apt_id) values ('$userid')";
mysqli_query($connection,$sql1);
mysqli_query($connection,$sql);
exit();