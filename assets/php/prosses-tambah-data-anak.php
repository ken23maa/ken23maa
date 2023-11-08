<?php
require "connection.php";
	if(isset($_POST['simpan'])){
		$query = "INSERT INTO anak(NIK, namaanak, tempatlahir, tanggallahir, jenis_kelamin, berat_badan,tinggi_badan,id_ortu,anak_ke) VALUES(?,?,?,?,?,?,?,?,?)";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['nik']);
		$data->bindParam(2,$_POST['nama-anak']);
		$data->bindParam(3,$_POST['tempat-lahir']);
		$data->bindParam(4,$_POST['tanggal-lahir']);
		$data->bindParam(5,$_POST['jk']);
		$data->bindParam(6,$_POST['bb']);
		$data->bindParam(7,$_POST['tb']);
		$data->bindParam(8,$_POST['id_ortu']);
		$data->bindParam(9,$_POST['anakke']);


		$berhasil = $data->execute();
		if($berhasil){
			header("Location: ../../bidan/anak.php");
		}else{
			echo "<script>Data gagal Di tambahkan</script>";
		}
	}
?>
