<?php
  include'../koneksi.php';

  $sql = $konek -> query("SELECT * FROM produk");
  $result = array();
  while ($ambil = $sql->fetch_assoc()) {
  	$result[] = $ambil;
  }
  echo json_encode($result);
?>
