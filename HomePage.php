<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clothes</title>
    <link rel="icon" href="Logo.png">
    <link rel="stylesheet" href="Home.css">
</head>
<body>
<div class="flexbox">
    <div>Home</div>
    <div><a href="#Help Center">Help</a></div>
    <div>Cart</div>
    <div><a href="LogIn.php" target="_top">Sign In</a></div>
    <div>
        <?php
        echo $_SESSION['sessionuser'];
        echo "\t";
        echo $_SESSION['sessionname'];
        ?>
    </div>
</div>
</div>
<div class="intro">
    <img src="homee%20page.jpg" alt="A picture of my store">
<div class="intro_text">
    <h1>Welcome to FUD clothing store</h1>
    <h1>Tired of walking through endless shops, looking for just the right item? Enter FUD.<br> Start shopping online today and find out more about what makes us so special.</h1>>
<button type="button"><a href="Registration.php">Start here</a></button>
</div>
</div>

<div class="pack-section">
    <ul class="pack-grig">
        <li>
            <div class="pack-box pack-img-1">
                <div class="pack-info">
                    <h3>MEN</h3>
                    <p>Formal.Casual.Sports</p>
                    <a class="add-cart cart1" href="Cart_process.php"><button>Buy</button></a>
                </div>
            </div>
        </li>
        <li>
            <div class="pack-box pack-img-2">
                <div class="pack-info">
                    <h3>WOMEN</h3>
                    <p>Formal.Casual.Sports </p>
                    <a class="add-cart cart2" href="Cart_process.php"><button>Buy</button></a>
                </div>
            </div>
        </li>
        <li>
            <div class="pack-box pack-img-3">
                <div class="pack-info">
                    <h3>KIDS</h3>
                    <p>Formal.Casual.Sports</p>
                    <a class="add-cart cart3" href="Cart_process.php"><button>Buy</button></a>
                </div>
            </div>
        </li>
</div>

<div>
<h1>Trustees</h1>
<div class="Indicators">
    <img src="Trust%20indicators.png" alt ="Our trust indicators">
</div><br>
</div>
<div class="Information">
    <div><b>Contact information</b>
    <ul>
        <li>Address</li>
        <li>Mobile number</li>
        <li>email</li>
    </ul>
    </div>
    <div id="Help Center"><b>Help Center</b>
    <ul>
        <li>Shipping policy</li>
        <li>Advertise with us</li>
        <li>Report a product</li>
        <li>Terms and conditions</li>
        <li>Cookie notice</li>
    </ul>
    </div>
    <div><b>Offers</b>
    <ul>
        <li>Newsletters</li>
        <li>Free goods</li>
        <li>Mega deals</li>
    </ul>
    </div>
</div>
</body>
