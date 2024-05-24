<?php
	
	include 'db_edc.php';

	if(isset($_GET['idk'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_category WHERE category_id = '".$_GET['idk']."' ");
		echo '<script>window.location="data-kategori_eng.php"</script>';
	}

	if(isset($_GET['idp']) && isset($_GET['kat'])){
		$kat = $_GET['kat'];
		$delete = mysqli_query($conn, "DELETE FROM tb_penilaian WHERE penilaian_id = '".$_GET['idp']."' ");
		echo '<script>window.location="data-penilaian_eng.php?kat='.$kat.'"</script>';
	}

	if(isset($_GET['idps'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_peserta WHERE peserta_id = '".$_GET['idps']."' ");
		echo '<script>window.location="data-peserta_eng.php"</script>';
	}

	if(isset($_GET['idr'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_rank WHERE rank_id = '".$_GET['idr']."' ");
		echo '<script>window.location="point_eng.php"</script>';
	}

	if(isset($_GET['idkr'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_kategori WHERE id = '".$_GET['idkr']."' ");
		echo '<script>window.location="babak_eng.php"</script>';
	}
?>