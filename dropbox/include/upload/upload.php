<?php 
	header('Content-Type: applocation/json');

	$uploaded = array();

	if (!empty($_FILES['file']['name'][0])) {
		foreach ($_FILES['file']['name'] as $position => $name) {
			$uplod = move_uploaded_file($_FILES['file']['tmp_name'][$position], '/opt/lampp/htdocs/latihanku/dropbox/images/'. $name);
			if ($uplod) {
				$uploaded[] = array(
					'name' => $name,
					'file' => 'images/'. $name
				);
			}
		}
	}

	echo json_encode($uploaded);

	// include 'include/koneksi.php';
	// $isi = $_REQUEST['isi'];

 //   	$lokasi_file = $_FILES['files']['tmp_name'];
 //   	$tipe_file   = $_FILES['files']['type'];
 //   	$nama_file   = $_FILES['files']['name'];
 //   	$size		 = $_FILES['files']['size'];
 //   	$direktori 	 = "/opt/lampp/htdocs/dhuo_project/Beacukai/dropbox/images/$nama_file";

 //   	if ($isi!=="") {
 //        $upload = move_uploaded_file($lokasi_file, $direktori);
 //        if ($upload) {
	//    		$sql = "INSERT INTO upload (surat, img) VALUES ('$isi', '$nama_file');";
	//    		$query = mysqli_query($db,$sql);
	//    		echo "
	// 			<script>
	// 				alert('Success');
	// 				window.location = '?hal=content.php'
	// 			</script>
	//    		";
 //        } else {
	//    		echo "
	// 			<script>
	// 				alert('Failed');
	// 				window.location = '?hal=content.php'
	// 			</script>
	//    		";
 //   		}
 //   	} else {
 //   		echo "
	// 		<script>
	// 			alert('Isi Form Dengan Benar');
	// 			window.location = '?hal=content.php'
	// 		</script>
 //   		";
 // //   	}
	// mysqli_close($db);

?>