<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rosa product</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
<div>
    <div class="container">
        <div class="navbar">  
            
                <img src="project images/logo.png" width="20%">
            
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">home</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="about.php">about</a></li>
                    <?php

                        if(isset($_SESSION['username'])){
                            echo '<li><a href="account.php">My Account</a></li>';
                            echo '<li><a href="logout.php">Log Out</a></li>';
                        }
                        else{
                            echo '<li><a href="login.php">Log In</a></li>';
                        }
                    ?>
                </ul>
            </nav>
            
            <a href="cart.php"><img src="project images/cart.png" width="30px" height="30px"></a>
            <img src="project images/menu.png" class="menu-icon" onclick="menutoggle()" width="30px" height="30px">
        </div>
    </div>
</div>


    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>Hey Admin!</h3>
        <br><br><br>
        <?php
          $result = $mysqli->query("SELECT * from products order by id asc");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="image/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<div class="large-6 columns" style="padding-left:0;">';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p><strong>New Qty</strong>:</p>';
              echo '</div>';
              echo '<div class="large-6 columns">';
              echo '<input type="number" name="quantity[]"/>';

              echo '</div>';
              echo '</div>';
            }
          }
        ?>



      </div>
    </div>
<br>
    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <center><p><input style="clear:both; padding:5px; background:#87CEEB;" type="submit" class="button" value="Update"></p></center>
        </form>
      </div>
      </div>
    <br><br><br>

<!----footer---->
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
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
