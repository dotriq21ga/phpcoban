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
	<?php 
	$id = $_GET['id'];
	require '../connect.php';
	$sql = "select * from game where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);

	$sql = "select * from game";
	$manufacturers = mysqli_query($connect,$sql);
	?>
	<form method="post" action="process_update.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		Tên
		<input type="text" name="name" value="<?php echo $each['name'] ?>">
		<br>
		Đổi ảnh mới
		<input type="file" name="img_new">
		<br>
		Hoặc giữ ảnh cũ
		<img src="photos/<?php echo $each['img'] ?>" height='100'>
		<input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">
		<br>
		<button>Sửa</button>
	</form>
</body>
</html>