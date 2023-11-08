<?php
	require"connection.php";
	if(isset($_POST['edit'])){

		$query = "UPDATE imunisasi SET id_bidan=?,id_anak=?,id_jenisimunisasi=?,tanggal_imunisasi=? WHERE id_imunisasi=?;";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['imun-bidan']);
		$data->bindParam(2,$_POST['imun-anak']);
		$data->bindParam(3,$_POST['imun-jenis']);
		$data->bindParam(4,$_POST['imun-tanggal']);
		$data->bindParam(5,$_POST['imunisasi']);
		$berhasil = $data->execute();

		if($berhasil){
			header("Location: ../../bidan/imunisasi.php");
		}else{
			echo "Gagal di edit";
		}
	}	

?>