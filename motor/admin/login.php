<?php
	session_start();

	if (isset($_SESSION["login"])) {
		header("Location:index.php");
	}
	
	require 'functions.php';
	if(isset($_POST["login"])){
		$username=$_POST["username"];
		$password=$_POST["password"];

		$result = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username'");

		if(mysqli_num_rows($result)===1){
			$row = mysqli_fetch_assoc($result);
			$_SESSION["login"]=true;
			header("Location:index.php");
			exit; 	
		}
		$error = true;
	}
		
?>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="" method="post" enctype="multipart/form-data">
              <div class="form-label-group">
                <input type="text" id="username" class="form-control" placeholder="Username" name="username">
                <label for="username">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" class="form-control" placeholder="Password" name="password">
                <label for="password">Password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" value="submit" name="login">Sign in</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>