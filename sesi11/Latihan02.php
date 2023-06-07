<?php
$dta  [0]["NIM"] = "21104141";
$dta  [0]["NAMA"] = "Panza";
$dta  [0]["TANGGAL_LAHIR"] = "02/04/2002";
$dta  [0]["ALAMAT"] = "Jalan Tukad Pancoran";
$dta  [0]["JKEL"] = "L";

$dta  [1]["NIM"] = "21102022";
$dta  [1]["NAMA"] = "Helioz";
$dta  [1]["TANGGAL_LAHIR"] = "02/04/2001";
$dta  [1]["ALAMAT"] = "Jalan Kehidupan";
$dta  [1]["JKEL"] = "L";

$dta  [2]["NIM"] = "21106060";
$dta  [2]["NAMA"] = "Bidadari";
$dta  [2]["TANGGAL_LAHIR"] = "04/06/2002";
$dta  [2]["ALAMAT"] = "Jalan Tukad Badung";
$dta  [2]["JKEL"] = "P";

$dta  [3]["NIM"] = "21103223";
$dta  [3]["NAMA"] = "Niya";
$dta  [3]["TANGGAL_LAHIR"] = "04/06/2003";
$dta  [3]["ALAMAT"] = "Jalan Cinta";
$dta  [3]["JKEL"] = "P";
header("content-type: application/json; charset=utf-8");
echo json_encode($dta);