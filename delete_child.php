<?php
	session_start();
	require_once("abtracks_conn.php");
	if(isset($_GET['file']) == $_GET['file']){
		$name = $_GET['file'];

$myquery = "DELETE FROM abtracks_child_info WHERE child_nickname = '$name'";

if($con->query($myquery)==TRUE){
    echo "	<script type ='text/javascript'>
	alert('Successfully Delete Child!');
	window.location='child.php';
	</script>";
} else {
    echo "Error : ".$con->error;
}
$con->close();
    }
?>