<?php
$name=$_REQUEST['nama'];
$kelas=$_REQUEST['kelas'];
$alamat=$_REQUEST['alamat'];

$con = mysqli_connect("localhost","root","","lat_oop");
if (!$con) {
	echo "Koneksi Error";
}

$query = "INSERT INTO crud_oop(nama,kelas,alamat) VALUES('$name','$kelas','$alamat') ";
$run = $con -> query($query);
if ($run) {
	echo "Berhasil Insert"."</br>";
	echo "<a href='tampil.php'>Lihat Data</a>";
} else {
	echo "Gagal Insert";
}


?>