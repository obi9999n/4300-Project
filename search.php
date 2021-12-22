<?php
session_start();

	include("connection.php");
	include("functions.php");

?> 

<!doctype HTML>
<html lang="english">
<head>
    <title>Search</title>
    <link rel="shortcut icon" href="images/atllogo.png">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="css/search-style.css">
    <!-----for icons------>
    <link href='https://css.gg/css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg/icons/all.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>
</head>
<body>
    <?php if (isset($_GET['s_query'])) {
        $s_query = $_GET['s_query'];
        $query = "SELECT DISTINCT * FROM products WHERE UPPER(productName) LIKE UPPER('%$s_query%')";
        $products = mysqli_query($con, $query);
        $result_count = mysqli_num_rows($products);
    ?>
    <div class="re-search-bar">
        <!--search-input-->
        <div class="re-search-input">
            <form action="./search.php" method="GET">
            <!--input-->
                <input type="text" name="s_query" placeholder="Search for Product"/>
            </form>
            <!--cancel-button---->
            <a href="home.php" class="search-cancel">
                <i class="gg-home"></i>
            </a>
        </div>
    </div>
    <div class="featured-items-container">
        <div class="featured-container-2">
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
                        width="360px"
                        height="197px"
                    >
                </div>
                <!---<div class="button-area">
                    <?php if ($product['stock'] == 0) { ?>
                        <button class="featured-out-of-stock">OUT OF STOCK</button>
                    <?php } else { ?>
                        <button class="featured-out-of-stock">ADD TO CART</button>
                    <?php } ?>
                </div> --->
            </div>
            <?php endforeach; ?> 
        </div>
    </div>
    <?php }?>
    
</body>

</html>