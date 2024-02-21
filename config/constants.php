<?php    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/new/');
    define('LOCALHOST', 'localhost');
    $currency = 'RS. ';
    $user= "root";
    $password="";
    $db="bolt";
    
    $conn = mysqli_connect(LOCALHOST, $user, $password) or die(mysqli_error($conn)); //Database Connection
    $db_select = mysqli_select_db($conn, $db) or die(mysqli_error($conn)); //SElecting Database

    
?>