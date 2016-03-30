<?php

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];

echo "Nama saya adalah $nama, umur saya $umur, pekerjaan saya $pekerjaan <br>";
echo "Alamat saya: $alamat <br>";

if($umur < 17) {
	echo "kamu masih remaja";
}
else if($umur >= 17 && $umur <= 35) {
	echo "kamu sudah dewasa";
}
else {
	echo "kamu sudah tua";
}

?>

<br>
<a href="form.php">Kembali</a>