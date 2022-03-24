<?php 
require 'check_admin.php'; 

$name = addslashes($_POST['name']);
$img = $_FILES['img'];

$folder = 'photos/';
$file_extension = explode('.', $img['name'])[1];
$file_name = time() . '.' . $file_extension;
$path_file = $folder . $file_name;

move_uploaded_file($img["tmp_name"], $path_file);

require '../connect.php';
$sql = "insert into game(name,img)
values('$name','$file_name')";

mysqli_query($connect,$sql);
mysqli_close($connect);