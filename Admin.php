<?php
$id = $_POST['id'];
$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];


$servername="localhost";
$username="root";
$password="";
echo "<h1>Database Handling</h1>";
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
$sql="insert into users(id, user_id, user_name, password, date) values('".$id."', '".$user_id."', '".$user_name."' ,'".$password."')";
if(mysqli_query($conn,$sql))
echo "<br>Record Saved";
}

if (isset($_POST['delete']))
{
$sql="delete from users where id' = " .$id;
if(mysqli_query($conn,$sql))
echo "<br>Record Deleted";
}

if (isset($_POST['update']))
{
$sql="update users set user_id = '".$user_id."', user_name = " . $user_name. ", password = " . $password. " where id = " . $id;
if(mysqli_query($conn,$sql))
echo "<br>Record Updated";
}
if (isset($_POST['showrecords']))
{
echo "<table border='1'>";
$sql="select * from usres";

$data=mysqli_query($conn,$sql);
if(!$data)
echo "No data";
echo "<tr><th>"." ID "."</th><th>"."User ID"."</th><th>"."User Name"."</th><th>" ."Password"."</th></tr>";
while($row= mysqli_fetch_array($data)){
echo "<tr><td>".$row['id']."</td><td>".$row['user_id']."</td><td>".$row['user_name']."</td></tr>".$row['password']."</td></tr>";
}
echo "";
echo "</table>";
}
?>
