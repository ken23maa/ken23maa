<?php
require "connection.php";
	if(isset($_POST['simpan'])){
		$query = "INSERT INTO orang_tua(NIK,password,namaayah,namaibu,notelp,alamat) VALUES(?,?,?,?,?,?)";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['nik']);
		$data->bindParam(2,$_POST['password']);
		$data->bindParam(3,$_POST['nama-ayah']);
		$data->bindParam(4,$_POST['nama-ibu']);
		$data->bindParam(5,$_POST['notelp']);
		$data->bindParam(6,$_POST['alamat']);

		$berhasil = $data->execute();
		if($berhasil){
			header("Location: ../../bidan/orangtua.php");
		}else{
			echo "<script>Data gagal Di tambahkan</script>";
		}
	}
?>
