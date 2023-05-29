<?php
session_start();
include('connect.php');
?>
<?php
$rice_id = $_POST['rice_id']; 
$bill_no = $_POST['bill_no']; 
$selling_date = $_POST['selling_date']; 
$price = $_POST['price'];
$rice_quantity = $_POST['rice_quantity'];
print_r($_POST);
?>
<?php
$sql = "INSERT INTO billing(rice_id,bill_no,selling_date,price,rice_quantity) VALUES('$rice_id','$bill_no','$selling_date','$price','$rice_quantity');";
$result = mysqli_query($conn,$sql);
if(isset($result))
{   echo("hello");
    
    $_SESSION['error'] = "Success";
     header('Location:'.'billing.php');
} else{
    
    $_SESSION['error'] = "Failed";
    header('Location:'.'billing.php');
}
?>