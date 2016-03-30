<?php

if(! isset($_GET['id'])) die('Invalid id!');

require_once "functions.php";

$data = view_single_warga($_GET['id']);

?>

<form action="action_edit.php" method="post">
	<table>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><input type="text" readonly name="warga_id" value="<?php echo $data['warga_id'] ?>" /></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="warga_nama" value="<?php echo $data['warga_nama'] ?>" /></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="warga_kelamin">
					<option <?php if($data['warga_kelamin'] == "Pria") echo "selected" ?> value="Pria">Pria</option>
					<option <?php if($data['warga_kelamin'] == "Wanita") echo "selected" ?> value="Wanita">Wanita</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td><input type="text" name="warga_pekerjaan"  value="<?php echo $data['warga_pekerjaan'] ?>" /></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="warga_alamat"><?php echo $data['warga_alamat'] ?></textarea></td>
		</tr>
	</table>

	<input type="submit" value="Simpan Data"></input>
</form>