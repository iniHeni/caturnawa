<?php
include 'db_edc.php';
$kat = 0;
if (isset($_GET['kat'])) {
	$kat = $_GET['kat'];
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rank</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
	<!-- header -->
	<?php
		include('mainmenu_eng.php')
	?>

	<!-- category -->
	<div class="section">
		<div class="container">
			<h1>Data Rank</h1>
			<div class="box">
				<div class="table-wrapper">
					<table border="1" cellspacing="0" class="table">
						<thead>
							<tr>
								<th width="60px">Rank</th>
								<th>Team Name</th>
								<th>Participants</th>
								<th>Victory Point</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$qry = "SELECT * FROM tb_rank WHERE kategori_id=".$kat." 
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
	</div>

	<script>
		feather.replace();
	</script>
	<script src="js/navbar.js"></script>
</body>

</html>