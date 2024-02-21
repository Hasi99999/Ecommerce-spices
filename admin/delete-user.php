<?php 
    // Include constants.php file here
   // include('../config.php');
    include('../config/constants.php');
    ?>

    <?php
    // Start the session
    session_start();

    if(isset($_GET['id'])) {
        $email = $_GET['id'];
        echo "Email received: " . $email; // Debugging
        // Rest of your code
    
    

        // Create SQL Query to Delete Admin (using prepared statement to prevent SQL injection)
        $sql = "DELETE FROM users WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $email);
            mysqli_stmt_execute($stmt);

            // Check whether the query executed successfully or not
            if(mysqli_stmt_affected_rows($stmt) > 0) {
                // Admin Deleted Successfully
                $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
                // Redirect to Manage Admin Page
                header('location:'.SITEURL.'admin/user-management.php');
                exit();
            } else {
                // Failed to Delete Admin
                $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
                header('location:'.SITEURL.'admin/user-management.php');
                exit();
            }
        } else {
            // Error in preparing the SQL statement
            $_SESSION['delete'] = "<div class='error'>Error: Unable to prepare SQL statement.</div>";
            header('location:'.SITEURL.'admin/user-management.php');
            exit();
        }
    } else {
        // Redirect if email is not set in GET request
        header('location:'.SITEURL.'admin/user-management.php');
        exit();
    }
?>
