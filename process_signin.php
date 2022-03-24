<?php 

$name = $_POST['name'];
$password = $_POST['password'];

require 'connect.php';
$sql = "select * from account
where name = '$name' and password = '$password'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_num_rows($result);

if($number_rows == 1){
	header('location:index.php');
    session_start();
	$each = mysqli_fetch_array($result);
	$id = $each['id'];
	$_SESSION['id'] = $id;
	$_SESSION['name'] = $each['name'];
	$_SESSION['admin'] = $each['admin'];
    exit;
} else{
	header('location:form_signin.php');
}