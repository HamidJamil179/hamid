<?php

$conn = mysqli_connect("localhost","root","","db_motor");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	} 
	return $rows;
}

function tambah($data){
	global $conn;
	$pabrikan_motor = htmlspecialchars( $data["pabrikan_motor"]);
	$merek_motor = htmlspecialchars( $data["merek_motor"]);
	$spesifikasi_motor = htmlspecialchars( $data["spesifikasi_motor"]);
	$harga_motor = htmlspecialchars( $data["harga_motor"]); 

	$gambar = upload();
	if(!$gambar){
		return false;
	}

		$query = "INSERT INTO motor VALUES ('','$pabrikan_motor','$merek_motor','$spesifikasi_motor','$harga_motor','$gambar' )";

	mysqli_query($conn,$query) ;

	return mysqli_affected_rows($conn);

}
function upload(){

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if($error === 4){
		echo "<script> alert('Upload Gambar Dahulu') </script>?";
		return false;
	}


	$ekstensiGambarValid = ['jpg' ,'jpeg','png'];
	$ekstensiGambar = explode('.',$namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar,$ekstensiGambarValid)) {
		echo "<script> alert('Yang Diupload Bukan Gambar') </script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .='.';
	$namaFileBaru.=$ekstensiGambar;
	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
	return $namaFileBaru;
}	

function hapus($id_motor){
	global $conn;
	mysqli_query($conn,"DELETE  FROM motor WHERE id_motor='$id_motor'");
	return mysqli_affected_rows($conn);
}
	function ubah($data){
		global $conn;

		$id_motor = $data["id_motor"];
		$pabrikan_motor = htmlspecialchars( $data["pabrikan_motor"]);
		$merek_motor = htmlspecialchars($data["merek_motor"]);
		$spesifikasi_motor = htmlspecialchars($data["spesifikasi_motor"]);
		$harga_motor = htmlspecialchars($data["harga_motor"]);

		if(isset($data["ubah_gambar"])){
			$ekstensiDiperbolehkan = array('jpg', 'png', 'jpeg');
			$nama = $_FILES['gambar']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$file_tmp = $_FILES['gambar']['tmp_name'];
			$fileBaru = $nama;

			if(move_uploaded_file($file_tmp, 'img/'.$fileBaru)){
				$query = "SELECT * FROM motor WHERE id_motor";
				$result = mysqli_query($conn, $query);
				$data = mysqli_fetch_assoc($result);

				if (is_file('img/'. $data["gambar"])) {
						unlink('img/'. $data["gambar"]);
				}

				$query = "UPDATE motor SET pabrikan_motor = '$pabrikan_motor', merek_motor = '$merek_motor', gambar = '$fileBaru', spesifikasi_motor = '$spesifikasi_motor', harga_motor = '$harga_motor', WHERE id_motor = $id_motor ";
			}
		}else{
			$query = "UPDATE motor SET pabrikan_motor = '$pabrikan_motor',merek_motor = '$merek_motor', spesifikasi_motor = '$spesifikasi_motor', harga_motor = '$harga_motor' WHERE id_motor = $id_motor ";
		}


		mysqli_query($conn, $query);

	    return mysqli_affected_rows($conn);
	}

	function submit($keyword){
		$query = "SELECT * FROM motor WHERE
		pabrikan_motor LIKE '%keyword' OR
		merek_motor LIKE '%$keyword%' OR 
		spesifikasi_motor LIKE '%$keyword%' OR
		harga_motor LIKE '%$keyword%'";

		return query($query);
	}
?>