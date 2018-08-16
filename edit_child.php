<center><br><br><br>
<form action="save_child.php" method="post">
<?php 
include_once("abtracks_conn.php");
mysql_connect("localhost","root","");
mysql_select_db("abtracks_server");


	if(isset($_GET['file']) == $_GET['file']){
		$name = $_GET['file'];
    


$myquery="select * from abtracks_child_info where child_nickname = '$name'";
$result=$con->query($myquery);
if($result->num_rows>0){
    
    while($row=$result->fetch_assoc()){
        echo "Parent Id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='parent_id' value='$row[parent_id]'><br><br>
              Child Id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='child_id' value='$row[child_id]'><br><br>
              Child Name : <input type='text' name='child_nickname' value='$row[child_nickname]'><br><br>
              Device Id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='device_id' value='$row[device_id]'><br><br>
              <button type='submit' name='Submit' class='btn'>Submit</button>";
                
                }
}
$con->close();

    }
?>
</form>

</center>