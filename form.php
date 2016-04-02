Ini adalalh form

<form action="target.php" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input name="nama"></input></td>
		</tr>

		<tr>
			<td>Umur</td>
			<td>:</td>
			<td><input name="umur"></input></td>
		</tr>

		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
				<select name="pekerjaan">
					<option value="Pelajar">Pelajar</option>
					<option value="Menikah">Menikah</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<textarea name="alamat"></textarea>
			</td>
		</tr>
	</table>

	<input type="submit" value="Submit Data"></input>
</form>