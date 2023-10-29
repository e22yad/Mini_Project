<?php 



	include("connection.php");
	include("function.php");


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
    
                        if($user_data["rank"]=="admin")
                        {
							header("Location: Admin.html");
						die;
                        }
					}
                    

					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: intro.php");
						die;
					}
				}
			}
			echo "wrong username or password!--><a href='carR.html'>Main Page</a>";
			
		}else
		{
			echo "wrong username or password!";
		}
	}

?>



