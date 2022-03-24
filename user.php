<?php 
    session_start();
    $e = $_SESSION['id'];
    require 'connect.php';
    $sql = "select * from account
    where
    id = '$e'
    ";
    $b = $_SESSION['id'];
    $sql2 = "select * from pro
    where
    id_account = '$b'";
    $tk = mysqli_query($connect,$sql);
    $pros =mysqli_query($connect,$sql2);
    mysqli_close($connect);
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
    <table >
		<tr>
			<th>Mã</th>
			<th>Tên</th>
		</tr>
		<?php foreach ($tk as $each): ?>
			<tr>
				<th><?php echo $each['id'] ?></th>
				<th><?php echo $each['name'] ?></th>
			</tr>
		<?php endforeach ?>
	</table>
    <table >
		<tr>
			<th>Mã</th>
			<th>Tên</th>
            <th>Giá</th>
		</tr>
		<?php foreach ($pros as $each): ?>
			<tr>
				<th><?php echo $each['id'] ?></th>
				<th><?php echo $each['product'] ?></th>
                <th><?php echo $each['price'] ?></th>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>