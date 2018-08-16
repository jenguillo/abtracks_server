<center><br><br><br>
<form action="save_parent.php" method="post">
<?php 
include_once("abtracks_conn.php");
mysql_connect("localhost","root","");
mysql_select_db("abtracks_server");


	if(isset($_GET['file']) == $_GET['file']){
		$name = $_GET['file'];
    


$myquery="select * from abtracks_parent_info where parent_name = '$name'";
$result=$con->query($myquery);
if($result->num_rows>0){
    
    while($row=$result->fetch_assoc()){
        echo "Parent Id : &nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='parent_id' value='$row[parent_id]'><br><br>
              Parent Name : <input type='text' name='parent_name' value='$row[parent_name]'><br><br>
              Password : <input type='text' name='password' value='$row[password]'><br><br>
              <button type='submit' name='Submit' class='btn'>Submit</button>";
                
                }
}
$con->close();

    }
?>
</form>
</center>
