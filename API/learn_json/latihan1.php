<!-- 
    json_decode = untuk mengubah json ke dalam bentuk array
    json_encode = untuk mengubah array ke dalam bentuk json
 -->
<?php

    $ambil_data_json = file_get_contents('data.json');

    $result = json_decode($ambil_data_json, true);
    
    var_dump($result);

    echo $result[0]["layanan"][0]."<br/>"; //untuk mengambil data json array
    echo $result[0]["customer"]["customer2"]; //untuk mengambil data json object