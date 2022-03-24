<?php 
require 'check_admin.php';

$id = $_GET['id'];

require '../connect.php';
$sql = "delete from game where id = '$id'";

mysqli_query($connect,$sql);
mysqli_close($connect);