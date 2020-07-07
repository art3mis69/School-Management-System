<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header('location: ../login.php');
}
  
?>
<html>
    <head>
    <title>Admin Dashboard</title>
    <style>
        body,html {
		margin: 0;
		padding: 0;
		height: 100%;
		background-image: url(../img/admin_dash.jpg);
		background-size: cover;
		background-position: center;
		font-family: sans-serif;
	}
        .admintitle{
    background-color: rgb(128,0,0,0.2);
    color: #fff;
    margin-left: 50px;
    margin-right: 50px;
    height: 140px;
    line-height: 140px;
}


.dashboard{
    background-color: rgb(0,255,255,0.2);
    color:#000;
    margin-left:50px;
    margin-right: 50px;
    height: 140px;
    font-size: 25px;
    
}

body{
    background-color: antiquewhite;
}
</style></head>
<?php

#include('header.php');
?>
    <div class="admintitle" align="center">
        <h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h4>
        <h4><a href="../../index.html" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Home</a></h4>
        <h1  align="center"> Welcome To Admin Dashboard </h1>
        
    </div>
    
    <div class="dashboard">
        <table style="width:50%;" align="center">
            <tr>
                <td> 1.</td><td><a href="addstudent.php"><b>Insert Student</b></a></td>
            </tr>
            <tr>
                
                <td> 2.</td><td><a href="updatestudent.php"><b>Update Student</b></a></td>
            </tr>
            <tr>
                <td> 3.</td><td><a href="viewstudent.php"><b>View Student</b></a></td>
            </tr>

            <tr>
                <td> 4.</td><td><a href="deletestudent.php"><b>Delete Student</b></a></td>
            </tr>

</body>
</html>
