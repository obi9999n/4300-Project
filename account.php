<?php
session_start();

	include("connection.php");
	include("functions.php");

    $user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $user_id = $user_data['user_id'];
        if ($_POST['submitUsername']) {
            $user_name = $_POST['user_name'];
            if (!empty($user_name)) {
                $query = "update users set user_name = '$user_name' where user_id = '$user_id'";
                mysqli_query($con, $query);
                header("Location: account.php");
                die;
            }
        }
        if ($_POST['submitPassword']) {
            $password = $_POST['password'];
            if (!empty($password)) {
                $query = "update users set password = '$password' where user_id = '$user_id'";
                mysqli_query($con, $query);
                header("Location: account.php");
                die;
            }
        }
    }

?>

<!doctype HTML>
<html lang="english">
    <head>
        <h1>Account Settings</h1>
    </head>

    <body>
        <p>Username: <?php echo $user_data['user_name']; ?> <br><br>
        <a href="logout.php">Click here to logout!</a><br>
        <div id="box">
            <form method="post">
                <p>Change username:</p>
			    <label>New Username</label>
                <input id="text" type="text" name="user_name"><br><br>
                <input id="button" type="submit" name="submitUsername" value="Submit"><br><br>
                <p>Change password:</p>
			    <label>New Password</label>
                <input id="text" type="password" name="password"><br><br>
                <input id="button" type="submit" name="submitPassword" value="Submit"><br><br>
                <a href="home.php">Back to home!</a><br><br>
            </form>
        </div>       
    </body>

</html>