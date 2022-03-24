<?php
 require 'foo.php'
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
    <form method = 'post' action="process_signup.php">
    <div class="mb-3 mt-3">
        Tên Tài Khoản
        <input type="text" class="form-control"  placeholder="Tên tài khoản" name="name">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>

