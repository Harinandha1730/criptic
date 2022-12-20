<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shop</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <script src="javascript.js"></script>
    </head>
    <body>
        <div class="toolbar">
            <table class="toolbar-table">
                <tr>
                    <td><a href="home.php">Home</a></td>
                    <td><a href="aboutus.php">About Us</a></td>
                    <td><a href="ordernow.php">Menu</a></td>
                    <td><a href="login.php">Login</a></td>
                    <td><a href="contactus.php">Contact Us</a></td>
                </tr>
            </table>
        </div>
            <?php
                $dbuser="root";
                $pwd="";
                $dbserver="localhost";
                $dbname="criptic programmerz";
                $dbconnect=mysqli_connect($dbserver,$dbuser,$pwd,$dbname);
                $dbquery="INSERT INTO `login` (`name`, `phno`, `mail`) VALUES ('".$_POST['name']."', '".$_POST['phno']."', '".$_POST['email']."');";
                $dbconnect->query($dbquery);
            ?>
        <div class="main">
            <div>
                <center><h2>Registered successfully</h2></center>
            </div>
            <div class="container-fluid">
                <section class="content-section">
                    <h2 class="section-header">MERCH</h2>
                    <div class="shop-items">
                        <div class="shop-item">
                            <span class="shop-item-title">Vanilla Cake</span>
                            <img class="shop-item-image" src="images/p1.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$500</span>
                                <button class="shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Chocolate Cake</span>
                            <img class="shop-item-image" src="images/p2.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$750</span>
                                <button class="shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Kitkat Cake</span>
                            <img class="shop-item-image" src="images/p3.jpeg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$950</span>
                                <button class="shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Rainbow Cake</span>
                            <img class="shop-item-image" src="images/p4.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$900</span>
                                <button class="shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                        <div class="shop-item">
                            <span class="shop-item-title">Caramel Cake</span>
                            <img class="shop-item-image" src="images/p5.jpg">
                            <div class="shop-item-details">
                                <span class="shop-item-price">$600</span>
                                <button class="shop-item-button" type="button">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-section">
                    <h2 class="section-header">CART</h2>
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column">ITEM</span>
                        <span class="cart-price cart-header cart-column">PRICE</span>
                        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                    </div>
                    <div class="cart-items">
                    </div>
                    <div class="cart-total">
                        <strong class="cart-total-title">Total</strong>
                        <span class="cart-total-price">$0</span>
                    </div>
                    <button class="btn-purchase" type="button">PURCHASE</button>
                </section>
            </div>
        </div>
    </body>
</html>