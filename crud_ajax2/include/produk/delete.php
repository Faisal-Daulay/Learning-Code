<?php
	include '../koneksi.php';

	$id = $_REQUEST['id'];
	$produk = $konek -> query("DELETE FROM produk WHERE id_produk='$id' ");
?>