<?php

// Function to authenticate the user
function authenticateUser($username, $password) {
    // Assuming $conn is your database connection
    global $conn;

    // Hash the password (you should use a secure hashing algorithm)
    $hashed_password = ($password); // Example: MD5 (not recommended for production)

    // SQL query to check the username and hashed password in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashed_password'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if a record exists
    if ($result && mysqli_num_rows($result) > 0) {
        // Authentication successful
        return true;
    } else {
        // Authentication failed
        return false;
    }
}

?>
