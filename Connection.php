<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$DBname = "DB";




if(!$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$DBname))
{

	die("failed to connect!");
}

?>
