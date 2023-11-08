<?php
	require 'connection.php';
	if(isset($_POST['hapus'])){
		// Query Hapus
		$query = "DELETE FROM penimbangan WHERE id_penimbangan=?";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['id_penimbangan']);
		$berhasil = $data->execute();

		if($berhasil){
			header("Location: ../../bidan/penimbangan.php");
		}else{
			echo "Gagal di hapus";
		}
	} 
?>