


<?php 
include_once("abtracks_conn.php");
mysql_connect("localhost","root","");
mysql_select_db("abtracks_server");

$device_id = $_POST["device_id"];
$device_imei = $_POST["device_imei"];
$device_number = $_POST["device_number"];

$myquery = "UPDATE abtracks_hardware_info SET `device_imei` = '$device_imei' ,`device_number` = '$device_number' WHERE `device_id` = '$device_id'";


if($con->query($myquery)==TRUE){
    echo "	<script type ='text/javascript'>
	alert('Successfully Edited!');
	window.location='device.php';
	</script>";
} else {
    echo "Error : ".$con->error;
}
?>