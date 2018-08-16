


<?php 
include_once("abtracks_conn.php");
mysql_connect("localhost","root","");
mysql_select_db("abtracks_server");

$parent_id = $_POST["parent_id"];
$parent_name = $_POST["parent_name"];
$password = $_POST["password"];

$myquery = "UPDATE abtracks_parent_info SET `parent_name` = '$parent_name',`password` = '$password' WHERE `parent_id` = '$parent_id'";



if($con->query($myquery)==TRUE){
    echo "	<script type ='text/javascript'>
	alert('Successfully Edited!');
	window.location='parent.php';
	</script>";
} else {
    echo "Error : ".$con->error;
}
?>