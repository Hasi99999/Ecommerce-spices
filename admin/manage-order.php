<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Order</h1>
                <?php 
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                ?>

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Food</th>
                        <th>Price</th>
                        <th>Qty.</th>
                        <th>Total</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                        <th>Delete</th>
                        <!--<th>customer details</th>-->
                    </tr>

                    <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM orders ORDER BY id DESC"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count the Rows
                        $count = mysqli_num_rows($res);

                        $sn = 1; //Create a Serial Number and set its initail value as 1

                        if($count>0)
                        {
                            //Order Available
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //Get all the order details
                                $id = $row['id'];
                                $food = $row['product_name'];
                                $price = $row['price'];
                                $qty = $row['units'];
                                $total = $row['total'];
                                $order_date = $row['date'];
                                $status = $row['status'];
                                $customer_name = $row['Iname'];
                                $customer_contact = $row['contact'];
                                $customer_email = $row['email'];
                                $customer_address = $row['address'];
                                
                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $food; ?></td>
                                        <td><?php echo $price; ?></td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo $total; ?></td>
                                        <td><?php echo $order_date; ?></td>

                                        <td>
                                            <?php 
                                                // Ordered, On Delivery, Delivered, Cancelled

                                                if($status=="Ordered")
                                                {
                                                    echo "<label>$status</label>";
                                                }
                                                elseif($status=="On Delivery")
                                                {
                                                    echo "<label style='color: orange;'>$status</label>";
                                                }
                                                elseif($status=="Delivered")
                                                {
                                                    echo "<label style='color: green;'>$status</label>";
                                                }
                                                elseif($status=="Cancelled")
                                                {
                                                    echo "<label style='color: red;'>$status</label>";
                                                }
                                            ?>
                                        </td>

                                        <!--<td><?php// echo $customer_name; ?></td>
                                        <td><?php //echo $customer_contact; ?></td>
                                        <td><?php //echo $customer_email; ?></td>
                                        <td><?php// echo $customer_address; ?></td>
                                            --> <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-secondary">Update Order</a>
                                                <br>
                                            <td>
                                            <form method="POST" action="delete-order.php">
                                    <input type="hidden" name="order_id" value="<?php echo $id; ?>">
                                    <button type="submit" style='background:red; color:black; padding: 5px;' class="btn-secondary" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                                </form>

                                            </td>

                                            </td>
                                          <br><!--<td><a href="<?php// echo SITEURL; ?>admin/customer-details.php" style='background:blue; colour:black; padding: 5px;' class="btn-secondary">customer details</a></td>  
                                        </td>-->
                                        </td>
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12' class='error'>Orders not Available</td></tr>";
                        }
                    ?>

 
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>