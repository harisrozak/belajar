<form action="action_save.php" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="warga_nama" /></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="warga_kelamin">
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td><input type="text" name="warga_pekerjaan" /></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="warga_alamat"></textarea></td>
		</tr>
	</table>

	<input type="submit" value="Simpan Data"></input>
</form>