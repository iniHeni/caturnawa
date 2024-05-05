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

$penilaian = mysqli_query($conn, "SELECT * FROM tb_penilaian WHERE penilaian_id = '" . $_GET['id'] . "' ");
if (mysqli_num_rows($penilaian) == 0) {
	echo '<script>window.location="data-penilaian.php"</script>';
}
$p = mysqli_fetch_object($penilaian);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa - Edit Penilaian</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
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
	include 'mainmenu.php';
	?>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Edit Data Penilaian</h3>
			<div class="box">
				<form action="" method="POST" enctype="multipart/form-data">
					<label>Kategori</label>
					<div style="padding-bottom: 10px !important;"></div>
					<select class="input-control" name="kategori" required>
						<option value="">--Pilih--</option>
						<?php
						$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id ASC");
						while ($r = mysqli_fetch_array($kategori)) {
							?>
							<option value="<?php echo $r['category_id'] ?>" <?php echo ($r['category_id'] == $p->category_id) ? 'selected' : ''; ?>>
								<?php echo $r['category_name'] ?>
							</option>
						<?php } ?>
					</select>

					<label>Mosi</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="mosi" class="input-control" placeholder="Mosi"
						value="<?php echo $p->mosi ?>" required>
					<label>Room</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="room" class="input-control" placeholder="Room"
						value="<?php echo $p->room ?>" required>
					<label>Nama Tim</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="tim" class="input-control" placeholder="Nama Tim"
						value="<?php echo $p->tim ?>" required>
					<label>Posisi</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="posisi" class="input-control" placeholder="Posisi"
						value="<?php echo $p->posisi ?>" required>
					<label>Nama Peserta</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="peserta" class="input-control" placeholder="Nama Peserta"
						value="<?php echo $p->peserta ?>" required>
					<label>Nama Peserta Lain</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="pesertalain" class="input-control" placeholder="Nama Peserta Lain"
						value="<?php echo $p->peserta_dua ?>" required>
					<label>Skor Individu 1</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" id="individusatu" name="individusatu" class="input-control"
						placeholder="Skor Individu 1" value="<?php echo $p->skor ?>" onchange="SkorChange()" required>
					<label>Skor Individu 2</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" id="individudua" name="individudua" class="input-control"
						placeholder="Skor Individu 2" value="<?php echo $p->skor_dua ?>" onchange="SkorChange()"
						required>
					<label>Skor Tim</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="number" id="skortim" name="skortim" class="input-control"
						style="background-color: lightgray;" placeholder="Skor Tim" value="<?php echo $p->skor_tim ?>"
						readonly required>
					<label>Rank</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="number" name="rank" class="input-control" placeholder="Rank"
						value="<?php echo $p->rank ?>" required>
					<label>Juri</label>
					<div style="padding-bottom: 10px !important;"></div>
					<input type="text" name="juri" class="input-control" placeholder="Juri"
						value="<?php echo $p->juri ?>" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php
				if (isset($_POST['submit'])) {

					$kategori = $_POST['kategori'];
					$mosi = $_POST['mosi'];
					$room = $_POST['room'];
					$tim = $_POST['tim'];
					$posisi = $_POST['posisi'];
					$peserta = $_POST['peserta'];
					$pesertalain = $_POST['pesertalain'];
					$individusatu = $_POST['individusatu'];
					$individudua = $_POST['individudua'];
					$skortim = $_POST['skortim'];
					$rank = $_POST['rank'];
					$juri = $_POST['juri'];


					$update = mysqli_query($conn, "UPDATE tb_penilaian SET
												category_id = '" . $kategori . "',
												mosi = '" . $mosi . "',
												room = '" . $room . "',
												tim = '" . $tim . "',
												posisi = '" . $posisi . "',
												peserta = '" . $peserta . "',
												peserta_dua = '" . $pesertalain . "',
												skor = '" . $individusatu . "',
												skor_dua = '" . $individudua . "',
												skor_tim = '" . $skortim . "',
												rank = '" . $rank . "',
												juri = '" . $juri . "'
												WHERE penilaian_id = '" . $p->penilaian_id . "'	");
					if ($update) {
						echo '<script>alert("Ubah data berhasil")</script>';
						echo '<script>window.location="data-penilaian.php?kat='.$kat.'"</script>';
					} else {
						echo 'gagal ' . mysqli_error($conn);
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
		//CKEDITOR.replace('deskripsi');
		SkorChange();
	</script>
</body>

</html>