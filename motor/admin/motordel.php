<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions.php';

$id_motor = $_GET["id_motor"];

if(hapus($id_motor) > 0 ){
	echo "<script>
				alert('Data Berhasil Dihapus');
				document.location.href = 'index.php?p=motor';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Dihapus')
				document.location.href = 'index.php?p=motor';
		</script>";
	}

	
?>