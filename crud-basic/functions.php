<?php

// Connection to the database
function database()
{
	$host = "localhost";
	$user = "root";
	$password = "root";
	$database = "belajar-crud";
	
	$mysqli = new mysqli($host,$user,$password,$database);

	return $mysqli;
}

// Show all data on the database's table
function view_all_warga()
{
	$db = database();
	$query = "SELECT * FROM warga";

	$result = $db->query($query) or die($db->error);	
	$rows = array();

	while($row = mysqli_fetch_array($result)) {
		$rows[] = $row;
	}

	return $rows;
}

// Insert data to database's table
function insert_warga($data)
{
	$db = database();

	$warga_nama = addSlashes($data['warga_nama']);
	$warga_kelamin = addSlashes($data['warga_kelamin']);
	$warga_pekerjaan = addSlashes($data['warga_pekerjaan']);
	$warga_alamat = addSlashes($data['warga_alamat']);

	$query = "INSERT INTO warga (warga_nama, warga_kelamin, warga_pekerjaan, warga_alamat)
		VALUES ('$warga_nama', '$warga_kelamin', '$warga_pekerjaan', '$warga_alamat')";

	$db->query($query) or die($db->error);
}

// delete a single data (row) on the database's table
function delete_warga($id)
{
	$db = database();
	$query = "DELETE FROM warga WHERE warga_id = $id";
	
	$db->query($query) or die($db->error);
}

// Show a single data (row) on the database's table
function view_single_warga($id)
{
	$db = database();
	$query = "SELECT * FROM warga WHERE warga_id = $id";

	$result = $db->query($query) or die($db->error);	
	$row = mysqli_fetch_array($result);

	return $row;
}

// edit a single data (row) on the database's table
function edit_warga($data)
{
	$db = database();
	
	$warga_id = $data['warga_id'];
	$warga_nama = addSlashes($data['warga_nama']);
	$warga_kelamin = addSlashes($data['warga_kelamin']);
	$warga_pekerjaan = addSlashes($data['warga_pekerjaan']);
	$warga_alamat = addSlashes($data['warga_alamat']);

	$query = "UPDATE warga SET 
		warga_nama = '$warga_nama',
		warga_kelamin = '$warga_kelamin',
		warga_pekerjaan = '$warga_pekerjaan',
		warga_alamat = '$warga_alamat'
		WHERE warga_id = $warga_id";

	$db->query($query) or die($db->error);
}