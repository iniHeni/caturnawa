<?php
session_start();
include 'db_edc.php';
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="loginadmin.php"</script>';
}

$kat = 0;
if (isset($_GET['kat'])) {
	$kat = $_GET['kat'];
}

$qry1 = "SELECT distinct room FROM tb_penilaian WHERE category_id=" . $kat . " ORDER BY room";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa - Data Scoring</title>
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
	include 'mainmenu_eng.php';
	?>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Data Scoring</h3>
			<div style="padding-top: 10px"></div>
			<p><a href="tambah-penilaian_eng.php?kat=<?php echo $kat; ?>" class="btnAdd">Add new scoring</a></p>
			<div style="padding-top: 10px"></div>
			<?php
			$no = 0;
			$roomdata = mysqli_query($conn, $qry1);
			$submittedrank = 0;
			$submittedcount = 0;
			if (mysqli_num_rows($roomdata) > 0) {
				while ($rowdata = mysqli_fetch_array($roomdata)) {
					$submittedcount = 0;
					$roomval = $rowdata['room'];
					?>
					<table border="1" cellspacing="0" class="table">
						<thead>
							<tr>
								<th width="40px">No</th>
								<th>Day</th>
								<th>Motion</th>
								<th>Room</th>
								<th>Team Name</th>
								<th>Position</th>
								<th colspan="2">Team Participant</th>
								<th colspan="2">Score</th>
								<th>Team Score</th>
								<th>Rank</th>
								<th>Adjudicators</th>
								<th>Point</th>
								<th>Status</th>
								<th width="120px">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							$point = 3;
							$penilaian = mysqli_query($conn, "SELECT CASE WHEN A.submitted_rank=1 THEN 'Submitted' ELSE 'Open' END AS status, B.category_name, A.* FROM tb_penilaian A LEFT JOIN tb_category B ON A.category_id=B.category_id WHERE A.category_id=" . $_GET['kat'] . " AND A.room='" . $roomval . "' ORDER BY A.skor_tim DESC");
							if (mysqli_num_rows($penilaian) > 0) {
								while ($row = mysqli_fetch_array($penilaian)) {
									$no++;
									$submittedrank = $row['submitted_rank'];
									if ($submittedrank == 0) {
										$submittedcount++;
									}
									?>
									<tr>
										<td>
											<?php echo $no ?>
										</td>
										<td>
											<?php echo $row['category_name'] ?>
										</td>
										<td>
											<?php echo $row['mosi'] ?>
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
											<?php echo $no ?>
										</td>
										<td>
											<?php echo $row['juri'] ?>
										</td>
										<td>
											<?php echo $point-- ?>
										</td>
										<td>
											<?php echo $row['status'] ?>
										</td>
										<td>
											<a
												href="edit-penilaian_eng.php?kat=<?php echo $kat; ?>&id=<?php echo $row['penilaian_id'] ?>">Edit</a>
											|| <a
												href="proses-hapus_eng.php?kat=<?php echo $kat; ?>&idp=<?php echo $row['penilaian_id'] ?>"
												onclick="return confirm('Confirm Delete?')">Delete</a>
										</td>
									</tr>
								<?php }
							} else { ?>
								<tr>
									<td colspan="15">No data available</td>
								</tr>

							<?php } ?>
					</table>
					<?php
					if ($submittedcount == 4) {
						?>
						<p>&nbsp;</p>
						<p><a href="submit_rank_eng.php?kat=<?php echo $kat; ?>&room=<?php echo $roomval; ?>" class="btnAdd">Submit
								Rank</a></p>
						<?php
					}
					?>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<?php
				}
			} else {
				?>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="40px">No</th>
							<th>Day</th>
							<th>Motion</th>
							<th>Room</th>
							<th>Team Name</th>
							<th>Position</th>
							<th colspan="2">Team Participant</th>
							<th colspan="2">Score</th>
							<th>Team Score</th>
							<th>Rank</th>
							<th>Adjudicators</th>
							<th>Point</th>
							<th width="120px">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="15">No data available</td>
						</tr>
				</table>
				<?php
			}
			?>
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