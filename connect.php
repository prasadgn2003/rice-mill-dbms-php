<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ricemill';

$conn = mysqli_connect($hostname,$username,$password,$dbname) or die(mysqli_error());
// $db_select = mysqli_select_db($conn,$dbname) or die(mysqli_error());
?>