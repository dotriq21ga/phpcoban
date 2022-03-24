<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/webcobanphp/">Trang chủ</a>
        </li>
      </ul>
      <form class="d-flex">
        <?php
          session_start(); 
          $a =$_SESSION['name'];
          $t =$_SESSION['id'];
          if(empty($_SESSION['id'])){
            echo "<li class='nav-item'><a class='nav-link' href='form_signup.php'>Đăng kí</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='form_signin.php'>Đăng nhập</a></li>";
          }else{
            echo "<li class='nav-item'><a class='nav-link' href='user.php?id=<?php echo '$t' ?>$a</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='signout.php'>Đăng xuất</a></li>";
          }
          
        ?>
      </form>
    </div>
  </div>
</nav>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>