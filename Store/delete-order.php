<?php
     include('../config/constants.php');
?>

<?php
     
     // Function to delete an order by ID
     function deleteOrder($conn, $orderId) {
         $sql = "SELECT * FROM orders WHERE id = ?";
         $stmt = $conn->prepare($sql);
         $stmt->bind_param("i", $orderId);
         $stmt->execute();
         $result = $stmt->get_result();
     
         if ($result->num_rows > 0) {
             $deleteSql = "DELETE FROM orders WHERE id = ?";
             $deleteStmt = $conn->prepare($deleteSql);
             $deleteStmt->bind_param("i", $orderId);
             $deleteStmt->execute();
             echo "Order deleted successfully.";
             header("Location: index.php");
             
         } else {
             echo "Order not found.";
         }
         $stmt->close();
     }
     
     // Example usage
     if(isset($_POST['order_id'])){
         $order_id = $_POST['order_id']; // Assuming you're getting the order ID from a form
         deleteOrder($conn, $order_id);
     }
     else{
         echo "Order ID not provided.";
     }
     
     // Close connection
     $conn->close();
     ?>
     