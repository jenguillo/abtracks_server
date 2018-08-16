<?php

	if(isset($_POST["device_imei"]) == $_POST["device_imei"]){
		$name = $_POST["device_imei"];
        $device_number = $_POST["device_number"];
    //connect to the database
    $dbc = mysqli_connect('localhost', 'root', '', 'abtracks_server') or die('Error connecting to MySQL server');
    $check=mysqli_query($dbc,"select * from abtracks_hardware_info where device_imei='$name'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
          echo "	<script type ='text/javascript'>
	alert('Failed To Add New Device!');
	window.location='deivice.php';
	</script>";
   } else {  
    //insert results from the form input
      $query = "INSERT INTO abtracks_hardware_info(device_imei,device_number) VALUES('$name','$device_number')";

      $result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
     echo "	<script type ='text/javascript'>
	alert('Successfully Added New Device');
	window.location='device.php';
	</script>";
    };
  ?>