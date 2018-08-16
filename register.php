<html>
    <head>
        <title>ABTRACKS SERVER</title>
    </head>	

        <body>
            <center>
                <form method="POST" action="save_register.php">
                Register User<br><br>
                Parent Name : &nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" name ="parent_name" placeholder ="Firstname"><br><br>
                Password : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" name ="password"  placeholder ="Password"> <br><br>
                Device IMEI : &nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" name ="device_imei" placeholder ="Device IMEI"><br><br>
                Device Number : <input type ="text" name ="device_number" placeholder ="Device Number"><br><br>
                <button>Next</button><br><br></form>
                <button class="Back" onclick ="location='abtracks.php'">Back to index</button>
            </center>
    </body>
</html>