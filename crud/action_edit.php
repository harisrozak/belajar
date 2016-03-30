<?php

require_once "functions.php";

if($_POST && isset($_POST['warga_id'])) 
{
	$id = $_POST['warga_id'];

	// remove 'warga_id' from $_POST, because it's will not be edit
	unset($_POST['warga_id']);

	edit('warga', $_POST, 'warga_id', $id);

	echo "<h3>";
	echo "Data anda telah diedit ";
	echo "<a href='index.php'>Klik disini untuk melihat</a>";
	echo "</h3>";
}