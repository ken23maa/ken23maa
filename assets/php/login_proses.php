<?php
require 'connection.php';

if (isset($_POST["login"])){
  $nikortu = $_POST["nikortu"];
  $password = $_POST["password"];

  $query = "SELECT * FROM orang_tua WHERE NIK=?";
  $data = $connect->prepare($query);
  $data->bindParam(1, $nikortu);
  $data->execute();

  $user = $data->fetch(PDO::FETCH_OBJ);
  
  if (strcmp($password, $user->password) == 0){
    session_start();
    $_SESSION['nik'] = $user->NIK;
    $_SESSION['id'] = $user->id_ortu;
    
    header("location: ../../user/index.php");
  }else{
    echo "<script>alert('Gagal login! Coba Lagi');window.location='../../index.php';</script>";
  }
}
?>