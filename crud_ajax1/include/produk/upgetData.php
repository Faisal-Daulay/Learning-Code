<?php
	include '../koneksi.php';

	$id = $_POST["id"];

	$result = array();

	$sql = $konek -> query("SELECT * FROM produk WHERE id_produk='$id' ");
	$ambil = $sql -> fetch_assoc();
	$result = $ambil;
	echo json_encode($result);
?>