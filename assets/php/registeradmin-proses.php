<?php
	require 'connection.php';

	if(isset($_POST['register'])){
		$name = $_POST['nama_admin'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$password = $_POST['password'];

	$query = "INSERT INTO admin(nama_admin,username,password) VALUES(?,?,?)";
	$data = $connect->prepare($query);

		$data->bindParam(1,$name);
		$data->bindParam(2,$username);
		$data->bindParam(3,$password);

	$succes = $data->execute();

	if($succes){
		header("location: ../../admin/login-admin.php");
	}else{
		echo "Register Gagal";
		header("../../register-admin.php");
	}
	}
?>