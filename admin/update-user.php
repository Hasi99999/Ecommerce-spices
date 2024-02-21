<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Data</title>
</head>
<body>
<?php include('partials/menu.php'); ?>
<br>
<br>

    <h2 style="padding:0px 5%;" >Update User Data</h2>
    
    <?php
    // Include constants.php file here
    //include('../config/constants.php');
    

    // Start the session

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $new_first_name = $_POST['new_first_name'];
            $new_last_name = $_POST['new_last_name'];
            $new_address = $_POST['new_address'];
            $new_city = $_POST['new_city'];
            $new_pin = $_POST['new_pin'];
            $new_email = $_POST['new_email'];
            $new_password = $_POST['new_password'];

            // Include your database connection file
           // include('../config.php');

            // Create SQL Query to Update User data
            $sql = "UPDATE users SET 
                    fname = ?,
                    lname = ?,
                    address = ?,
                    city = ?,
                    pin = ?,
                    email = ?,
                    password = ?
                    WHERE id = ?";
            $stmt = mysqli_prepare($conn, $sql);
            
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ssssisss", $new_first_name, $new_last_name, $new_address, $new_city, $new_pin, $new_email, $new_password, $user_id);
                mysqli_stmt_execute($stmt);

                // Check whether the query executed successfully or not
                if(mysqli_stmt_affected_rows($stmt) > 0) {
                    // User data updated successfully
                    $_SESSION['update'] = "<div class='success'>User data updated successfully.</div>";
                    // Redirect to Manage Users Page
                    header('location:'.SITEURL.'admin/user-management.php');
                    exit();
                } else {
                    // Failed to update user data
                    $_SESSION['update'] = "<div class='error'>Failed to update user data. Try Again Later.</div>";
                    header('location:'.SITEURL.'admin/user-management.php');
                    exit();
                }
            } else {
                // Error in preparing the SQL statement
                $_SESSION['update'] = "<div class='error'>Error: Unable to prepare SQL statement.</div>";
                header('location:'.SITEURL.'admin/user-management.php');
                exit();
            }
        }

        // Retrieve user data for pre-populating the form fields
        // Include your database connection file
        //include('../config.php');

        $sql = "SELECT * FROM users WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    ?>

            <br>
            <br>
    <div style="    background-color: #C9C1C1;
    padding: 10px 10%;" >
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $user_id; ?>">
        <label for="new_first_name">New First Name:</label><br>
        <input type="text" id="new_first_name" name="new_first_name" value="<?php echo $row['fname']; ?>"><br>
        <label for="new_last_name">New Last Name:</label><br>
        <input type="text" id="new_last_name" name="new_last_name" value="<?php echo $row['lname']; ?>"><br>
        <label for="new_address">New Address:</label><br>
        <input type="text" id="new_address" name="new_address" value="<?php echo $row['address']; ?>"><br>
        <label for="new_city">New City:</label><br>
        <input type="text" id="new_city" name="new_city" value="<?php echo $row['city']; ?>"><br>
        <label for="new_pin">New PIN:</label><br>
        <input type="text" id="new_pin" name="new_pin" value="<?php echo $row['pin']; ?>"><br>
        <label for="new_email">New Email:</label><br>
        <input type="email" id="new_email" name="new_email" value="<?php echo $row['email']; ?>"><br>
        <label for="new_password">New Password:</label><br>
        <input type="password" id="new_password" name="new_password" value="<?php echo $row['password']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>

    </div>
    
    <?php
        } else {
            echo "User not found.";
        }
    } else {
        // Redirect if user_id is not set in GET request
        header('location:'.SITEURL.'admin/user-management.php');
        exit();
    }
    ?>
</body>
<?php include('partials/footer.php'); ?>

</html>
