<?php
require "connection.php";
	if(isset($_POST['simpan'])){
		
		$query = "INSERT INTO imunisasi(id_anak, id_bidan, tanggal_imunisasi, id_jenisimunisasi) VALUES(?,?,?,?)";
		$data = $connect->prepare($query);

		$data->bindParam(1, $_POST['imun-anak']);
		$data->bindParam(2, $_POST['imun-bidan']);
		$data->bindParam(3,$_POST['imun-tanggal']);
		$data->bindParam(4, $_POST['imun-jenis']);


		$berhasil = $data->execute();
		if($berhasil){
			header("Location: ../../bidan/imunisasi.php");
		}else{
			echo "<script>Data gagal Di tambahkan</script>";
		}
	}
?>
