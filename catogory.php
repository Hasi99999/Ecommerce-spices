<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<?php
include 'config.php';
include 'partials-short/header.php';
?>
<div class="small-container row" >
<?php
// Check if category ID is provided in the URL
if(isset($_GET['id'])) {
    $category_id = $_GET['id'];
    
    // Fetch products based on category
    $sql = "SELECT * FROM products WHERE product_code = $category_id";
    $result = $conn->query($sql);

    // Display products
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="col-4">';
            echo '<p><h3>'.$row['product_name'].'</h3></p>';
            echo '<img src="images/products/'.$row['product_img_name'].'" class="imgcontainer4" />';
            echo '<p><strong>Product Code</strong>: '.$row['product_code'].'</p>';
            // echo '<p><strong>Description</strong>: '.$row['product_desc'].'</p>';
            echo '<p><strong>Units Available</strong>: '.$row['qty'].'</p>';
            echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$row['price'].'</p>';
            if($row['qty'] > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$row['id'].'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
            }
            else {
                echo 'Out Of Stock!';
            }
            echo '</div>';
        }
    } else {
        echo "No products found.";
    }
} else {
    echo "Category ID is not provided.";
}

$_SESSION['product_id'] = $product_id;

echo '</div>';
echo '</div>';
$conn->close();
?>
<?php include('partials-short/footer.php');?>
<!------js for toggle menue------->
<script>
    var MenuItems= document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px"
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px"){
            MenuItems.style.maxHeight ="200px";
        }
        else{
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>
</body>
</html>
