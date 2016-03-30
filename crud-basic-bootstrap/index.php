<?php
require_once "header.php";
require_once "functions.php";

$data_warga = view_all_warga();
$no = 1;
?>

<h1>Data Warga</h1>
<hr>

<table class="table table-striped table-bordered">
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
		<td align="center" width="120px">			
			<a class="btn btn-default btn-xs" href="edit_data.php?id=<?php echo $value['warga_id'] ?>">EDIT</a>
			<a class="btn btn-danger btn-xs" href="action_delete.php?id=<?php echo $value['warga_id'] ?>">HAPUS</a>
		</td>
	</tr>

	<?php endforeach; ?>

</table>

<?php require_once "footer.php"; ?>