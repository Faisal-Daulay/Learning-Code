<?php
	include '../koneksi.php';

	//$result["pesan"] = "";
	$id = $_REQUEST['id'];

	$sql = $konek -> query("DELETE FROM produk WHERE id_produk='$id' ");

?>