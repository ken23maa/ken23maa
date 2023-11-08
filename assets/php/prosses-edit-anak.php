<?php
	require"connection.php";
	if(isset($_POST['edit'])){

		$query = "UPDATE orang_tua SET NIK=?,namaanak=?,tempatlahir=?,tanggallahir=?,jenis_kelamin=?,berat_badan=?,tinggi_badan=?,anak_ke=? WHERE id_anak=?;";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['nik']);
		$data->bindParam(2,$_POST['nama-anak']);
		$data->bindParam(3,$_POST['tempatlahir']);
		$data->bindParam(4,$_POST['tanggallahir']);
		$data->bindParam(5,$_POST['jk']);
		$data->bindParam(6,$_POST['bb']);
		$data->bindParam(7,$_POST['tb']);
		$data->bindParam(8,$_POST['anakke']);

        
		$berhasil = $data->execute();

		if($berhasil){
			header("Location: ../../bidan/anak.php");
		}else{
			echo "Gagal di edit";
		}
	}	

?>