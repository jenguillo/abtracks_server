<center><br><br><br>
<form action="save_device.php" method="post">
<?php 
include_once("abtracks_conn.php");
mysql_connect("localhost","root","");
mysql_select_db("abtracks_server");


	if(isset($_GET['file']) == $_GET['file']){
		$name = $_GET['file'];
    


$myquery="select * from abtracks_hardware_info where device_imei = '$name'";
$result=$con->query($myquery);
if($result->num_rows>0){
    
    while($row=$result->fetch_assoc()){
        echo "Device ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='device_id' value='$row[device_id]'><br><br>
              Device IMEI : &nbsp;&nbsp;&nbsp;<input type='text' name='device_imei' value='$row[device_imei]'><br><br>
              Device Number : <input type='text' name='device_number' value='$row[device_number]'><br><br>
              <button type='submit' name='Submit' class='btn'>Submit</button>";
                
                }
}
$con->close();

    }
?>
</form>

</center>