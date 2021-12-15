<?php
session_start();

	include("connection.php");
	include("functions.php");

<<<<<<< HEAD
?>

<!doctype HTML>
<html lang="english">
<head> 
    <title>Clothes</title>
    <link rel="shortcut icon" href="images/atllogo.png">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="css/home-style.css">
=======
?> 

<!doctype HTML>
<html lang="english">
<head>
    <title>Search</title>
    <link rel="shortcut icon" href="images/atllogo.png">
    <link rel="stylesheet" href="style/normalize.css">
>>>>>>> 1174da62208fa760fbff7151514ca3d263b261fe
    <link rel="stylesheet" href="css/search-style.css">
    <!-----for icons------>
    <link href='https://css.gg/css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg/icons/all.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>
</head>
<<<<<<< HEAD

<body>
    <!--re-search-bar------>
    <div class="re-search-bar">
        <!--search-input-->
        <div class="re-search-input">
            <form action="search.php" method="GET">
            <!--input-->
                <input type="text" name="query" placeholder="Search for Product"/>
=======
<body>
    <?php echo $_GET['s_query']; ?>
    <?php if (isset($_GET['s_query'])) {
        $s_query = $_GET['s_query'];
        $query = "SELECT DISTINCT * FROM products WHERE UPPER(productName) LIKE UPPER('%$s_query%')";
        $products = mysqli_query($con, $query);
        $result_count = mysqli_num_rows($products);
        if($result_count >= 1) {
            echo "here1";
        } else {
            echo "here";
        }
    ?>
    <div class="re-search-bar">
        <!--search-input-->
        <div class="re-search-input">
            <form action="./search.php" method="GET">
            <!--input-->
                <input type="text" name="s_query" placeholder="Search for Product"/>
>>>>>>> 1174da62208fa760fbff7151514ca3d263b261fe
            </form>
            <!--cancel-button---->
            <a href="home.php" class="search-cancel">
                <i class="gg-home"></i>
            </a>
        </div>
    </div>
<<<<<<< HEAD

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
=======
    <div class="featured-items-container">
            <div class="featured-container">
                <?php foreach ($products as $product) : ?>
                <div class="featured-item">
                    <div>
                        <div class="item-info">
                            <div>
                                <p class="item=text"><s><?php echo $product['productName'];?></s></p>
                            </div>
                            <div>
                                <p class="item=text"><s>$<?php echo $product['listPrice'];?></s></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="<?php echo $product['imagePath']; ?>" alt="red rhude T-shirt"
                            width="275px"
                            height="210px"
                        >
                    </div>
                    <div class="button-area">
                        <?php if ($product['stock'] == 0) { ?>
                            <button class="featured-out-of-stock">OUT OF STOCK</button>
                        <?php } ?>
                    </div>
                </div>
                <?php endforeach; ?> 
            </div>
        </div>
    <?php }?>
    
</body>

</html>
>>>>>>> 1174da62208fa760fbff7151514ca3d263b261fe
