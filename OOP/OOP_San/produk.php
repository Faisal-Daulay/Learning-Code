<?php 

	class Produk {
		// PROPERTY
		public $judul,
			   $penulis,
			   $penerbit,
			   $harga;

		// METHOD
		public function getData() {
			// $this untuk mengabil property di luar dari method yang ada dalam class itu sendiri
			return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
		}

	}

	$produk1 = new Produk();
	$produk1 -> judul = "NARUTO";
	$produk1 -> penulis = "Masashi Kishimoto";
	$produk1 -> penerbit = "Shonen Jump";
	$produk1 -> harga = 25000;

	$produk2 = new Produk();
	$produk2 -> judul = "Uncarted";
	$produk2 -> penulis = "Shinta";
	$produk2 -> penerbit = "Dhui Creative";
	$produk2 -> harga = 250000;

	echo "Komik : " . $produk1 -> getData();
	echo "<br/>";
	echo "Game : " . $produk2 -> getData();

