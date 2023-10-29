<?php
include("connection.php");
include("function.php");
//sign 

	
		//something was posted
		$user_name = $_POST['user_name2'];
		$password = $_POST['password2'];
		$email = $_POST['email2'];

		if(!empty($user_name) && !empty($password))
		{

			//save to database
			
			$user_id = random_num(9);
			$query = "insert into users (user_id,user_name,email2,password) values ('$user_id','$user_name','$email','$password')";
            
			mysqli_query($conn, $query);

			echo "You Have Ben Registered Now Go and log-in Hear--><a href='carR.html'>Main Page</a>";
			
		}else
		{
			echo "Wrong";
		}
	



