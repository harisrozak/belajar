<?php

require_once "functions.php";

if($_POST)
{
	edit_warga($_POST);

	echo "<h3>";
	echo "Data anda telah diedit ";
	echo "<a href='index.php'>Klik disini untuk melihat</a>";
	echo "</h3>";
}