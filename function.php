
<?php
//function

function check_login($conn)
{

	if(isset($_SESSION['user_name']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$id2 = $_SESSION['user_name'];
			$query2 = "select * from users where user_name = '$id' limit 1";
			$result = mysqli_query($conn,$query2);
			$user_data = mysqli_fetch_assoc($result2);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: rent.html");
	//

}

function random_num($length)
{

	$text = "";
	if($length < 3)
	{
		$length = 3;
	}

	$len = rand(3,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}
?>
