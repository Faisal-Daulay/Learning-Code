<?php
class laptop {
	public $pemilik="Andi";
	public function hidup() {
		return "Hidupkan Laptop $this->pemilik";
	}
}
$laptop_baru = new laptop();
echo $laptop_baru->hidup()."<br/>";
$laptop_baru->pemilik="Ari";
echo $laptop_baru->hidup()."<br/>";
$laptop_lama= new laptop();
echo $laptop_lama->hidup();
?>