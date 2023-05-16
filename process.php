<?php
$teks = $_POST['teks'];
$angka = $_POST['angka'];
$array = [];
for ($i = 0; $i < $angka; $i++) {
    array_push($array, "$teks . $i");
}
header('Content-Type: application/json');
echo json_encode($array);
?>