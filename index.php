<?php 

session_start();

include ("db_connect.php");
if (isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    
    $query = "select * from user where  user = '".$user_name."' AND password = '".$user_password."' limit 1";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        header('Location: welcome.php');
    } else {
        $msg = "Incorrect Password";
    }
    

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Lyric Lounge Login</title>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form action="index.php" method="POST">
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter Your UserName" required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Your Password" required>
                    </div>
                    <input type="submit" value="Login" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span>Rememmber Me</span>
                    </div>
                    <p>Don"t have a account yet? <a href="signup.php">Sign Up</a></p>
                </form>
            </div>
             <h4>Incorrect Password</h4>
            <?php
            // echo('<h4>'.$msg.'</h4>');
            echo "Incorrect Password"; 
            ?> 
        </div>
        
    </header>
</body>

</html>