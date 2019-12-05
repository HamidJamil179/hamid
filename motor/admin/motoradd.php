<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions.php';
if (isset($_POST["submit"])) {
	
	if(tambah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href = 'index.php?p=motor';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Ditambahkan')
				document.location.href = 'index.php?motor';
		</script>";
	}

}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
	</head>
	<body>
			<div class="container"><br>
			<div class="card">
			<div class="card-header">
			<h3 class="card-tittle">Tambah Data Motor</h3>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group ">
				<label for="pabrikan_motor"> Pabrikan Motor :</label>
				<select class="form-control" name="pabrikan_motor" id="pabrikan_motor">
						<option value="YAMAHA">YAMAHA</option>
						<option value="HONDA">HONDA</option>
						<option value="SUZUKI">SUZUKI</option>
						<option value="KAWASAKI">KAWASAKI</option>
						<option value="DUCATI">DUCATI</option>
						<option value="Harley Davidson">Harley Davidson</option>
					</select>
				</div>
				<div class="form-group">
				<label for="merek_motor">Merek Motor :</label>
				<input class="form-control" name="merek_motor" id="merek_motor">
			</div>
			<div class="form-group">
				<label for="spesifikasi_motor">Spesifikasi Motor :</label>
				<textarea class="form-control" type="text" name="spesifikasi_motor" id="spesifikasi_motor"></textarea> 
			</div>
			<div class="form-group">
				<label for="harga_motor">Harga Motor :</label>
				<input class="form-control" type="text" name="harga_motor" id="harga_motor" placeholder="Rp. 36.900.000,-">
			</div>
			<div class="form-group">
				<label for="gambar">Gambar Motor :</label>
				<input type="file" name="gambar" id="gambar">
			</div>
			<button name="submit" type="submit" class="btn btn-primary">Tambah Data Motor</button>
		</div>
	</form>
	</div>
</div>
</div>
	</div>
	</div>
	</body>
</html>