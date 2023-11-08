<?php
	require"connection.php";
	if(isset($_POST['edit'])){

		$query = "UPDATE bidan SET nama_bidan=?,username=?,password=?,tempatlahir=?,tanggallahir=?,jeniskelamin=?,alamat=?,notelp=? WHERE id_bidan=?";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['namabidan']);
		$data->bindParam(2,$_POST['username']);
		$data->bindParam(3,$_POST['password']);
		$data->bindParam(4,$_POST['tempatlahir']);
		$data->bindParam(5,$_POST['tanggallahir']);
		$data->bindParam(6,$_POST['jk']);
		$data->bindParam(7,$_POST['alamat']);
		$data->bindParam(8,$_POST['notelp']);
		$data->bindParam(9,$_POST['id_bidan']);
        
		$berhasil = $data->execute();

		if($berhasil){
			header("Location: ../../admin/bidan.php");
		}else{
			echo "Gagal di edit";
		}
	}	

?>