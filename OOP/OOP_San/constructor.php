<?php 

	class Produk {
		// PROPERTY
		public $judul,
			   $penulis,
			   $penerbit,
			   $harga;

		public function __construct( $judul, $penulis, $penerbit, $harga) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		// METHOD
		public function getData() {
			// $this untuk mengabil property di luar dari method yang ada dalam class itu sendiri
			return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
		}

	}

	$produk1 = new Produk("Naruto", "Masahsi Kishimoto", "Shonen Jump", 30000);
	$produk2 = new Produk("Salon Hijab", "Dhani & Iqbal", "Dhuo Creative", 50000);

	echo "Komik : " . $produk1 -> getData();
	echo "<br/>";
	echo "Game : " . $produk2 -> getData();

 