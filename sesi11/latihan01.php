<?php
$dta  ["NIM"] = "21104141";
$dta  ["NAMA"] = "Panza";
$dta  ["TANGGAL_LAHIR"] = "02/04/2002";
$dta  ["ALAMAT"] = "Jalan Tukad Pancoran";
$dta  ["JKEL"] = "L";
header("content-type: application/json; charset=utf-8");
echo json_encode($dta);