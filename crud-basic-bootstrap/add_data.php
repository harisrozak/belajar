<?php require_once "header.php"; ?>

<h1>Tambah Data Warga</h1>
<hr>

<form action="action_save.php" method="post">

	<div class="form-group">
	    <label>Nama</label>
	    <input type="text" class="form-control" name="warga_nama" placeholder="Nama">
  	</div>

  	<div class="form-group">
	    <label>Jenis Kelamin</label>
	    <select class="form-control" name="warga_kelamin">
			<option value="Pria">Pria</option>
			<option value="Wanita">Wanita</option>
		</select>
  	</div>

  	<div class="form-group">
	    <label>Pekerjaan</label>
	    <input type="text" class="form-control" name="warga_pekerjaan" placeholder="Pekerjaan">
  	</div>

  	<div class="form-group">
	    <label>Alamat</label>
	    <textarea class="form-control" name="warga_alamat" placeholder="Alamat"></textarea>
  	</div>

	<input type="submit" class="btn btn-primary" value="Simpan Data"></input>
</form>

<?php require_once "footer.php"; ?>