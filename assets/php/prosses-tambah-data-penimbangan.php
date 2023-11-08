<?php
require "connection.php";
	if(isset($_POST['simpan'])){
		$query = "INSERT INTO penimbangan(id_anak,tanggal_timbang,lingkar_kepala,berat_timbangan,tinggi_pengukuran,id_bidan) VALUES(?,?,?,?,?,?)";
		$data = $connect->prepare($query);

		$data->bindParam(1,$_POST['anak']);
		$data->bindParam(2,$_POST['tanggal-timbang']);
		$data->bindParam(3,$_POST['kepala']);
		$data->bindParam(4,$_POST['bb']);
		$data->bindParam(5,$_POST['tb']);
		$data->bindParam(6,$_POST['bidan']);


		$berhasil = $data->execute();
		if($berhasil){
			header("Location: ../../bidan/penimbangan.php");
		}else{
			echo "<script>Data gagal Di tambahkan</script>";
		}
	}
?>
