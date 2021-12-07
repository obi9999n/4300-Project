<?php
session_start();

	include("connection.php");
	include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
		$check = 0;
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
		$check = $_POST['check'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
            // read from database
            $query = "select * from users where user_name = '$user_name' limit 1";
            
            // read
            $result = mysqli_query($con, $query);

            // send to index page
			if($result) {
				if($result && mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] == $password) {
						$_SESSION['user_id'] = $user_data['user_id'];
						if ($check=='1') {
							setcookie($user_data['user_name'], TRUE, time() + 86400);
							$check = '0';
						}
						header("Location: home.php");
            			die;
					}
				}
			}
			echo "Wrong username or password";
        } else {
            echo "Please enter some valid information!";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div id="box">
        <form method="post">
            <div style="font-size: 20px; margin: 10px; color: white">Login</div>
			<label>Username</label>
            <input id="text" type="text" name="user_name"><br><br>
			<label>Password</label>
            <input id="text" type="password" name="password"><br><br>
			<label>Remember me</label>
			<input type="checkbox" value="1" name="check"><br><br>
            <input id="button" type="submit" value="Login"><br><br>
            <a href="signup.php">Click to Signup!</a><br><br>
			<a href="home.php">Go back home!</a><br><br>
        </form>
    </div>
</body>
</html>