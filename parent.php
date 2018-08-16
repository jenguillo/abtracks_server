
<button class="Back" onclick ="location='abtracks.php'">Back</button>
<center>
<form method="POST" action="parent_add.php">ABTRACKS PARENT INFO<br><br><br>
    Parent Id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='parent_id' disabled><br><br>
    Parent Name : <input type='text' name='parent_name'><br><br>
    Password : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='password'><br><br>
<button type='submit' name='Submit' class='btn'>Save</button></form>
    </center><br>
<?php include_once("parent_info.php"); ?>