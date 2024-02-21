<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}




     include('../config/constants.php'); 
     include('login-check.php');


    ?>
<html>
    <head>
        <title>Food Order Website - Home Page</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manage-foods.php">Spices</a></li>
                    <li><a href="manage-orders.php">Order</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->

        
        <!-- Main Content Setion Ends -->

