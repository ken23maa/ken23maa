<?php
require "connection.php";
	if(isset($_POST['simpan'])){
		$query = "INSERT INTO bidan(nama_bidan,username,password,tempatlahir,tanggallahir,jeniskelamin,notelp,alamat) VALUES(?,?,?,?,?,?,?,?)";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['namabidan']);
		$data->bindParam(2,$_POST['username']);
		$data->bindParam(3,password_hash($_POST['password'],PASSWORD_DEFAULT));
		$data->bindParam(4,$_POST['tempatlahir']);
        $data->bindParam(5,$_POST['tanggallahir']);
        $data->bindParam(6,$_POST['jk']);
        $data->bindParam(7,$_POST['notelp']);
		$data->bindParam(8,$_POST['alamat']);

		$berhasil = $data->execute();
		if($berhasil){
			header("Location: ../../admin/bidan.php");
		}else{
			echo "<script>Data gagal Di tambahkan</script>";
		}
	}
?>
