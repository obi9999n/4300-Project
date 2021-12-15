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
                $emptyUser = 0;
                $query = "update users set user_name = '$user_name' where user_id = '$user_id'";
                mysqli_query($con, $query);
                header("Location: account.php");
                die;
            } else {
                $emptyUser = 1;
            }
        }
        if ($_POST['submitPassword']) {
            $password = $_POST['password'];
            if (!empty($password)) {
                $emptyPassword = 0;
                $query = "update users set password = '$password' where user_id = '$user_id'";
                mysqli_query($con, $query);
                header("Location: account.php");
                die;
            } else {
                $emptyPassword = 1;
            }
        }
    }

?>

<!doctype HTML>
<html lang="english">
    <head>
        <link rel="stylesheet" href="css/account.css">
        <center><h1>Account Settings</h1></center>
    </head>

    <body>
        <center><p>Welcome <?php echo $user_data['user_name']; ?>!<br></center>
        <div id="box">
            <form method="post">
                <p>Change username:</p>
			    <label>New Username</label>
                <input id="text" type="text" name="user_name"><br><br>
                <input id="button" type="submit" name="submitUsername" value="Submit"><br><br>
                <?php if ($emptyUser == 1) { ?>
                    <p>Error: Field is empty. Please try again<p>
                <?php } ?> 
                <p>Change password:</p>
			    <label>New Password</label>
                <input id="text" type="password" name="password"><br><br>
                <input id="button" type="submit" name="submitPassword" value="Submit"><br><br>
                <?php if ($emptyPassword == 1) { ?>
                    <p>Error: Field is empty. Please try again<p>
                <?php } ?> 
                <a href="home.php">Back to home!</a><br><br>
                <a href="logout.php">Click here to logout!</a><br>
            </form>
        </div>       
    </body>

</html>