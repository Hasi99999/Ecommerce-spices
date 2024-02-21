<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rosa product(products)</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
<div>
    <div class="container">
        <div class="navbar">  
            
                <img src="project images/logo.png" width="20%">
            
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>

                    
                    <?php

                        if(isset($_SESSION['username'])){
                            echo '<li><a href="orders.php">Order</a></li>';
                            echo '<li><a href="account.php">My Account</a></li>';
                            echo '<li><a href="logout.php">Log Out</a></li>';
                        }
                        else{
                            echo '<li><a href="login.php">Log In</a></li>';
                        }
                    ?>
                </ul>
            </nav>
            
            <a href="cart.php"><img src="project images/cart.png" width="30px" height="30px"></a>
            <img src="project images/menu.png" class="menu-icon" onclick="menutoggle()" width="30px" height="30px">
        </div>

</div>