<?php

	//NILAI YANG SUDAH DI TETAPKAN
	function tambah () 
	{
		$a = 50;
		$b = 5;
		$hasil = $a+$b;
		return $hasil;
	}
	$x=tambah();
	echo "Hasil Penambahan = ".$x."<br/>";

	//NILAI YANG BELUM DI KETAHUI ATAU BERASAL DARI SUATU OBJEK
	function kurang($c,$d) {
		$out = $c-$d;
		return $out;
	}
	$z=kurang(30,20);
	echo "Hasil Pengurangan = ".$z;
?>