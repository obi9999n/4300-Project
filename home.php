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
    <!-----for icons------>
    <link href='https://css.gg/css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg/icons/all.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>
</head>

<body>
    <div class="page-title-container">
        <h2 class="page-title">ATL SHOE BOUTIQUE</h2>
    </div>
    <!--navigation---------->
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
                <li><a href="featured.php">Featured</a>
                       
                </li>
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
            <form action="search.php" method="GET">
            <!--input-->
                <input id="text" name="s_query" placeholder="Search for Product"/>
            </form>
            <!--cancel-button---->
            <a href="#" class="search-cancel">
                <i class="gg-close"></i>
            </a>
        </div>
    </div>


    <!--lightslider------->
    <ul id="autoWidth" class="cs-hidden">
        <li class="item-a"></li>
        <li class="item-b"></li>
        <li class="item-c"></li>
        <li class="item-d"></li>
        <li class="item-e"></li>
      </ul>

    <!--image-slider---------->
    <div class="homepagecontent">
        <img src="images/pexels-richard-solano-5796567.jpg" alt="">
        <div class="homepage-content-container">
            <div class="left-home-content">
                <h5>DECEMBER FEATURED DROP NOW LIVE</h5>
                <a href="featured.php"><button class="home-buttons" >SHOP THE DROP</button></a>
            </div>
            <div class="right-home-content">
                <h5>SHOP OUR LATEST STYLES</h5>
                <a href="marketplace.php"><button class="home-buttons" >ENTER THE MARKETPLACE</button></a>

            </div>
        </div>
    </div>

    <div class="subscribe">
        <h2 class="subscribe__title">SUBSCRIBE TO THE ASB NEWSLETTER</h2>
        <p class="subscribe__copy">Subscribe to keep up with the latest drops and exciting updates.</p>
        <div class="form">
            <input type="email" class="form__email" placeholder="Enter your email address" />
            <button class="form__button">Send</button>
        </div>
        <div class="notice">
            <input type="checkbox">
            <span class="notice">I agree to my email address being used to recieve monthly newsletter.</span>
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

    <!--jQuery------>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!---script-------->
    <script type="text/javascript">
    $(document).on('click','.search',function(){
        $('.search-bar').addClass('search-bar-active')
    });

    $(document).on('click','.search-cancel',function(){
        $('.search-bar').removeClass('search-bar-active')
    });
    </script>
</body>


</html>