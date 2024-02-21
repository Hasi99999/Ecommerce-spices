
<?php
 define('SITEURL', 'http://localhost/new/');
 define('LOCALHOST', 'localhost');
$currency = 'RS';
$email='email';
$product_id ='id';
$db_username = 'root';
$db_password = '';
$db_name = 'bolt';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$conn = mysqli_connect(LOCALHOST, $db_username, $db_password) or die(mysqli_error($conn)); //Database Connection
    $db_select = mysqli_select_db($conn, $db_name) or die(mysqli_error($conn)); //SElecting Database

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

    /*//Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/food-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn)); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));*/

    ?>