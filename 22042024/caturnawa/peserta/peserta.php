<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Info Peserta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
	<!-- header -->
	<?php
		include('mainmenu.php')
	?>

	<!-- category -->
	<div class="section">
		<div class="container">
			<h1>Data Peserta</h1>
			<div class="box">
				<div class="table-wrapper">
					<table border="1" cellspacing="10" class="table">
						<thead>
							<tr>
								<th width="40px">No</th>
								<th>Room</th>
								<th>OG</th>
								<th>OO</th>
								<th>CG</th>
								<th>CO</th>
								<th>Adjudicators</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$peserta = mysqli_query($conn, "SELECT * FROM tb_peserta ORDER BY room_peserta ASC");
							if (mysqli_num_rows($peserta) > 0) {

								while ($row = mysqli_fetch_array($peserta)) {
							?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										<td>
											<?php echo $row['room_peserta'] ?>
										</td>
										<td>
											<?php echo $row['opening_government'] ?>
										</td>
										<td>
											<?php echo $row['opening_oposition'] ?>
										</td>
										<td>
											<?php echo $row['closing_government'] ?>
										</td>
										<td>
											<?php echo $row['closing_oposition'] ?>
										</td>
										<td>
											<?php echo $row['adjudicators'] ?>
										</td>
									</tr>
								<?php }
							} else { ?>
								<tr>
									<td colspan="8">Tidak ada data</td>
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