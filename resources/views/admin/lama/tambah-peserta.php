<?php
session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="loginadmin.php"</script>';
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa | Tambah Data Peserta</title>
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
			<h3>Tambah Data Peserta</h3>
			<div class="box">
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="text" name="room" class="input-control" placeholder="Room"
						 required>
					<input type="text" name="tim_og" class="input-control" placeholder="Tim Opening Government"
						required>
					<input type="text" name="tim_oo" class="input-control" placeholder="Tim Opening Oposition"
						 required>
					<input type="text" name="tim_cg" class="input-control" placeholder="Tim Closing Government"
						 required>
					<input type="text" name="tim_co" class="input-control" placeholder="Tim Closing Oposition"
						required>
					<input type="text" name="adjudicator" class="input-control" placeholder="Adjudicators"
						 required>
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



					$insert = mysqli_query($conn, "INSERT INTO tb_peserta (room_peserta, opening_government, opening_oposition, closing_government, closing_oposition, adjudicators) 
												VALUES (
												'" . $room . "',
												'" . $tim_og . "',
												'" . $tim_oo . "',
												'" . $tim_cg . "',
												'" . $tim_co . "',
												'" . $adjudicator . "'
												)");
					if ($insert) {
						echo '<script>alert("Tambah data berhasil")</script>';
						echo '<script>window.location="data-peserta.php"</script>';
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
		CKEDITOR.replace('deskripsi');
	</script>
</body>

</html>