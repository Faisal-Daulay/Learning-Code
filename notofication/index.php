<?php

    $sqli = mysqli_connect("localhost","root","","db_sias");
    //$tgl_awal = date('Y/m/d');
    $izin  = mysqli_query($sqli,"select * from izin");
    
    while($ambil = mysqli_fetch_array($izin)){

        $tgl_awal = $ambil['tgl_awal_izin'];
        $tgl_akhir = $ambil['tgl_akhir_izin'];

        $awal = strtotime($tgl_awal);
        $akhir = strtotime($tgl_akhir);

        if($awal > $akhir) {
            $diff = $awal-$akhir;
            $hari = abs(floor($diff / (60 * 60 * 24)));
            echo "udah selesai<br/>";
            echo "Selesai Hari : ".$hari." yang lalu";
        } else {
            $diff = $awal-$akhir;
            $hari = abs(floor($diff / (60 * 60 * 24)));
            echo "belum selesai<br/>";        
            echo "Lama Hari : ".$hari;
        }
    }
?>