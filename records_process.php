<?php
session_start();
include('connect.php');
?>
<?php
$stock_id = $_POST['stock_id']; 
$rice_id = $_POST['rice_id']; 
$customer_id = $_POST['customer_id']; 
$stock_quantity_remaining = $_POST['stock_quantity_remaining']; 
$rice_quantity_sold = $_POST['rice_quantity_sold']; 
$rice_quantity_remaining = $_POST['rice_quantity_remaining']; 
print_r($_POST);
?>

<?php
$sql = "INSERT INTO records(stock_id,rice_id,customer_id,stock_quantity_remaining,rice_quantity_sold,rice_quantity_remaining) VALUES('$stock_id','$rice_id','$customer_id','$stock_quantity_remaining','$rice_quantity_sold','$rice_quantity_remaining');";
$result = mysqli_query($conn,$sql);
if(isset($result))
{
    $_SESSION['error'] = "Success";
    header('Location:'.'records.php');
} else{
    $_SESSION['error'] = "Failed";
    header('Location:'.'records.php');
}
?>