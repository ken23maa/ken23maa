<?php
	require 'connection.php';
	if(isset($_POST['hapus'])){
		// Query Hapus
		$query = "DELETE FROM orang_tua WHERE id_ortu=?";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['id_ortu']);
		$berhasil = $data->execute();

		if($berhasil){
			header("Location: ../../bidan/orangtua.php");
		}else{
			echo "Gagal di hapus";
		}
	} 
?>