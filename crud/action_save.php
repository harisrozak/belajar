<?php

require_once "functions.php";

if($_POST) 
{
	insert('warga', $_POST);

	echo "<h3>";
	echo "Data anda telah disimpan ";
	echo "<a href='index.php'>Klik disini untuk melihat</a>";
	echo "</h3>";
}