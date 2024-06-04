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
	<title>Caturnawa | Tambah Kategori</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<?php
	include 'mainmenu.php';
	?>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Tambah Data Rank</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="number" name="kategori_id" placeholder="ID Babak" class="input-control" required>
					<input type="text" name="babak" placeholder="Nama Babak" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php
				if (isset($_POST['submit'])) {
					$kategori_id = ucwords($_POST['kategori_id']);
					$babak = ucwords($_POST['babak']);

					$insert = mysqli_query($conn, "INSERT INTO tb_kategori VALUES(
											null, 
											$kategori_id, 
											'" . $babak . "') ");
					if ($insert) {
						echo '<script>alert("Tambah data berhasil")</script>';
						echo '<script>window.location="babak.php"</script>';
					} else {
						echo 'gagal' . mysqli_error($conn);
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
</body>

</html>