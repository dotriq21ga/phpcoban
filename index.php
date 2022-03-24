<?php
    require 'foo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'connect.php';
        $sql = "select * from game";   
        $result = mysqli_query($connect,$sql);
    ?>
	<h1>Lựa chọn</h1>
	<a href="./admin/form_insert.php">
		Thêm
	</a>
	<table >
		<tr>
			<th>Mã</th>
			<th>Tên</th>
			<th>Ảnh</th>
            <th>Sửa</th>
			<th>Xóa</th>
			<th>Thêm tài khoản</th>
			<th></th>
		</tr>
		<?php foreach ($result as $each): ?>
			<tr>
				<th><?php echo $each['id'] ?></th>
				<th><?php echo $each['name'] ?></th>
				<th>
					<img height="100" src="./admin/photos/<?php echo $each['img'] ?>">
				</th>
                <th>
					<a href="./admin/form_update.php?id=<?php echo $each['id'] ?>">
						Sửa
					</a>
                </th>
				<th>
					<a href="./admin/delete.php?id=<?php echo $each['id'] ?>">
						Xoá
					</a>
				</th>
				<th>
					<a href="./admin/insert_pro.php?id=<?php echo $each['id'] ?>">
						Thêm sản phẩm	
					</a>
				</th>
				<th>
					<a href="tk.php?id=<?php echo $each['id'] ?>">
						Xem chi tiết	
					</a>
				</th>

			</tr>
		<?php endforeach ?>
	</table>

    </body>
</html>