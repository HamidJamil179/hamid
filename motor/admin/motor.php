<?php
require 'functions.php';

$motor = query("SELECT * FROM motor");

if(isset($_POST["submit"])){
	$motor = submit($_POST["keyword"]);
}
?>

<html lang="en">
	<head>
		<title>Motor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>	
	<body>
		<div class="container"><br>
			<div class="card">
		<div class="card-header">
		<center><h4>Data Motor</h4></center>
	</div>
		<div class="card-body">
		<div class="form-group">
		<a href="motoradd.php" class="btn btn-primary">Tambah Motor</a>
		<div class="table-responsive"><br>
		<table class="table table-borderless table-dark">
			<thead class="thead-dark table-bordered">
			<tr>
				<th scope="col">No.</th>
				<th scope="col">Pabrikan</th>
				<th scope="col">Merek</th>
				<th scope="col">Spesifikasi</th>
				<th scope="col">Harga</th>
				<th scope="col">Gambar</th>
				<th scope="col">Aksi</th>
			</tr>
			</thead>
			<?php  $i = 1;?>
			<?php foreach ($motor as $row):?>
			<tbody>
			<tr>
				<td><?=	 $i; ?></td>
				<td><?= $row ["pabrikan_motor"];?></td>
				<td><?= $row ["merek_motor"];?></td>
				<td><?= $row["spesifikasi_motor"];?></td>
				<td><?= $row["harga_motor"];?></td>
				<td><img src="img/<?= $row ["gambar_motor"]; ?>" style="width: 300px;"></td>
				<td>
					<a href="motoredit.php?id_motor=<?= $row ["id_motor"]; ?>" class="btn btn-warning">Edit</a>
					
					<a href="motordel.php?id_motor=<?= $row ["id_motor"]; ?>" class="btn btn-danger" onclick ="return confirm('Apakah Ingin Menghapus?');">Delete</a>				
				</td>
			</tr>
			</tbody>
			<?php $i++;?>
		<?php endforeach;?>
		</table>
</div>
</div>
</div>
</div>
	</body>
</html>