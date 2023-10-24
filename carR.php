<?php
//
$servername = "localhost";
$username = "root";
$password = "";
$DBname = "DB";
$conn = mysqli_connect($servername, $username, $password);
//
//conection
$sql = "CREATE DATABASE IF  NOT EXISTS DB";
if (mysqli_query($conn, $sql)) {
echo "Database created successfully";
} else {
echo "Error creating database: " . mysqli_error($conn);
}


//


if(!$conn = mysqli_connect($servername,$username,$password,$DBname))
{

	("failed to connect!");
}

?>
<?php
//index
session_start();
   $user_data=check_login($conn);
$User=$_POST['user_name'];
echo "UserName: ".$User;

?>

<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						//("Location: carR.html");
						//
					}
				}
			}
			
			// "wrong username or password!";
		}else
		{
			// "wrong username or password!";
		}
	}

?>


<?php
//sign 

	
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(9);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($conn, $query);

			//("Location: carR.html");
			//
		}else
		{
			echo "Please enter some valid information!";
		}
	
?>




<?php
//function

function check_login($conn)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	//("Location: CarR.html");
	//

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}
?>

