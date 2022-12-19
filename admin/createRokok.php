<?php
include 'connection.php';

$name = $_POST['namaProduk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$src = $_POST['gambar'];

$qry = "INSERT INTO tb_rokok(namaProduk, deskripsi, harga, gambar) values(?,?,?,?)"; 

$state = $conn->prepare($qry);
$state->bind_param("ssis",$name,$deskripsi,$harga,$src);
$state->execute();

$state->close();
$conn->close();

header("location:tableRokok.php");
?>