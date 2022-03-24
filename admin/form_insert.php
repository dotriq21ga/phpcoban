<?php 
require 'check_admin.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <form method="post" action="process_insert.php" enctype="multipart/form-data">
        Tên
        <input type="text" name="name">
        <br>
        Ảnh
        <input type="file" name="img">
        <button type='submit'>Thêm</button>
    </form>
</body>
</html>