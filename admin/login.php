<?php

session_start();

if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}
?>
<html lang="en_US">
    <head>
        <meta charset ="UTF-8">
        <title> Admin Login </title>
        <style>
        body,html {
		margin: 0;
		padding: 0;
		height: 100%;
		background-image: url(../admin/img/admin_login.jpg);
		background-size: cover;
		background-position: center;
		font-family: sans-serif;
	}
           .loginbox {
		width: 300px;
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
         <div class="loginbox">
        <h1 align="center">Admin Login</h1><br>
        <form action="login.php" method="post">
            
            <table align="center">
                <tr>
                    <td>Username</td><td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
                </tr>
                
            </table>
            <a href="../index.html">Home</a>     
            <a href="../Teacher/Teacher_login.php">Teacher Login</a>
            <a href="../admin/index.php">Student Information</a>
        </form>
        </div>
    </body>
</html>

<?php

include('dbcon.php');

if(isset($_POST['login'])){
    
    $username = mysqli_real_escape_string($con,$_POST['uname']);
    $password = mysqli_real_escape_string($con,$_POST['pass']);
    
    $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
    
    $run = mysqli_query($con,$qry);
    
    $row = mysqli_num_rows($run);
    
    if($row>=1)
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        
        
        
        $_SESSION['uid']=$id;
        
        header('location:admin/admindash.php');
        
    }
    else
    {
        ?>
        <script>
            alert('Username Or Password Dont match');
            window.open('login.php','_self')
</script>
        <?php
    }
}

?>