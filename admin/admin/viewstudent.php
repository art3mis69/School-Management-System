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

<?php
include('header.php');
include('titleheader.php');

?>

<br>
<h1 align="center">View Data Of Students</h1><br>


<table align="center" width="80%" border="1" style:"margin-top:10px;">
    <tr style="background-color:#000; color:#fff; ">
        <th>No.</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Parents Contact</th>
        <th>Standard</th>
        <th>Edit</th>
    </tr>

<?php
mysql_connect("localhost","root","");
mysql_select_db("school") or die("cannot connect to the database");

$query="select * from student";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$id=$row[0];
$name=$row[1];
$city=$row[2];
$pcont=$row[3];
$standard=$row[4];
$rollno=$row[5];
?>

<tr align='center' bgcolor='yellow'>
<td>   <?php echo $id; ?></td>
<td>   <?php echo $name; ?> </td>
<td>   <?php echo $city; ?> </td>
<td>   <?php echo $pcont; ?> </td>
<td>   <?php echo $standard; ?> </td>
<td>   <?php echo $rollno; ?> </td>



</tr>

<?php  }
?>
</html>