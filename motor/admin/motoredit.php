<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions.php';
	
	$id_motor = $_GET["id_motor"];

	$motor = query("SELECT * FROM motor WHERE id_motor = $id_motor")[0];
if (isset($_POST["submit"])) {
	
	if(ubah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Diubah');
				document.location.href = 'index.php?p=motor';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Diubah')
				document.location.href = 'index.php?p=motor';
		</script>";
	}

}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
	<body>
		<div class="container"><br>
		<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-tittle">Edit Data Motor</h3>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
				<input type="hidden" name="id_motor" value="<?= $motor["id_motor"]; ?>">
				<input class="form-control" type="hidden" name="gambarlama" value="<?= $motor["gambar_produk"]; ?>">
			</div>
				<div class="form-group">
				<label for="pabrikan_motor">Pabrikan Motor :</label>
				<select class="form-control" name="pabrikan_motor" id="pabrikan_motor" value="<?= $motor["pabrikan_motor"]; ?>">
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
				<input class="form-control" type="text" name="merek_motor" id="merek_motor" value="<?= $motor["merek_motor"]; ?>">
				</div>
				<div class="form-group">
				<label for="spesifikasi_motor">Spesifikasi Motor :</label>
				<textarea class="form-control" name="spesifikasi_motor" id="spesifikasi_motor" value="<?= $motor["spesifikasi_motor"]; ?>" ></textarea>
				</div>
				<div class="form-group">
				<label for="harga_motor">Harga Motor :</label>
				<input class="form-control" type="text" name="harga_motor" id="harga_motor" value="<?= $motor["harga_motor"]; ?>">
				</div>
				<div class="form-group">
				<label for="gambar_motor">Gambar Motor :</label>
				<input type="file" name="gambar_motor" id="gambar_motor">
				<input type="checkbox" name="ubah_gambar"/>
			</div>
			<button name="submit" type="submit" class="btn btn-primary">Edit Data Motor</button>
	</div>
	</form>
	</div>
	</body>
</html>