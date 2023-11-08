<?php
	require"connection.php";
	if(isset($_POST['edit'])){

		$query = "UPDATE penimbangan SET id_anak=?,tanggal_timbang=?,lingkar_kepala=?,berat_timbangan=?,tinggi_pengukuran=?,id_bidan=? WHERE id_penimbangan=?;";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['timbang-anak']);
		$data->bindParam(2,$_POST['tanggal-timbang']);
		$data->bindParam(3,$_POST['lingkar-kepala']);
		$data->bindParam(4,$_POST['berat']);
		$data->bindParam(5,$_POST['tinggi']);
		$data->bindParam(6,$_POST['timbang-bidan']);
		$data->bindParam(7,$_POST['penimbangan']);


		$berhasil = $data->execute();

		if($berhasil){
			header("Location: ../../bidan/penimbangan.php");
		}else{
			echo "Gagal di edit";
		}
	}	

?>