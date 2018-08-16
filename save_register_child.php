<?php

	if(isset($_POST["child_nickname"]) == $_POST["child_nickname"]){
		$name = $_POST["child_nickname"];
        $parent_id = $_POST["parent_id"];
        $device_id = $_POST["device_id"];
    //connect to the database
    $dbc = mysqli_connect('localhost', 'root', '', 'abtracks_server') or die('Error connecting to MySQL server');
    $check=mysqli_query($dbc,"select * from abtracks_child_info where child_nickname='$name'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
          echo "	<script type ='text/javascript'>
	alert('Failed To Add New Child!');
	window.location='child.php';
	</script>";
   } else {  
    //insert results from the form input
      $query = "INSERT INTO abtracks_child_info(parent_id,child_nickname,device_id) VALUES('$parent_id','$name','$device_id')";

      $result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
     echo "	<script type ='text/javascript'>
	alert('Successfully Added New Child');
	window.location='abtracks.php';
	</script>";
    };
  ?>