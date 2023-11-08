<?php
	require 'connection.php';
	if(isset($_POST['hapus'])){
		// Query Hapus
		$query = "DELETE FROM imunisasi WHERE id_imunisasi=?";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['id_imunisasi']);
		$berhasil = $data->execute();

		if($berhasil){
			header("Location: ../../bidan/imunisasi.php");
		}else{
			echo "Gagal di hapus";
		}
	} 
?>