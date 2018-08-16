
<button class="Back" onclick ="location='abtracks.php'">Back</button>
<center>
<form method="POST" action="device_add.php">ABTRACKS DEVICE INFO<br><br><br>
    DEVICE ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='text' name='device_id' disabled><br><br>
    DEVICE IMEI : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='device_imei'><br><br>
    DEVICE NUMBER : <input type='text' name='device_number'><br><br>
    
<button type='submit' name='Submit' class='btn'>Save</button></form>
    </center><br>
<?php include_once("device_info.php"); ?>