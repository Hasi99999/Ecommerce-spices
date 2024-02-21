<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Spices</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
        
            <table class="tbl-30">

                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Title of the Spices">
                    </td>
                </tr>

                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="30" rows="5" placeholder="Description of the Spices."></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Price: </td>
                    <td>
                        <input type="number" name="price">
                    </td>
                </tr>

                <tr>
                    <td>Product code: </td>
                    <td>
                        <input type="text" name="product_code" placeholder="product code">
                    </td>
                </tr>

                <tr>
                    <td>Quantity: </td>
                    <td>
                        <input type="number" name="qty" placeholder="quantity">
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Spices" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        
        <?php 

            // Check whether the button is clicked or not
            if(isset($_POST['submit']))
            {
                // Add the Food in Database
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $product_code = $_POST['product_code'];
                $qty = $_POST['qty'];

                // Upload the Image if selected
                if(isset($_FILES['image']['name']))
                {
                    $product_img_name = $_FILES['image']['name'];

                    if($product_img_name!="")
                    {
                        $parts = explode('.', $product_img_name);
                        $ext = end($parts);
                        $product_img_name = "Food-Name-".rand(0000,9999).".".$ext;

                        $src = $_FILES['image']['tmp_name'];
                        $dst = "../images/products/".$product_img_name;

                        $upload = move_uploaded_file($src, $dst);

                        if($upload==false)
                        {
                            $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                            header('location:'.SITEURL.'Store/add-foods.php');
                            die();
                        }
                    }
                }
                else
                {
                    $product_img_name = "";
                }

                // Insert Into Database using prepared statement
                $sql = "INSERT INTO products (product_name, product_desc, price, product_code, qty, product_img_name) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($conn, $sql);

                // Bind parameters with their respective data types
                mysqli_stmt_bind_param($stmt, "ssdiss", $title, $description, $price, $product_code, $qty, $product_img_name);

                // Execute the statement
                $res = mysqli_stmt_execute($stmt);

                // Check whether data inserted or not
                if ($res) {
                    $_SESSION['add'] = "<div class='success'>Food Added Successfully.</div>";
                    header('location:'.SITEURL.'Store/manage-foods.php');
                } else {
                    $_SESSION['add'] = "<div class='error'>Failed to Add Food.</div>";
                    header('location:'.SITEURL.'Store/manage-foods.php');
                }

                // Close the statement
                mysqli_stmt_close($stmt);
            }
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>
