<?php
	echo "<h2>Belajar OOP Protected</h2>";
	class laptop {
		protected $pemilik="Faisal Humairi";

		public function akses_pemilik() {
			return $this->pemilik;
		}

		protected function hidupkan_laptop() {
			return "Hidup";
		}

		public function paksa_laptop() {
			return $this->hidupkan_laptop();
		}
	}
	$laptop1 = new laptop();

	echo $laptop1->akses_pemilik()."<br/>";
	echo "Kondisi Laptop ".$laptop1->paksa_laptop();
?>