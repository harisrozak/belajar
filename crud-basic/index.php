<?php
require_once "functions.php";

$data_warga = view_all_warga();
$no = 1;
?>

<h1>Data Warga</h1>

<h4><a href="add_data.php">Tambah Data</a></h4>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Pekerjaan</th>
		<th>Alamat</th>
		<th>Action</th>
	</tr>

	<?php foreach ($data_warga as $key => $value): ?>

	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $value['warga_nama'] ?></td>
		<td><?php echo $value['warga_kelamin'] ?></td>
		<td><?php echo $value['warga_pekerjaan'] ?></td>
		<td><?php echo $value['warga_alamat'] ?></td>
		<td>
			<a href="action_delete.php?id=<?php echo $value['warga_id'] ?>">Hapus</a>
			<a href="edit_data.php?id=<?php echo $value['warga_id'] ?>">Edit</a>
		</td>
	</tr>

	<?php endforeach; ?>

</table>