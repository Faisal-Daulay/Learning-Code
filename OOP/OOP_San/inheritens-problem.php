<?php 

	class Produk {
		// PROPERTY
		public $judul,
			   $penulis,
			   $penerbit,
			   $harga,
			   $jlhhalaman,
			   $waktumain,
			   $tipe;

		// METHOD __construct bisa menampung nila default
		public function __construct( $judul, $penulis, $penerbit, $harga, $jlhhalaman, $waktumain, $tipe ) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jlhhalaman = $jlhhalaman;
			$this->waktumain = $waktumain;
			$this->tipe = $tipe;
		}

		// METHOD
		public function getData() {
			// $this untuk mengabil property di luar dari method yang ada dalam class itu sendiri
			return "$this->penulis, $this->penerbit";
		}

		public function infoLengkap() {
			$str = "{$this->tipe} : {$this->judul} | {$this->getData()} | Rp.{$this->harga}";
			if ($this->tipe == "Komik") {
				$str .= " - {$this->jlhhalaman} Halaman.";
			} elseif ($this->tipe == "Game") {
				$str .= " ~ {$this->waktumain} Jam.";				
			}
			return $str;
		}

	}

	class CetakProduk {

		public function cetak( Produk $produk ) {
			$str = "{$produk->judul} | {$produk->getData()} | Rp.{$produk->harga}";
			return $str;
		}

	}

	$produk1 = new Produk("Naruto", "Masahsi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
	$produk2 = new Produk("Salon Hijab", "Dhani & Iqbal", "Dhuo Creative", 50000, 0, 50, "Game");

	echo $produk1->infoLengkap();
	echo "<br/>";
	echo $produk2->infoLengkap();

	

 