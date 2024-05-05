<?php
include 'db_edc.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Score Details</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php">Caturnawa</a></h1>
			<ul>
				<li><a href="index_eng.php">Home</a></li>
				<li><a href="peserta_eng.php">Participants</a></li>
				<li><a href="skor_eng.php">Score</a></li>
				<li><a href="rank_eng.php">Rank</a></li>
			</ul>
		</div>
	</header>

	<!-- category -->
	<div class="section">
		<div class="container">
			<h3>Data Score</h3>
			<div class="box">
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="40px">No</th>
							<th>Day</th>
							<th>Room</th>
							<th>Team Name</th>
							<th>Position</th>
							<th colspan="2">Participants</th>
							<th colspan="2">Score</th>
							<th>Team Score</th>
							<th>Rank</th>
							<th>Adjudicators</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$penilaian = mysqli_query($conn, "SELECT * FROM tb_penilaian A LEFT JOIN tb_category B ON A.category_id=B.category_id WHERE A.category_id=" . $_GET['kat'] . " ORDER BY A.skor_tim DESC");
						if (mysqli_num_rows($penilaian) > 0) {

							while ($row = mysqli_fetch_array($penilaian)) {
								?>
								<tr>
									<td>
										<?php echo $no++ ?>
									</td>
									<td>
										<?php echo $row['category_name'] ?>
									</td>
									<td>
										<?php echo $row['room'] ?>
									</td>
									<td>
										<?php echo $row['tim'] ?>
									</td>
									<td>
										<?php echo $row['posisi'] ?>
									</td>
									<td>
										<?php echo $row['peserta'] ?>
									</td>
									<td>
										<?php echo $row['peserta_dua'] ?>
									</td>
									<td>
										<?php echo $row['skor'] ?>
									</td>
									<td>
										<?php echo $row['skor_dua'] ?>
									</td>
									<td>
										<?php echo $row['skor_tim'] ?>
									</td>
									<td>
										<?php echo $row['rank'] ?>
									</td>
									<td>
										<?php echo $row['juri'] ?>
									</td>
								</tr>
							<?php }
						} else { ?>
							<tr>
								<td colspan="12">No data Available</td>
							</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>


</body>

</html>