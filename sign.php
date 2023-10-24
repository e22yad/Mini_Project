<?php
$name = $_POST['uname'];
$em = $_POST['email'];
$pa = $_POST['pass'];
$servername="localhost";
$username="root";
$password="";

$conn= mysqli_connect($servername,$username,$password);
if ($conn)
echo "<br>Connected successfully";
else
echo "<br>Connection Failed". mysqli_connect_error();

if(mysqli_select_db($conn,"DB"))
echo "<br>Database selected";
else
echo"<br>Database not selected";
if (isset($_POST['save']))
{
$sql="insert into sign(uname, email, pass) values('".$name."', '".$em."' ,'".$pa."')";
if(mysqli_query($conn,$sql))
echo "<br>Record Saved";
}
?>
