<?php
session_start();

	include("connection.php");
	include("functions.php");

?>

<!doctype HTML>
<html lang="english">
<head> 
    <title>Clothes</title>
    <link rel="shortcut icon" href="images/atllogo.png">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="css/home-style.css">
    <link rel="stylesheet" href="css/search-style.css">
    <!-----for icons------>
    <link href='https://css.gg/css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg/icons/all.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>
</head>

<body>
    <!--re-search-bar------>
    <div class="re-search-bar">
        <!--search-input-->
        <div class="re-search-input">
            <form action="search.php" method="GET">
            <!--input-->
                <input type="text" name="query" placeholder="Search for Product"/>
            </form>
            <!--cancel-button---->
            <a href="home.php" class="search-cancel">
                <i class="gg-home"></i>
            </a>
        </div>
    </div>

    <div class="search-results">
    <?php
    $s_query = $GET['s-query'];

    //if(!empty($s_query)) {
        // read from database 
        $query = "SELECT * FROM 'products' WHERE productName LIKE '%".$s_query."%'";
        $result_count = mysqli_num_rows($query);

        $result = mysqli_query($con, $query);

        if($result_count == 1) {
            echo "<p>1 result</p>";
        }
        if($result_count > 1) {
            echo "<p>" .$result_count. " results </p>";
        }

        echo 'test';

        if($result_count > 0) {
            echo "<table>";
            while($row = mysqli_fetch_array($result)) {

                echo "<tr>" . $row['productName']. "</tr>";
            }
            echo "</table>";
        }
        else {
            echo "There were no results";
        }

    //}
    ?>
    </div>

</body>

</html>
