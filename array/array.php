<?php 
	$buah=array("Apel","Jeruk","Pisang");
	echo $buah[0];
	echo $buah[1];
	echo $buah[2];
	echo "<br/><br/>  ";

	$nilai1 = 80;
	$nilai2 = 95;
	$nilai3 = 150;

	$nilai=array("Joko" => $nilai1,"Rifi" => $nilai2,"Wawan" => $nilai3);
	echo "Nilai Joko = ".$nilai['Joko'];
	echo "<br/>Nilai Rifi = ".$nilai['Rifi'];
	echo "<br/>Nilai Wawan = ".$nilai['Wawan'];
	echo "<br/><br/>";

	echo "Meampilkan array dengan for :<br/>";
	$warna=array("Yellow","Red","Blue","Green","Grey","Black");
	for ($i=0; $i < count($warna) ; $i++) { 
		echo "Warna apa yang kamu suka <font color=$warna[$i]>".$warna[$i]."</font> ? <br/>" ;
	}

	echo "<br/>";
	echo "Meampilkan array dengan foreach :<br/>";
	foreach ($warna as $aswarna) {
		echo "Warna apa yang kamu suka <font color=$aswarna>".$aswarna."</font> ? <br/>" ;	
	}

	echo "<br/>";
	echo "Menampilkan bulan dengan array :";
	$bulan= array("January","February","Mei","Maret","April","Juni","Juli","Agustus","September","Oktober","November","Desember");
	foreach ($bulan as $asbulan) {
		echo "<br/>".$asbulan;
	}

?>