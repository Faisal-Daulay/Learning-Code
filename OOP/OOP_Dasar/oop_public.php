<?php
	echo "<h2>Belajar OOP Public</h2>";
	class laptop {
		//Membuat Property Dari CLASS Laptop
		public $pemilik;
		public $merk;
		public $ukuran_layar;

		//Membuat Methode Dari CLASS Laptop
		function hidupkan_laptop() {
			return "Hidup";
		}

		function matikan_laptop() {
			return "Mati";
		}
	}
	//Membuat Objek Dari Class laptop
	$laptop1 = new laptop();	
	$laptop2 = new laptop();
	
	//Set Property1
	$laptop1->pemilik="Faisal";
	$laptop1->merk="Acer";
	$laptop1->ukuran_layar="14Inc";
	//Set Property2
	$laptop2->pemilik="Joko";
	$laptop2->merk="Toshiba	";
	$laptop2->ukuran_layar="16Inc";

	//Menampilkan Property 1
	echo $laptop1->pemilik."<br/>";
	echo $laptop1->merk."<br/>";
	echo $laptop1->ukuran_layar."<br/>";
	echo "Kondisi Laptop ".$laptop1->hidupkan_laptop()."<br/><br/>";
	//Menampilkan Property 2
	echo $laptop2->pemilik."<br/>";
	echo $laptop2->merk."<br/>";
	echo $laptop2->ukuran_layar."<br/>";
	echo "Kondisi Laptop ".$laptop2->matikan_laptop();
?>