
<?php
session_start();

include("connection.php");
include("function.php");


?>
<html>
<head>
    <style>
          body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('../miniProject/Cars/Caprice2.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}
        .wrapper{
    position: relative;
    height: 150px;
    width: 120px;
    padding: 72px;
    background: transparent;
    border: 2px solid rgba(255,255,255, .5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba (0,0,0, .5);
    display: flex;
    justify-content: center;
    align-items: center;
    
    
    transition: transform .5s ease ,height .2s ease;
}
        .Inb{
            width:180px;height:20px
        }
        .btnn{
            background-color:cadetblue;
            width:90px;height:23px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

            
<div class="wrapper">
    <form action = "admin.php" method ="post">
        
        
            <h3>Users Info</h3>
            
            <label>User ID</label><br> <input type = "text" name= "user_id" class="Inb">
            <br><label>User Name</label><br> <input type = "text" name= "user_name" class="Inb">
            <br><label>Password</label><br> <input type = "text" name= "password" class="Inb">
        
        
            
                <input class="btnn" type="submit" name="save" value="Save">
                <input class="btnn" type="submit" name="update" value="Update">
                <input class="btnn" type="submit" name="delete" value="Delete">
                <input class="btnn" type="submit" name="showrecords" value="showrecords"><br><br>
                <?php
            
            echo "Welcome ".$_SESSION['user_name'];
            ?>
                <a href="logout.php">Log-out</a>
        
    </form>
    </div>    
</body>
</html>
