<?php session_start(); ?>
<?php if(isset($_SESSION['setted'])) { ?>
<?php 
include'menu.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.1">
    <title>Owner</title>
    <style>
        <?php
        include('css/signup.css');
        include('css/new.css');
        ?>
    </style>
</head>
<body>
    <div class="outer">
        <div class="inner">
            <div class="picture">
                <h1>Stocks</h1>
            </div>
            <div class="user">
                <h2><center class="sign-up">Stock Entry</center></h2>
                <form class="form-element" action="stock_process.php" method="POST" enctype="multipart/form-data">
                    <input  id="name" type="number" name="stock_id" placeholder="Stock id" required>     
                    <input  id="name" type="text" name="stock_name" placeholder="Stock name" required> 
                    <input  id="name" type="text" name="stock_seller" placeholder="Stock Seller Name" required> 
                    <input  id="name" type="date" name="stock_received" place_holder="Stock received date"required> 
                    <input  id="name" type="number" name="stock_quantity" placeholder="Stock Quantity" required> 
                    <!-- display post -->
                    <br>
                   <input id="post" type="file" name="DpProfile" >
                   <!-- display post end -->
                    <!-- name of the file -->
                    <hr>
                   <center><input name="submit" id="sign-up" type="submit" value="Update"></center>
                   <center><p><?php
                   if (isset($_SESSION['error'])) {
                       echo $_SESSION['error'];
                   }
                   ?></p></center>
                </form>
            </div>
        </div>
     </div>
</body>
</html>
<?php } ?>