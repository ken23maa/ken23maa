<?php
	require 'connection.php';
	if(isset($_POST['hapus'])){
		// Query Hapus
		$query = "DELETE FROM anak WHERE id_anak=?";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['id_anak']);
		$berhasil = $data->execute();

		if($berhasil){
			header("Location: ../../bidan/anak.php");
		}else{
			echo "Gagal di hapus";
		}
	} 
?>