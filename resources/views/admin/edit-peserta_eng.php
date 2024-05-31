<?php
session_start();
include 'db_edc.php';
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="loginadmin.php"</script>';
}

$peserta = mysqli_query($conn, "SELECT * FROM tb_peserta WHERE peserta_id = '" . $_GET['id'] . "' ");
if (mysqli_num_rows($peserta) == 0) {
	echo '<script>window.location="data-peserta.php"</script>';
}
$ps = mysqli_fetch_object($peserta);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins=swap" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<?php
	include 'mainmenu.php';
	?>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Edit Data Participants</h3>
			<div class="box">
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="text" name="room" class="input-control" placeholder="Room"
						value="<?php echo $ps->room_peserta ?>" required>
					<input type="text" name="tim_og" class="input-control" placeholder="Tim Opening Government"
						value="<?php echo $ps->opening_government ?>" required>
					<input type="text" name="tim_oo" class="input-control" placeholder="Tim Opening Oposition"
						value="<?php echo $ps->opening_oposition ?>" required>
					<input type="text" name="tim_cg" class="input-control" placeholder="Tim Closing Government"
						value="<?php echo $ps->closing_government ?>" required>
					<input type="text" name="tim_co" class="input-control" placeholder="Tim Closing Oposition"
						value="<?php echo $ps->closing_oposition ?>" required>
					<input type="text" name="adjudicator" class="input-control" placeholder="Adjudicators"
						value="<?php echo $ps->adjudicators ?>" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php
				if (isset($_POST['submit'])) {

					$room = $_POST['room'];
					$tim_og = $_POST['tim_og'];
					$tim_oo = $_POST['tim_oo'];
					$tim_cg = $_POST['tim_cg'];
					$tim_co = $_POST['tim_co'];
					$adjudicator = $_POST['adjudicator'];



					$update = mysqli_query($conn, "UPDATE tb_peserta SET
												room_peserta = '" . $room . "',
												opening_government = '" . $tim_og . "',
												opening_oposition = '" . $tim_oo . "',
												closing_government = '" . $tim_cg . "',
												closing_oposition = '" . $tim_co . "',
												adjudicators = '" . $adjudicator . "'
												WHERE peserta_id = '" . $ps->peserta_id . "'	");
					if ($update) {
						echo '<script>alert("Edit Data Successfully")</script>';
						echo '<script>window.location="data-peserta_eng.php"</script>';
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