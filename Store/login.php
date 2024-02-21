<?php include('../config/constants.php'); ?>

<?php
    // Check whether the Submit Button is Clicked or Not
    if(isset($_POST['submit'])) {
        // Process for Login
        // 1. Get the Data from the Login form
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // 2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        // 3. Execute the Query
        $res = mysqli_query($conn, $sql);

        // 4. Count rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count == 1) {
            // User Available and Login Success
            $row = mysqli_fetch_assoc($res);
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username;
            $_SESSION['type'] = $row['type']; // Assuming 'type' is the column that stores the user type

            // Redirect to the appropriate page based on user type
            if($_SESSION['type'] == "admin") {
                header('location:'.SITEURL.'admin/index.php');
            } elseif($_SESSION['type'] == "user") {
                header('location:'.SITEURL.'store/index.php');
            }
        } else {
            // User not Available and Login Fail
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            // Redirect to Login Page
            header('location:'.SITEURL.'admin/login.php');
        }
    }
?>

<html>
    <head>
        <title>Login - Food Order System</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        
        <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>

            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

            <!-- Login Form Starts HEre -->
            <form action="#" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
            </form>
            <!-- Login Form Ends HEre -->

        </div>

    </body>
</html>
<!-- Rest of your HTML code remains the same -->
