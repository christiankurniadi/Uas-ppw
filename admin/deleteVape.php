<?php
include 'connection.php';

$id_produk = $_POST['id_produk'];

$qry = "DELETE FROM `tb_vapes` WHERE id_produk = ?"; 

$state = $conn->prepare($qry);
$state->bind_param("i",$id_produk);
$state->execute();

$state->close();
$conn->close();

header("location:tableVape.php");
?>