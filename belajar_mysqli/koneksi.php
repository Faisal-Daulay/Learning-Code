<?php
	$db = mysqli_connect("localhost","root","","db_musik");
	if (mysqli_connect_errno($db)) {
		echo "gagal konek".mysqli_connect_errno();
	}
?>