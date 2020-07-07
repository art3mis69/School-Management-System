<html>
    <head>
        
        
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Student information</title>

        <link rel="stylesheet" href="index.css">
        <script src="jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title> Student Management System</title>
       <style>
        body,html {
		margin: 0;
		padding: 0;
		height: 100%;
		background-image: url(../admin/img/begin.jpg);
		background-size: cover;
		background-position: center;
		font-family: sans-serif;
	}
           .loginbox {
		width: 700px;
		height: 380px;
		background: rgb(255,255,255,0.5);
		color: #000;
		top: 50%;
		left: 30%;
		position: absolute;
		transform: translate(-10%, -60%);
		box-sizing: border-box;
		padding: 70px 30px;
	}
           .loginbox a{
    text-decoration: none;
    font-size: 20px;
    line-height: 20px;
    color: yellow;
}

.loginbox a:hover
{
    color: #ffc107;
}
        </style> 
    </head>
    <body>
        
        <h3 align="right" style="color:blue;"><a href="login.php">Admin Login</a></h3>
        <div class="loginbox">
        <h1 align="center"> Welcome To Student Management System</h1>
        
        
        <form method="post" action="index.php" >
            <table style="width:50%;" align="center" border="1">
                <tr>
                    <td colspan="2" align="center">Student Information</td>
                </tr>
                <tr>
                    <td>Choose Standard</td>
                    <td>
                        <select name="std">
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                            <option value="9">9th</option>
                            <option value="10">10th</option>
                            <option value="10">11th</option>
                            <option value="10">12th</option>
                        </select>
                                   
                    </td>
                </tr>
                <tr>
                    <td>Enter Rollno</td>
                    <td><input type="text" name="rollno"</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
                </tr>
            </table>
                <a href="../index.html">Home</a>     
            <a href="../Teacher/Teacher_login.php">Teacher Login</a>
        </form>
            
        </div> 
            
        
        
        
    </body>
    
</html>

<?php

if(isset($_POST['submit'])){
    
    $standard= $_POST['std'];
    $rollno = $_POST['rollno'];
    
    include('dbcon.php');
    include('function.php');
    
    showdetails($standard,$rollno);
    
    
    
    
    
    
}

?>