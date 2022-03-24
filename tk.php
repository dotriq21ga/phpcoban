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
        $id= $_GET['id'];
        require 'connect.php';
        $sql = "select * from pro
        where (id_game = '$id' and id_account is null)";   
        $result = mysqli_query($connect,$sql);
    ?>
    <table >
		<tr>
			<th>Mã sản phẩm</th>
			<th>Tên sản phẩm</th>
			<th>Mã game</th>
		</tr>
		<?php foreach ($result as $each): ?>
			<tr>
				<th><?php echo $each['id'] ?></th>
				<th><?php echo $each['product'] ?></th>
                <th><?php echo $each['id_game'] ?></th>
                <th>
                    <a href="gd.php?id=<?php echo $each['id'] ?>"> Mua sản phẩm</a>
                </th>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>