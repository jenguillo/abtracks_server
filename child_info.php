

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


$myquery="select * from abtracks_child_info";
$result=$con->query($myquery);
echo"<table border=1>
<tr><th>&nbsp;&nbsp;&nbsp;PARENT_ID&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;CHILD_ID&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;CHILD_NICKNAME&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;DEVICE_ID&nbsp;&nbsp;&nbsp;</th></tr>";
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>$row[parent_id]</td>
                <td>$row[child_id]</td>
                <td>$row[child_nickname]</td>
                <td>$row[device_id]</td>
                <td><a href='edit_child.php?file={$row['child_nickname']}'><button>Edit</button></a>&nbsp;
                    <a href='delete_child.php?file={$row['child_nickname']}'><button>Delete</button></a></tr>";
    }echo "</table>";
}
$con->close();


?>
				
		</center>	
	</body>
</html>