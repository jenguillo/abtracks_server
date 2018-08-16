<?php
	session_start();
	require_once("abtracks_conn.php");
	if(isset($_GET['file']) == $_GET['file']){
		$name = $_GET['file'];

$myquery = "DELETE FROM abtracks_hardware_info WHERE device_imei = '$name'";

if($con->query($myquery)==TRUE){
    echo "	<script type ='text/javascript'>
	alert('Successfully Delete Device!');
	window.location='device.php';
	</script>";
} else {
    echo "Error : ".$con->error;
}
$con->close();
    }
?>