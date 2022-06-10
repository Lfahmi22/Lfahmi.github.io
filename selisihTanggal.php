<?php
$tanggal1 = "32-4-2022";
$tanggal2 = "30-4-2022";
$dataTanggal1   = strtotime($tanggal1);
$dataTanggal2   = strtotime($tanggal2);

if($tanggal1 <= $tanggal2){
    $selisih = $dataTanggal2 - $dataTanggal1;
    $hari = $selisih / 86400;
    $hari = floor($hari);
    echo "Selisih Tanggal : $hari hari";
}
