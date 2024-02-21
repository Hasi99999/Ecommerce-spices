
<?php include('partials/menu.php'); ?>

        <!-- Main Content Section Starts -->
        <div class="main-content">
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br><br>

                <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>rosa product</title>
                        <link rel="stylesheet" href="../css/stylesheet.css">
                        <link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
                    </head>
                    <body>
                    <div class="header">
                        <div class="container" style="margin: bottom 20px;">
                        <br>
                        <H1 style="text-align:center; colour:red;">Rosa Products</H1>
                        <br>
                        <br>
                            <div>  
                                
                            <h1 class="txtcenter" > ADMIN SECTION </h1>       <!-- <img src="../project images/logo.png" width="20%"> -->
                                     <br>
                            </div>
                            <div class="row">
                           
                                
                                <!--<a href="#futureproduct" class="btn" >Explore Now &#10132;</a>-->
                            </div>
                            <div class="col-2">
                                <!--<img src="../project images/image-1.png" alt="">-->
                            </div>
                        </div>
                        </div>
                    </div>
                          
            </div>
        <!-- Main Content Setion Ends -->
         <!-- Main Content Section Starts -->
         <div class="main-content">
            <div class="wrapper">
                <h1>Dashboard</h1>
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br><br>

                   <!--<div class="col-4 text-center">

                    <?php 
                        //Sql Query 
                       // $sql2 = "SELECT * FROM products";
                        //Execute Query
                        //$res2 = mysqli_query($conn, $sql2);
                        //Count Rows
                        //$count2 = mysqli_num_rows($res2);
                    ?>

                    <h1><?php// echo $count2; ?></h1>
                    <br />
                    Spices
                </div>-->

                <div class="col-4 text-center">
                    
                    <?php 
                        //Sql Query 
                        $sql3 = "SELECT * FROM products";
                        //Execute Query
                        $res3 = mysqli_query($conn, $sql3);
                        //Count Rows
                        $count3 = mysqli_num_rows($res3);
                    ?>

                    <h1><?php echo $count3; ?></h1>
                    <br />
                     Available products amount
                </div>

                <div class="col-4 text-center">
                    
                    <?php 
                        //Creat SQL Query to Get Total Revenue Generated
                        //Aggregate Function in SQL
                        $sql4 = "SELECT SUM(total) AS Total FROM orders WHERE status='Delivered'";

                        //Execute the Query
                        $res4 = mysqli_query($conn, $sql4);

                        //Get the VAlue
                        $row4 = mysqli_fetch_assoc($res4);
                        
                        //GEt the Total REvenue
                        $total_revenue = $row4['Total'];

                    ?>

                    <h1>Rs.<?php echo $total_revenue; ?></h1>
                    <br />
                    Revenue Generated
                </div>

                <div class="clearfix"></div>

            </div>
        </div>

<?php include('partials/footer.php') ?>