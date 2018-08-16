<?php

	if(isset($_POST["parent_name"]) == $_POST["parent_name"]){
		$parent_name = $_POST["parent_name"];
        $password = $_POST["password"];
    //connect to the database
    $dbc = mysqli_connect('localhost', 'root', '', 'abtracks_server') or die('Error connecting to MySQL server');
    $check=mysqli_query($dbc,"select * from abtracks_parent_info where parent_name='$parent_name'");
    $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
          
   } else {  
    //insert results from the form input
      $query = "INSERT INTO abtracks_parent_info(parent_name,password) VALUES('$parent_name','$password')";
      $result = mysqli_query($dbc, $query) or die('Error querying database.');
      mysqli_close($dbc);
       }
    };


if(isset($_POST["device_imei"]) == $_POST["device_imei"]){
		$name = $_POST["device_imei"];
        $device_number = $_POST["device_number"];
    //connect to the database
    $dbc = mysqli_connect('localhost', 'root', '', 'abtracks_server') or die('Error connecting to MySQL server');
    $check=mysqli_query($dbc,"select * from abtracks_hardware_info where device_imei='$name'");
    $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
          echo "	<script type ='text/javascript'>
	alert('Failed To Register New Parent And Device!');
	window.location='register.php';
	</script>";
   } else {  
    //insert results from the form input
      $query = "INSERT INTO abtracks_hardware_info(device_imei,device_number) VALUES('$name','$device_number')";
      $result = mysqli_query($dbc, $query) or die('Error querying database.');
      mysqli_close($dbc);
    }
     echo "	<script type ='text/javascript'>
	alert('Successfully Register New Parent And Device');
	window.location='register_child.php';
    </script>";
    };
  ?>