

<html>
	<head>
		<meta charset="UTF-8">
		<title>ABTRACKS SERVER</title>
	</head>

	<body>
		<center>


            <?php include_once("abtracks_conn.php");
mysql_connect("localhost","root","");
mysql_select_db("abtracks_server");


$myquery="select * from abtracks_hardware_info";
$result=$con->query($myquery);
echo"<table border=1><tr><th>&nbsp;&nbsp;&nbsp;DEVICE ID&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;DEVICE_IMEI&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;DEVICE_NUMBER&nbsp;&nbsp;&nbsp;</th></tr>";
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "
                <tr><td>$row[device_id]</td>
                <td>$row[device_imei]</td>
                <td>$row[device_number]</td>
                <td><a href='edit_device.php?file={$row['device_imei']}'><button>Edit</button></a>&nbsp;
                    <a href='delete_device.php?file={$row['device_imei']}'><button>Delete</button></a></tr>";
    }echo "</table>";
}
$con->close();


?>
				
		</center>	
	</body>
</html>