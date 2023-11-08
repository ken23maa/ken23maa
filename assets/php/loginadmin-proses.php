<?php
require 'connection.php';

if (isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "SELECT * FROM admin WHERE username=?";
  $data = $connect->prepare($query);
  $data->bindParam(1, $username);
  $data->execute();

  $user = $data->fetch(PDO::FETCH_OBJ);
  if ($password == $user->password){
    session_start();
    $_SESSION['username'] = $user->username;
    $_SESSION['id'] = $user->id_admin;
    
    header("location: ../../admin/index.php");
  }
  // }else{

  //   echo "<script>alert('Gagal login! Coba Lagi');window.location='../../admin/login-admin.php';</script>";
  // }
}
?>