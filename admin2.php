<?php
$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$servername="localhost";
$username="root";
$password1="";
  echo "<h1>Database Handling</h1>";
$conn= mysqli_connect($servername,$username,$password1);
  if ($conn)
 echo "<br>Connected successfully";
 else
  echo "<br>Connection Failed". mysqli_connect_error();

 if(mysqli_select_db($conn,"db"))
  echo "<br>Database selected";
  else
  echo"<br>Database not selected";
 if (isset($_POST['save']))
{
  $sql="insert into users(user_id, user_name, password) values('".$user_id."', '".$user_name."' ,'".$password."')";
  if(mysqli_query($conn,$sql))
 echo "<br>user Saved";
 }

  if (isset($_POST['delete']))
{
  $sql="delete from users where user_id = " .$user_id;
  if(mysqli_query($conn,$sql))
 echo "<br>user Deleted";
}

  if (isset($_POST['update']))
{
  $sql="update users set user_name = '".$user_name."', password = '" . $password. "' where user_id = " . $user_id;
 if(mysqli_query($conn,$sql))
 echo "<br>user Updated";
}
if (isset($_POST['showrecords']))
{
echo "<table border='2'>";
$sql="select * from users";

$data=mysqli_query($conn,$sql);
if(!$data)
echo "No data";
echo "<tr><th>"."user_id"."</th><th>"."user_name"."</th><th>" ."password"."</th><th>" ."rank"."</th></tr>";
while($row= mysqli_fetch_array($data)){
echo "<tr><td>".$row['user_id']."</td><td>".$row['user_name']."</td><td>".$row['password']."</td><td>".$row['rank']."</td></tr>";
}
echo "";
echo "</table>";
}
?>


