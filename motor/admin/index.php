<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
$conn = mysqli_connect("localhost","root","","db_motor");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"  href="<?= "?p=produk"; ?>">Administrator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?="?p=motor"; ?>"?>Motor</a>
      </li>
      <li>
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="" method="post">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
  </div>
</nav>

<?php
  if(@$_GET["p"] == "logout"){
    include "logout.php";
  }else if(@$_GET["p"] == "motor"){
    include "motor.php";
  }else if(@$_GET["p"] == "motoradd"){
    include"motoradd.php";
  }else if(@$_GET["p"]== "motordel"){
    include "motordel.php";
  }else if(@$_GET["p"] =="motoredit"){
    include "motoredit.php";
  }else{
    include "home.php";
  }
 ?>
  </body>
</html>