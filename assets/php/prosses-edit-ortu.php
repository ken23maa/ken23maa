<?php
	require"connection.php";
	if(isset($_POST['edit'])){

		$query = "UPDATE orang_tua SET NIK=?,namaayah=?,namaibu=?,notelp=?,alamat=? WHERE id_ortu=?;";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['nik']);
		$data->bindParam(2,$_POST['nama-ayah']);
		$data->bindParam(3,$_POST['nama-ibu']);
		$data->bindParam(4,$_POST['notelp']);
		$data->bindParam(5,$_POST['alamat']);
		$data->bindParam(6,$_POST['id_ortu']);
        
		$berhasil = $data->execute();

		if($berhasil){
			header("Location: ../../bidan/orangtua.php");
		}else{
			echo "Gagal di edit";
		}
	}	

?>