


<?php 
include_once("abtracks_conn.php");
mysql_connect("localhost","root","");
mysql_select_db("abtracks_server");

$parent_id = $_POST["parent_id"];
$child_id = $_POST["child_id"];
$child_nickname = $_POST["child_nickname"];
$device_id = $_POST["device_id"];

$myquery = "UPDATE abtracks_child_info SET `parent_id` = '$parent_id',`child_nickname` = '$child_nickname',`device_id` = '$device_id' 
WHERE `child_id` = '$child_id'";



if($con->query($myquery)==TRUE){
    echo "	<script type ='text/javascript'>
	alert('Successfully Edited!');
	window.location='child.php';
	</script>";
} else {
    echo "Error : ".$con->error;
}
?>