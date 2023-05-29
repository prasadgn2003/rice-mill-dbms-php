<?php session_start(); ?>
<?php if (isset($_SESSION['setted'])) { ?>
<?php
        include 'menu.php';
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
                <h1>Billing</h1>
            </div>
            <div class="user">
                <h2><center class="sign-up">Billing details</h2>
                <form class="form-element" action="billing_process.php" method="POST" enctype="multipart/form-data">
                    <input  id="name" type="number" name="rice_id" placeholder="Rice id" required> 
                    <input  id="name" type="number" name="bill_no" placeholder="Bill no" required> 
                    <input  id="name" type="date" name="selling_date" placeholder="Selling date" required> 
                    <input  id="name" type="number" name="price" placeholder="Price" required> 
                    <input  id="name" type="number" name="rice_quantity" placeholder="Rice quantity" required> 
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
<?php }?>