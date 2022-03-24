<?php 

session_start();
if($_SESSION['admin']==1 || $_SESSION['admin'] ==null){
	header('location:../index.php');
	exit;
}
