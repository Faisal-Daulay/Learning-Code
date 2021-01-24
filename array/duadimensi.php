<?php
	$data=array(
					array("Nama"=>"Joko","Nilai"=>80),
					array("Nama"=>"Dodi","Nilai"=>70),
					array("Nama"=>"Rido","Nilai"=>90)
				);

		/*echo $data[0][0]."&nbsp;";
		echo $data[0][1]."<br/>";
		echo $data[1][0]."&nbsp;";
		echo $data[1][1]."<br/>";
		echo $data[2][0]."&nbsp;";
		echo $data[2][1]."&nbsp;";*/

	foreach ($data as $index => $isi) {
		/*echo "<br/>";
		foreach ($isi as $data_jen => $jenis) {
			echo $jenis."&nbsp;";
		}*/
		echo "Nama = ".$isi["Nama"]."&nbsp;" ;
		echo "Nilai = ".$isi["Nilai"];
		echo "<br/>";		
	}

	echo "<br/>urutan asort array<br/>";
	$kata=array("a"=>"rido", "b"=>"fazar", "c"=>"koko", "d"=>"rudi");
	asort($kata);
	foreach ($kata as $kunci => $koil) {
		echo "$kunci = $koil\n<br/>";
	}

	echo "<br/>urutan sort array Dengan for<br/>";
	$angka=array(1, 2, 3, 4, 5, 6);
	sort($angka);
	$arrlenght = count($angka);
	for ($i=0; $i < $arrlenght ; $i++) { 
		echo $angka[$i];
	}

	echo "<br/><br/>urutan sort array Dengan foreach<br/>";
	$roe=array("Joko"=>20, "Rido"=>23, "Fazar"=>15);
	sort($roe);
	foreach ($roe as $w => $umur) {
		echo "Nama =".$w."Umur =".$umur."<br/>";
	}

	echo "<br/><br/>Array Multidimensional<br/>";
	$shop=array(
				array("Mobil"=>"Avanza", "Merk"=>Toyota),
				array("Mobil"=>"Kijang Inova", "Merk"=>Mitsubishi)
			);
	ksort($shop);
	foreach ($shop as $oke => $val) {
		$no=$oke+1;
		echo "$no.$oke.Ini Mobil =".$val["Mobil"]."&nbsp;	";
		echo "Merk =".$val["Merk"]."<br/>";
	}
?>