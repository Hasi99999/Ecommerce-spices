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

    
    // Fetch products based on category
    $sql = "SELECT id,name FROM catogory ";
    $result = $conn->query($sql);
   
    // Display products
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo '<div class= "col-4"  style="padding-left: 10%">';
            //echo "<img src='product images/{$row['image']}' alt='Product Image'>";
            echo "<h2>{$row['name']}</h2>";
                
                $imgname=$row['name'];
                echo '<div style="width: 100%; max-width: 300px; height: 0; padding-bottom: 100%; position: relative; overflow: hidden;">';
                


            $category_url = "catogory.php?id=" . $row["id"];
            echo "<a href='$category_url'> <img src='images/products/catogory/$imgname.jpg' style='width: 100%; height: 100%; position: absolute; top: 0; left: 0;'> </a> ";
            //echo "<p>{$row['description']}</p>";
            //echo "<p>Price: {$row['price']}</p>";
            
            
echo "</div>";
echo "</div>";
        }
    } else {
       // echo "No products found.";
    }
// else {
    //echo "Category ID is not provided.";
//}



$conn->close();

echo "</div>";
echo "</div>";

?>
</div>
<?php 
include('partials-short/footer.php');?>


