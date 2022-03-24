<?php 
    session_start();
    $e = $_SESSION['id'];
	$id= $_GET['id'];
    require 'connect.php';
    $sql = "update pro
    set
    id_account = '$e'
    where
    id = '$id'
    ";

    mysqli_query($connect,$sql);
    mysqli_close($connect);
?>