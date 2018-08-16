
<button class="Back" onclick ="location='abtracks.php'">Back</button>
<center>
<form method="POST" action="child_add.php">ABTRACKS CHILD INFO<br><br><br>
Parent ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='parent_id'><br><br>    
Child ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='child_id' disabled><br><br>
Child Nickname : &nbsp;<input type='text' name='child_nickname'><br><br>
Device ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='device_id'><br><br>
<button type='submit' name='Submit' class='btn'>Save</button></form>
    </center><br>
<?php include_once("child_info.php"); ?>