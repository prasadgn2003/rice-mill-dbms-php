<?php session_start(); ?>
<?php if (isset($_SESSION['setted'])) { ?>
<?php
        include('connect.php');
        ?>
<?php
        $stock_id = $_POST['stock_id'];
        $stock_name = $_POST['stock_name'];
        $stock_seller = $_POST['stock_seller'];
        $stock_quantity = $_POST['stock_quantity'];
        $stock_received = $_POST['stock_received'];
        print_r($_POST);
        ?>
<?php
        $sql = "INSERT INTO stocks(stock_id,stock_name,stock_seller,stock_quantity,stock_received) VALUES('$stock_id','$stock_name','$stock_seller','$stock_quantity','$stock_received');";
        $result = mysqli_query($conn, $sql);
        if (isset($result)) {
            $_SESSION['error'] = "Success";
            header('Location:' . 'stocks.php');
        } else {
            $_SESSION['error'] = "Failed";
            header('Location:' . 'stocks.php');
        }
?>
<?php }?>