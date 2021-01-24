<?php
class Mahasiswa {
	function tampil($nama,$name){
		echo $nama."<br/>";
		echo $name."<br/>";
	}

	function tampil1($nama){
		echo $nama."<br/>";
	}

	function tampil2($buah){
		foreach ($buah as $asbuah) {
			echo $asbuah."<br/>";
		}
	}

	function kaliseratus($nilai){
		$kembali=$nilai*100;
		return $kembali;
	}
}

$sis = new Mahasiswa();
$sis->tampil('faisal','padli');
$sis->tampil('dani','aris');
$sis->tampil('iqbal','andi');

$nil=$sis->kaliseratus(10);
$sis->tampil1($nil);

$buah=array("mangga","jeruk","apel");
$sis->tampil2($buah);
?>