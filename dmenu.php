<?php session_start(); ?>
<?php if (isset($_SESSION['setted'])) { ?>
<?php 
include'menu.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.xyz li
{
  list-style: none;
  margin-top: 8px;
}
.xyz li a{
  text-decoration: none;
  color: white;
  font-size: 30px;
}
.xyz li a:hover{
  background-color: black;
  height: 30px;
}
  .xyz
{
  display:flex;
  flex-direction:column;
  align-items: center;
  justify-content: space-between;
}

</style>
<style>
<?php
    include('css/menu.css');
    include('css/new.css');
    include('css/dmenu.css');
    ?>
</style>
</head>
<body>

<ul class="xyz">
  <li><a href="dstocks.php">Show Stocks</a></li>
  <li><a href="drice.php"> Show Rice</a></li>
  <li><a href="drecords.php">Show Records</a></li>
  <li><a href="dbilling.php">Show Billing</a></li>
  <li><a href="dcustomer.php">Show customer</a></li>
</ul>
</body>
</html>
<?php }?>