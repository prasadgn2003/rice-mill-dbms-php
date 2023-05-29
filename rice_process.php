<?php
session_start();
include('connect.php');
?>
<?php
$rice_id = $_POST['rice_id']; 
$stock_id = $_POST['stock_id']; 
$rice_name = $_POST['rice_name']; 
$rice_quantity = $_POST['rice_quantity']; 

print_r($_POST);
?>
<?php
$sql = "INSERT INTO rice(rice_id,stock_id,rice_name,rice_quantity) VALUES('$rice_id','$stock_id','$rice_name','$rice_quantity');";
$result = mysqli_query($conn,$sql);
if(isset($result))
{
    $_SESSION['error'] = "Success";
    header('Location:'.'rice.php');
} else{
    $_SESSION['error'] = "Failed";
    header('Location:'.'rice.php');
}
?>