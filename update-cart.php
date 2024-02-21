<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'config.php';

// Check if 'id' and 'action' are set in the $_GET array
if (isset($_GET['id'], $_GET['action'])) {
    $product_id = $_GET['id'];
    $action = $_GET['action'];

    // Check if the 'cart' session variable is set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $result = $mysqli->query("SELECT qty FROM products WHERE id = " . $product_id);

    if ($result) {
        if ($obj = $result->fetch_object()) {

            switch ($action) {
                case "add":
                    // Check if adding 1 doesn't exceed the available quantity
                    if ($_SESSION['cart'][$product_id] + 1 <= $obj->qty) {
                        $_SESSION['cart'][$product_id]++;
                    }
                    break;

                case "remove":
                    // Decrease the quantity, and remove if it becomes zero
                    $_SESSION['cart'][$product_id]--;
                    if ($_SESSION['cart'][$product_id] == 0) {
                        unset($_SESSION['cart'][$product_id]);
                    }
                    break;

                case "empty":
                    // Clear the entire cart
                    unset($_SESSION['cart']);
                    break;

                default:
                    // Handle unsupported action
                    echo "Unsupported action.";
                    break;
            }
        }
    }
}

// Redirect to the cart page
header("location: cart.php");
exit(); // Make sure to exit after the header to prevent further execution
?>
