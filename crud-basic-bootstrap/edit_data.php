<?php
require_once "header.php";
require_once "functions.php";

if(! isset($_GET['id'])) die('Invalid id!');

$data = view_single_warga($_GET['id']);

?>

<h1>Edit Data Warga</h1>
<hr>

<form action="action_edit.php" method="post">

	<div class="form-group">
	    <label>ID</label>
	    <input type="text" class="form-control" readonly name="warga_id" value="<?php echo $data['warga_id'] ?>" />
  	</div>

  	<div class="form-group">
	    <label>Nama</label>
	    <input type="text" class="form-control" name="warga_nama" value="<?php echo $data['warga_nama'] ?>" placeholder="Nama">
  	</div>

  	<div class="form-group">
	    <label>Jenis Kelamin</label>
	    <select class="form-control" name="warga_kelamin">
			<option <?php if($data['warga_kelamin'] == "Pria") echo "selected" ?> value="Pria">Pria</option>
			<option <?php if($data['warga_kelamin'] == "Wanita") echo "selected" ?> value="Wanita">Wanita</option>
		</select>
  	</div>

  	<div class="form-group">
	    <label>Pekerjaan</label>
	    <input type="text" class="form-control" name="warga_pekerjaan" value="<?php echo $data['warga_pekerjaan'] ?>" placeholder="Pekerjaan">
  	</div>

  	<div class="form-group">
	    <label>Alamat</label>
	    <textarea class="form-control" name="warga_alamat" placeholder="Alamat"><?php echo $data['warga_alamat'] ?></textarea>
  	</div>

	<input type="submit" class="btn btn-primary" value="Simpan Data"></input>

</form>

<?php require_once "footer.php"; ?>