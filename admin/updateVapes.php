<?php
include 'connection.php';

$id_produk = $_POST['id_produk'];
$namaProduk = $_POST['namaProduk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$src = $_POST['gambar'];

$qry = "UPDATE `tb_vapes` SET `namaProduk`= ?, `deskripsi` = ?, `harga` = ?, `gambar` = ? WHERE `id_produk`= ?"; 

$state = $conn->prepare($qry);
$state->bind_param("ssisi", $namaProduk, $deskripsi, $harga, $src, $id_produk);
$state->execute();

$state->close();
$conn->close();

header("location:tableVape.php");
?>