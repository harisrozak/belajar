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
function view_all($table)
{
	$db = database();
	$query = "SELECT * FROM $table";

	$result = $db->query($query) or die($db->error);	
	$rows = array();

	while($row = mysqli_fetch_array($result)) {
		$rows[] = $row;
	}

	return $rows;
}

// Insert data to database's table
function insert($table, $data)
{
	if(! is_array($data)) return;

	$db = database();
	$keys = implode(',', array_keys($data));

	// add slashes then implode the values
	$values = array_map('addSlashes', array_values($data));
	$values = implode('","', $values);
	$values = '"' . $values . '"';
	
	/**
	 * MySQL query example:
	 *
	 * INSERT INTO warga (warga_nama, warga_kelamin, warga_pekerjaan, warga_alamat)
	 * VALUES ("John Snow", "Pria", "Lord Commander of the Night's Watch", "Winterfell")
	 */

	$query = "INSERT INTO $table ($keys) VALUES ($values)";

	$db->query($query) or die($db->error);
}

// delete a single data (row) on the database's table
function delete($table, $col_id, $id)
{
	$db = database();
	$query = "DELETE FROM $table WHERE $col_id = $id";
	
	$db->query($query) or die($db->error);
}

// Show a single data (row) on the database's table
function view_single($table, $col_id, $id)
{
	$db = database();
	$query = "SELECT * FROM $table WHERE $col_id = $id";

	$result = $db->query($query) or die($db->error);	
	$row = mysqli_fetch_array($result);

	return $row;
}

// edit a single data (row) on the database's table
function edit($table, $data, $col_id, $id)
{
	if(! is_array($data)) return;

	$db = database();
	$query_set = '';

	foreach ($data as $key => $value) {
		$value = addSlashes($value);
		$query_set .= "$key = '$value',";
	}

	// remove first and last commas
	$query_set = trim($query_set, ",");
	
	/**
	 * MySQL query example:
	 *
	 * UPDATE warga SET warga_nama = "John Snow",warga_kelamin = "Pria",
	 * warga_pekerjaan = "Night's Watcher",warga_alamat = "Winterfell"
	 * WHERE warga_id = 1
	 */

	$query = "UPDATE $table SET $query_set WHERE $col_id = $id";

	$db->query($query) or die($db->error);
}