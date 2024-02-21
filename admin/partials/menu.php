<?php if(session_id() == '' || !isset($_SESSION))



    include('../config/constants.php'); 
    include('login-check.php');
?>


<html>
    <head>
        <title>Food Order Website - Home Page</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manage-admin.php">Store</a></li>
                    <li><a href="manage-food.php">Spices</a></li>
                    <li><a href="manage-order.php">Order</a></li>
                    <li><a href="user-management.php">user_management</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->