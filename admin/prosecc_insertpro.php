<?php 
require 'check_admin.php'; 

$id_game = $_POST['id_game'];
$product = $_POST['product'];
$price = $_POST['price'];

require '../connect.php';
$sql = "insert into pro(product,price,id_game)
values('$product','$price','$id_game')";
mysqli_query($connect,$sql);
mysqli_close($connect);