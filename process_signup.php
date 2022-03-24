<?php 

$name = $_POST['name'];
$password = $_POST['password'];

require 'connect.php';

$sql = "select count(*) from account
where name = '$name'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if($number_rows == 1){
	session_start();
	$_SESSION['error'] = 'Email đã trùng!Vui lòng đăng kí lại';
	header('location:form_signup.php');
	exit;
}
header('location:form_signin.php');
$sql = "insert into account(name,password)
value ('$name','$password')";
mysqli_query($connect,$sql);


mysqli_close($connect);
