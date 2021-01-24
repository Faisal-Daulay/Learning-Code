<?php
	echo "<h2>Belajar OOP Private</h2>";
	class komputer {
		protected $merk = "Toshiba,Acer,Apple,Samsung";
		protected $user = "faisal";

		public function tampilkan_merk($username) {
			return $this->merk = $username;
		}
	}
	class laptop extends komputer {
		public function tampilkan_laptop() {
			return $this->merk;
		}
	}

	class pc extends laptop {
		public function tampilkan_pc() {
			return $this->user;
		}
	}

	$komputer = new komputer();
	$laptop1 = new laptop();
	$pc1 = new pc();

	echo $pc1->tampilkan_pc();
	echo "Merk Laptop ".$komputer->tampilkan_merk("parameter")."<br/>";
	echo $laptop1->tampilkan_laptop();
?>