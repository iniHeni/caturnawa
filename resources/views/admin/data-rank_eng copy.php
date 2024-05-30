<?php
session_start();
include 'db_edc.php';
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="loginadmin.php"</script>';
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa - Data Rank</title>
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
			<h3>Data Rank</h3>
			<div class="box">
				<p><a href="tambah-rank_eng.php">New Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">Rank</th>
							<th>Team Name</th>
							<th>Team Participants</th>
							<th>Victory Point</th>
							<th width="150">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$qry = "SELECT * FROM tb_rank
							ORDER BY score_team DESC";
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
										<a href="edit-rank_eng.php?id=<?php echo $row['rank_id'] ?>">Edit</a> || <a
											href="proses-hapus_eng.php?idr=<?php echo $row['rank_id'] ?>"
											onclick="return confirm('Confirm Delete?')">Delete</a>
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