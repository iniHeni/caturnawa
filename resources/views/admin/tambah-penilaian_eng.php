<?php
session_start();
include 'db_edc.php';
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="login.php"</script>';
}
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
	<title>Caturnawa | Add New Scoring</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
	<script src="script/jquery.min.js"></script>
	<script>

		function SkorChange() {
			var vindividusatu = 0;
			var vindividudua = 0;
			var vskortim = 0;
			vindividusatu = $("#individusatu").val();
			vindividudua = $("#individudua").val();
			if (vindividusatu > 0) {
				vskortim += parseInt(vindividusatu);
			}

			if (vindividudua > 0) {
				vskortim += parseInt(vindividudua);
			}

			vskortim = vskortim / 2;

			$("#skortim").val(vskortim);
		}

	</script>
</head>

<body>
	<!-- header -->
	<?php
	include 'mainmenu_eng.php';
	?>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Add New Scoring</h3>
			<div class="box">
				<form action="" method="POST">
					<label>Category</label>
					<div style="padding-bottom: 10px !important;"></div>
					<select class="input-control" name="kategori" required>
						<option value="">--Choose--</option>
						<?php
						$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id ASC");
						while ($r = mysqli_fetch_array($kategori)) {
							?>
							<option value="<?php echo $r['category_id'] ?>">
								<?php echo $r['category_name'] ?>
							</option>
						<?php } ?>
					</select>
					<label>Motion</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="motion" class="input-control" placeholder="motion" required>
					<label>Room</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="room" class="input-control" placeholder="Room" required>
					<label>Team Name</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="tim" class="input-control" placeholder="Team Name" required>
					<label>Position</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="posisi" class="input-control" placeholder="Position" required>
					<label>Participant</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="peserta" class="input-control" placeholder="Participant" required>
					<label>Other Participant</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="pesertalain" class="input-control" placeholder="Other Participant"
						required>
					<label>Score Individu 1</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="number" id="individusatu" name="individusatu" class="input-control"
						placeholder="Score Individu 1" onchange="SkorChange()" required>
					<label>Score Individu 2</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="number" id="individudua" name="individudua" class="input-control"
						placeholder="Score Individu 2" onchange="SkorChange()" required>
					<label>Team Score</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="number" id="skortim" name="skortim" class="input-control"
						style="background-color: lightgray;" placeholder="Skor Tim" readonly required>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="hidden" name="rank" class="input-control" placeholder="Rank">
					<label>Adjudicators</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="juri" class="input-control" placeholder="Adjudicators" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php
				if (isset($_POST['submit'])) {

					$kategori = $_POST['kategori'];
					$motion = $_POST['motion'];
					$room = $_POST['room'];
					$tim = $_POST['tim'];
					$posisi = $_POST['posisi'];
					$peserta = $_POST['peserta'];
					$pesertalain = $_POST['pesertalain'];
					$individusatu = $_POST['individusatu'];
					$individudua = $_POST['individudua'];
					$skortim = $_POST['skortim'];
					$rank = 0;//$_POST['rank'];
					$juri = $_POST['juri'];


					$insert = mysqli_query($conn, "INSERT INTO tb_penilaian VALUES (
										null,
										'" . $kategori . "',
										'" . $motion . "',
										'" . $room . "',
										'" . $tim . "',
										'" . $posisi . "',
										'" . $peserta . "',
										'" . $pesertalain . "',
										'" . $individusatu . "',
										'" . $individudua . "',
										'" . $skortim . "',
										'" . $rank . "',
										'" . $juri . "',
										0
											) ");

					if ($insert) {
						echo '<script>alert("Insert data succesfully")</script>';
						echo '<script>window.location="data-penilaian_eng.php?kat=' . $kat . '"</script>';
					} else {
						echo 'Failed ' . mysqli_error($conn);
					}

				}
				?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; UNAS FEST 2023.</small>
		</div>
	</footer>
	<script>
		CKEDITOR.replace('deskripsi');
	</script>
</body>

</html>