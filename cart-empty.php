<?php
session_start();

// Check if the cart session variable is set
if (isset($_SESSION['cart'])) {
    // Unset or destroy the cart session variable
    unset($_SESSION['cart']); // or session_destroy() to destroy the entire session
    echo "Cart emptied successfully.";
} else {
    echo "Cart is already empty.";
}

// Redirect back to the cart page or any other page
header("Location: cart.php");
exit();
?>
