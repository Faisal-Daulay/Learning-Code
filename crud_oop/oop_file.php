<?php
class database {
	public $host ="localhost";
	public $userhost ="root";
	public $pass ="";
	public $dbname ="ex_oop";

	//Method Koneksi
	public function konek(){
		mysql_connect($this->host,$this->userhost,$this->pass);
		if(mysql_select_db($this->dbname)) {
			echo "";
		} else {
			echo "Gagal";
		}
	}

	//Method Data Insert
	public function insert($nama,$alamat,$telepon) {
		$query = mysql_query("INSERT INTO anggota (nama,alamat,telpon) VALUES('$nama','$alamat','$telepon')");
	}

	//Method Tampil Data
	public function tampil(){
		$tampil1 = mysql_query("SELECT * FROM anggota");
		while ($ambil=mysql_fetch_array($tampil1))
			$data[] = $ambil;
			return $data;
	}

	//Method Hapus Data
	public function hapus($kirim){
		$hapus = mysql_query("DELETE FROM anggota WHERE id_anggota='$kirim' ");
		echo " Data Berhasil DI Hapus";
	}
}
?>