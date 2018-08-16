<?php
	session_start();
	require_once("abtracks_conn.php");
	if(isset($_GET['file']) == $_GET['file']){
		$name = $_GET['file'];

$myquery = "DELETE FROM abtracks_parent_info WHERE parent_name = '$name'";

if($con->query($myquery)==TRUE){
    echo "	<script type ='text/javascript'>
	alert('Successfully Delete Parent!');
	window.location='parent.php';
	</script>";
} else {
    echo "Error : ".$con->error;
}
$con->close();
    }
?>