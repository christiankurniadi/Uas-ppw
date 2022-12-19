<?php
    session_start();
    include "connection.php";

      $email = $_POST['email'];
      $password =  $_POST['password'];
      $qry = "SELECT email,password FROM tb_admin WHERE email='$email' AND password='$password'";
      $cek = mysqli_query($conn,$qry);

      if(mysqli_num_rows($cek) == 1){
        $_SESSION['username'] = $email;
        header('Location:index.php');
        exit;
      }else{
        var_dump($cek);
        // header("location:login.html");
      }
?>