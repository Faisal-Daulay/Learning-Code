<?php
 
	$nabar = str_replace(" ", "_", strtolower($_REQUEST['nabar']));
	$jebar = $_REQUEST['jebar'];
	$jubar = $_REQUEST['jubar'];
	 
	include 'dompdf/dompdf_config.inc.php';
	 
	$html =
	  '<html><body>'.
	  '<h1>Nama Barang '.$nabar.'</h1>'.
	  '<p>Jenis Barang : '.$jebar.'</p>'.
	  '<p>Jumlah Barang : '.$jubar.'</p>'.
	  '</body></html>';
	 
	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream('laporan_'.$nabar.'.pdf');
 
?>