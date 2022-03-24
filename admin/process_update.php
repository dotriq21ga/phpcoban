<?php 
require 'check_admin.php'; 

$id = $_POST['id'];
$name = $_POST['name'];
$photo_new = $_FILES['img_new'];
if($photo_new['size'] > 0){
	$folder = 'photos/';
	$file_extension = explode('.', $photo_new['name'])[1];
	$file_name = time() . '.' . $file_extension;
	$path_file = $folder . $file_name;
	move_uploaded_file($photo_new["tmp_name"], $path_file);
} else {
	$file_name = $_POST['photo_old'];
}


require '../connect.php';
$sql = "update game
set
name = '$name',
img = '$file_name'
where
id = '$id'
";

mysqli_query($connect,$sql);
mysqli_close($connect);