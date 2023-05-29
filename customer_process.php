<?php
session_start();
include('connect.php');
?>
<?php
$customer_id = $_POST['customer_id']; 
$rice_id = $_POST['rice_id']; 
$customer_name = $_POST['customer_name']; 
$address = $_POST['address'];
$phone_no = $_POST['phone_no'];
$amount_paid = $_POST['amount_paid'];
print_r($_POST);
?>
<?php
$sql = "INSERT INTO customer(customer_id,rice_id,customer_name,address,phone_no,amount_paid) VALUES('$customer_id','$rice_id','$customer_name','$address','$phone_no','$amount_paid');";
if(strlen($phone_no)==10){
    $result = mysqli_query($conn,$sql);
        if(isset($result))
    {
        echo "Success";
        $_SESSION['error'] = "Success";
        header('Location:'.'customer.php');
    } else{
        echo "failure";
        $_SESSION['error'] = "Failed";
        header('Location:'.'customer.php');
    }
}else{
    $_SESSION['error'] = 'Invalid Ph.no';
    header('Location:'.'customer.php');
}

?>