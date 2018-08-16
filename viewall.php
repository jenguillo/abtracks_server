

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


$myquery="SELECT abtracks_parent_info.parent_id, abtracks_parent_info.parent_name, abtracks_parent_info.password, 
abtracks_child_info.child_nickname, abtracks_hardware_info.device_imei, abtracks_hardware_info.device_number 
FROM ((abtracks_parent_info INNER JOIN abtracks_child_info 
ON abtracks_parent_info.parent_id = abtracks_child_info.parent_id) 
INNER JOIN abtracks_hardware_info 
ON abtracks_child_info.device_id = abtracks_hardware_info.device_id);";
$result=$con->query($myquery);
echo"<table border=1><tr>
<th>&nbsp;&nbsp;&nbsp;PARENT_ID&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;PARENT_NAME&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;PASSWORD&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;CHILD_NICKNAME&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;DEVICE_IMEI&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;DEVICE_NUMBER&nbsp;&nbsp;&nbsp;</th></tr>";
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "
                <tr><td>$row[parent_id]</td>
                <td>$row[parent_name]</td>
                <td>$row[password]</td>
                <td>$row[child_nickname]</td>
                <td>$row[device_imei]</td>
                <td>$row[device_number]</td></tr>";
    }echo "</table>";
}
$con->close();


?>
				
		</center>	
	</body>
</html>