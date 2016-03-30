<?php
require_once "header.php";
require_once "functions.php";

if(isset($_GET['id']))
{
	delete_warga($_GET['id']);

	echo "<h3>";
	echo "Data dengan id {$_GET['id']} telah dihapus! ";
	echo "<a href='index.php'>Klik disini untuk melihat</a>";
	echo "</h3>";
}

require_once "footer.php";