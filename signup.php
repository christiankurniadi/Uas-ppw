<?php
include 'connection.php';

$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$password = $_POST['password'];

$qry = "INSERT INTO tb_customer(name,phoneNumber,email,password) values(?,?,?,?)"; 

$state = $conn->prepare($qry);
$state->bind_param("ssss",$name,$phoneNumber,$email,$password);
$state->execute();

$state->close();
$conn->close();

header("location:signinForm.html");
?>