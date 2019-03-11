<?php
include "konfigurasi.php";
$link = "https://www.proxy-list.download/api/v1/get?";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$link" . "type=" . "$type" . "&anon=" . "$anonymity" . "&country=" . "$country");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
echo "==================" . "\n";
$response = curl_exec($ch);
echo $response;
$credits = "====================" ."\n" . "| SCRIPT BY ARUDJI |" . "\n" . "====================" ."\n";
echo $credits;
unlink("hasil.txt");
$hasil = fopen("hasil.txt","a");
fputs ($hasil, $response);
fputs ($hasil, $credits);
fclose ($hasil);