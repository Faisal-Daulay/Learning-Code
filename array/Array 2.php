<?php 
	$data=array('ayam', 'bebek', 'kambing', 'kuda');

	$no++;
	for ($i=0; $i < count($data) ; $i++) {
		echo "&nbsp;".$data[$i]."<br/>";
	}

	echo "<br/>"; 
	foreach ($data as $index => $isi) {
		$urut=$index+1;
		echo "&nbsp; $urut index ke $index = $isi<br/>";
	}

?>