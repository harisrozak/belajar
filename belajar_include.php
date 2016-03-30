<?php
require_once "belajar_include_2.php";

echo "file 1 <br>";

$arr_nama = array('Elena', 'Ari', 'Haris');
$arr_umur = array('4 tahun', '24 tahun', '26 tahun');
$jumlah = count($arr_nama); // menghitung jumlah array

for ($i=0; $i < $jumlah; $i++) 
{ 
	nama($arr_nama[$i]);
	umur($arr_umur[$i]);
}


nama('Paijo');
umur('40 tahun');

hitung_tambah(5,6);