<?php
	include '../koneksi.php';

	$result["pesan"] = "";
	$id = $_REQUEST['id'];
	$nama = $_REQUEST['nama'];
	$descrip = $_REQUEST['descrip'];
	$harga = $_REQUEST['harga'];

	if ($nama=="") {
		$result['pesan'] = "Isi Nama Produk";
	} elseif ($descrip=="") {
		$result['pesan'] = "Isi Description Produk";
	} elseif ($harga=="") {
		$result['pesan'] = "Isi Harga Produk";	
	} else {
		$produk = $konek -> query("UPDATE produk SET nama='$nama',
													 descrip='$descrip',
													 harga='$harga'
													 WHERE id_produk='$id' ");
		if ($produk) {
			$result["pesan"] = "Update Berhasil !";
		} else {
			$result["pesan"] = "Update Gagal !";	
		}
	}

	echo json_encode($result);
?>