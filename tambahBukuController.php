<?php 
include("connection.php");

$tempjudul=$_POST['judul'];
$tempdesc=$_POST['desc'];
$tempstatus=$_POST['status'];

$query= "INSERT INTO buku(`Title`, `description`, `status`) VALUES ('$tempjudul','$tempdesc','$tempstatus')";

$temp=$conn->query($query);
header('Location: index.php');
?>