<?php session_start();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ABTRACKS SERVER</title>
	</head>

	<body>
		<center><br><br>
				ABTRACKS USERS
				<br><br>
<!--				<button class="ViewAll" onclick ="location='abtracks.php'">View All</button>-->
<!--				<button class="UserInfo" onclick ="location='user.php'">User Info</button>-->
			    <button class="ParentInfo" onclick ="location='parent.php'">Parent Info</button>	
                <button class="DeviceInfo" onclick ="location='device.php'">Device Info</button>
				<button class="ChildInfo" onclick ="location='child.php'">Child Info</button>
				<br><br>
				<button class="ResigterUser" onclick ="location='register.php'">Register User</button>
				<br><br>	
            <?php include_once("viewall.php"); ?>
		</center>	
	</body>
</html>

