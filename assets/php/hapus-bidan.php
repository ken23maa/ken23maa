<?php
	require 'connection.php';
	if(isset($_POST['hapus'])){
		// Query Hapus
		$query = "DELETE FROM bidan WHERE id_bidan=?";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['id_bidan']);
		$berhasil = $data->execute();

		if($berhasil){
			header("Location: ../../admin/bidan.php");
		}else{
			echo "Gagal di hapus";
		}
	} 
?>