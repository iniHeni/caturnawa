<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true ){
    	echo '<script>window.location="loginadmin.php"</script>';
    }

	$kat = 0;
	if(isset($_GET['kat'])){
		$kat = $_GET['kat'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa - Data Penilaian</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<?php
	include 'mainmenu.php';
	?>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Data Penilaian</h3>
			<div class="box">
				<p><a href="tambah-penilaian.php?kat=<?php echo $kat; ?>">Tambah Data Penilaian</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="40px">No</th>
							<th>Hari</th>
							<th>Room</th>
                            <th>Nama Tim</th>
                            <th>Posisi</th>
                            <th colspan="2">Nama Peserta</th>
							<th colspan="2">Skor</th>
							<th>Skor Tim</th>
							<th>Rank</th>
							<th>Juri</th>
							<th width="120px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$penilaian = mysqli_query($conn, "SELECT * FROM tb_penilaian A LEFT JOIN tb_category B ON A.category_id=B.category_id WHERE A.category_id=" . $kat . " ORDER BY A.skor_tim DESC");
							if(mysqli_num_rows($penilaian) > 0){

							while($row = mysqli_fetch_array($penilaian)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td><?php echo $row['room'] ?></td>
                            <td><?php echo $row['tim'] ?></td>
                            <td><?php echo $row['posisi'] ?></td>
                            <td><?php echo $row['peserta'] ?></td>
							<td><?php echo $row['peserta_dua'] ?></td>
							<td><?php echo  $row['skor'] ?></td>
							<td><?php echo  $row['skor_dua'] ?></td>
							<td><?php echo  $row['skor_tim'] ?></td>
							<td><?php echo  $no ?></td>
                            <td><?php echo  $row['juri'] ?></td>
							<td>
								<a href="edit-penilaian.php?kat=<?php echo $kat; ?>&id=<?php echo $row['penilaian_id'] ?>">Edit</a> || <a href="proses-hapus.php?kat=<?php echo $kat; ?>&idp=<?php echo $row['penilaian_id'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="13">Tidak ada data</td>
							</tr>		

						<?php } ?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; UNAS FEST 2023.</small>
		</div>
	</footer>
</body>
</html>