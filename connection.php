<?php 
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='perpus';

	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(!$conn){
		die("Gagal masuk ke database, ".mysqli_connect_error());
	}
?>