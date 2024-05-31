<?php
session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="loginadmin.php"</script>';
}

$kat = 0;
if (isset($_GET['kat'])) {
	$kat = $_GET['kat'];
}

$qry = "SELECT * FROM tb_rank WHERE kategori_id=" . $kat . " ORDER BY score_team DESC";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa - Data Skor</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

	<style>
		.btnAdd {
			border: 1px solid;
			padding: 5px;
			background-color: lightgrey;
			font-weight: bold;
		}

		.btnAdd:hover {
			border: 1px solid;
			padding: 5px;
			background-color: #9E9695;
			font-weight: bold;
			color: white;
		}
	</style>
</head>

<body>
	<!-- header -->
	<?php
	include 'mainmenu.php';
	?>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Data Scoring</h3>
			<div style="padding-top: 10px"></div>
			<p><a href="tambah-rank.php?cat=<?php echo $kat; ?>" class="btnAdd">Tambah data rank</a></p>
			<div style="padding-top: 10px"></div>
					<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">Rank</th>
							<th>Nama Tim</th>
							<th>Nama Peserta</th>
							<th>Victory Point</th>
							<th width="150">Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$no = 1;
						$penilaian = mysqli_query($conn, $qry);
						if (mysqli_num_rows($penilaian) > 0) {

							while ($row = mysqli_fetch_array($penilaian)) {
								?>
								<tr>
									<td style="text-align: center">
										<?php echo $no++ ?>
									</td>
									<td>
										<?php echo $row['team_name'] ?>
									</td>
									<td>
										<?php echo $row['team_participants'] ?>
									</td>
									<td>
										<?php echo $row['score_team'] ?>
									</td>
									<td>
										<a href="edit-rank.php?id=<?php echo $row['rank_id'] ?>">Edit</a> || <a
											href="proses-hapus.php?idr=<?php echo $row['rank_id'] ?>"
											onclick="return confirm('Konfirmasi Hapus?')">Delete</a>
									</td>
								</tr>
							<?php }
						} else { ?>
							<tr>
								<td colspan="5">No data available</td>
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