<?php

	if(isset($_POST["parent_name"]) == $_POST["parent_name"]){
		$name = $_POST["parent_name"];
        $password = $_POST["password"];
    //connect to the database
    $dbc = mysqli_connect('localhost', 'root', '', 'abtracks_server') or die('Error connecting to MySQL server');
    $check=mysqli_query($dbc,"select * from abtracks_parent_info where parent_name='$name'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
          echo "	<script type ='text/javascript'>
	alert('Failed To Add New Parent!');
	window.location='parent.php';
	</script>";
   } else {  
    //insert results from the form input
      $query = "INSERT INTO abtracks_parent_info(parent_name,password) VALUES('$name','$password')";

      $result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
     echo "	<script type ='text/javascript'>
	alert('Successfully Added New Parent');
	window.location='parent.php';
	</script>";
    };
  ?>