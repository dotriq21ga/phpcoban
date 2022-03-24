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
	$id= $_GET['id'];

	?>
	<form method="post" action="prosecc_insertpro.php" >
		<input type="hidden" name="id_game" value="<?php echo $id?>">
		Tên sản phẩm
		<input type="text" name="product">
		<br>
		Giá
		<input type="text" name="price">
		<br>
		<button>Sửa</button>
	</form>
</body>
</html>