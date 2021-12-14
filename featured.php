<?php
session_start();

	include("connection.php");
	include("functions.php");

    $queryProducts = 'SELECT * FROM products WHERE categoryID = 1 ORDER BY productID';
    $products = mysqli_query($con, $queryProducts);

?>

<!doctype HTML>
<html lang="english">
<head> 
    <title>Featured</title>
    <link rel="shortcut icon" href="images/icon.jpg">
    <link rel="stylesheet" href="css/home-style.css">
    <!-----for icons------>
    <link href='https://css.gg/css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg/icons/all.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>
</head>

<body>
    <div>
        <div class="page-title-container">
            <h2 class="page-title">ATL CLOTHING BOUTIQUE</h2>
        </div>
        <nav>
        <!---menu-bar------>
            <div class="navigation">
                <!----logo---->
                <div class="logo-plus-title">
                    <a href="home.php" class="logo">
                        <img src="images/atllogo2.png" alt="logo image">
                    </a>
                </div>
                <!--menu----->
                <ul class="menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="featured.php">Featured</a></li>
                    <li><a href="marketplace.php">Marketplace</a></li>
                </ul>
                <!--right-menu------>
                <div class="right-menu">
                    <!--search--->
                    <a href="#" class="search">
                        <i class="gg-search"></i>
                    </a>
                    <!---user---->
                    <?php if(isset($_SESSION['user_id'])) { ?>
                        <a href="account.php">
                            <i class="gg-user"></i>
                        </a>
                    <?php } else { ?>
                        <a href="login.php">
                            <i class="gg-user"></i>
                        </a>
                    <?php } ?>
                    <!---cart----->
                    <a href="checkoutform.php">
                        <i class="gg-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </nav>
    
        <!--search-bar------>
        <div class="search-bar">
            <!--search-input-->
            <div class="search-input">
                <!--input-->
                <input type="text" placeholder="Search for Product"/>
                <!--cancel-button---->
                <a href="#" class="search-cancel">
                    <i class="gg-close"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="body0">
        <div class="featured-top-banner">
            <div>
                <p id="topbannertext">All items from December's featured drop are out of stock. Be on the lookout for the next shock drop!</p>
            </div>
        </div>
        <div class="topbannercontainer">
            <p id="topbannertitle">DECEMBER DROP</p>
        </div>
        <div class="featured-items-container">
            <div class="featured-container">
                <?php foreach ($products as $product) : ?>
                <div class="featured-item">
                    <div>
                        <div class="item-info">
                            <div>
                                <p class="item=text"><s><?php echo $product['productName']; ?></s></p>
                            </div>
                            <div>
                                <p class="item=text"><s>$<?php echo $product['listPrice']; ?></s></p>
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
                <!--- <div class="featured-item" id="featureditem1">
                    <div>
                        <div class="item-info">
                            <div>
                                <p class="item-text"><s>Mens Red Rhude T-shirt</s></p>
                            </div>
                            <div>
                                <p class="item-text"><s>$120</s></p>
                            </div>
                        </div>        
                    </div>
                    <div>
                        <img src="images/rhude2.png" alt="red rhude T-shirt"
                            width="275px"
                            height="210px"
                        >
                    </div>
                    <div class="button-area">
                        <button class="featured-out-of-stock">OUT OF STOCK</button>
                    </div>
                </div>
                <div class="featured-item" id="featureditem2">
                    <div>
                        <div class="item-info">
                            <div>
                                <p class="item-text"><s>Yeezy 380 Alien 10M</s></p>
                            </div>
                            <div>
                                <p class="item-text"><s>$400</s></p>
                            </div>
                        </div>        
                    </div>
                    <div>
                        <img src="images/yeezy380.png" alt="red rhude T-shirt"
                            width="275px"
                            height="210px"
                        >
                    </div>
                    <div class="button-area">
                        <button class="featured-out-of-stock">OUT OF STOCK</button>
                    </div>
                </div>
                <div class="featured-item" id="featureditem3">
                    <div>
                        <div class="item-info">
                            <div>
                                <p class="item-text"><s>Mens Palm Angels Jacket</s></p>
                            </div>
                            <div>
                                <p class="item-text"><s>$220</s></p>
                            </div>
                        </div>        
                    </div>
                    <div>
                        <img src="images/palmangels3.png" alt="red rhude T-shirt"
                            width="275px"
                            height="210px"
                        >
                    </div>
                    <div class="button-area">
                        <button class="featured-out-of-stock">OUT OF STOCK</button>
                    </div>
                </div>
                <div class="featured-item" id="featureditem4">
                    <div>
                        <div class="item-info">
                            <div>
                                <p class="item-text"><s>MOMA AF1</s></p>
                            </div>
                            <div>
                                <p class="item-text"><s>$3500</s></p>
                            </div>
                        </div>        
                    </div>
                    <div>
                        <img src="images/momaaf1.png" alt="red rhude T-shirt"
                            width="275px"
                            height="210px"
                        >
                    </div>
                    <div class="button-area">
                        <button class="featured-out-of-stock">OUT OF STOCK</button>
                    </div>
                </div>
                <div class="featured-item" id="featureditem5">
                    <div>
                        <div>
                            <div class="item-info">
                                <div>
                                    <p class="item-text"><s>OW Foam Runner 7.5M</s></p>
                                </div>
                                <div>
                                    <p class="item-text"><s>$400</s></p>
                                </div>
                            </div>        
                        </div>
                        <div>
                            <img src="images/owshoe.png" alt="red rhude T-shirt"
                                width="275px"
                                height="210px"
                            >
                        </div>
                        <div class="button-area">
                            <button class="featured-out-of-stock">OUT OF STOCK</button>
                        </div>
                    </div>
                </div> --->
                
            </div>
        </div>
    </div>
    <div class="social-call">
        <!---social-links-------->
        <div class="social">
            <a href="https://www.facebook.com/oldnavy/"><i class="gg-facebook"></i></a>
            <a href="https://www.instagram.com/oldnavy/"><i class="gg-instagram"></i></a>
            <a href="https://twitter.com/OldNavy?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class ="gg-twitter"></i></a>
        </div>
        <!---phone-->
        <div class="phone">
            <span> <a href="tel:9999990000">Customer Support<i class="gg-phone"></i></a></span>
        </div>
    </div>
</body>