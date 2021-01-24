<?php
$id = $_REQUEST['id'];
$name=$_REQUEST['nama'];
$kelas=$_REQUEST['kelas'];
$alamat=$_REQUEST['alamat'];
$con = mysqli_connect("localhost","root","","lat_oop");
if (!$con) {
	echo "Koneksi Error";
}

$edit = "UPDATE crud_oop SET nama='$name',
							 kelas='$kelas',
							 alamat='$alamat'
							 WHERE id_crud='$id' ";

$run = $con->query($edit);
if ($run) {
	echo "Berhasil di Edit";
} else {
	echo "Gagal di Edit";
}
?>