<?php
    session_start();
    include 'db_edc.php';
    if($_SESSION['status_login'] != true ){
    	echo '<script>window.location="loginadmin.php"</script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa - Data Round</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<?php
	include 'mainmenu_eng.php';
	?>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Data Round</h3>
			<div class="box">
				<p><a href="tambah-kategori_rank_eng.php">Add New Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Round</th>
							<th width="150px">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$category = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY kategori_id ASC");
							if(mysqli_num_rows($category) > 0){
							while($row = mysqli_fetch_array($category)){

						?>
						<tr>
							<td><?php echo $row['kategori_id'] ?></td>
							<td><?php echo $row['kategori_rank'] ?></td>
							<td style="text-align: center;">
								<a href="edit-kategori-rank_eng.php?id=<?php echo $row['id'] ?>">Edit</a> || <a href="proses-hapus_eng.php?idkr=<?php echo $row['id'] ?>" onclick="return confirm('Confirm Delete?')">Delete</a>
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="3">Tidak ada data</td>
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