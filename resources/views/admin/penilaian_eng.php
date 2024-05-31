<?php
    session_start();
    include 'db_edc.php';
    if($_SESSION['status_login'] != true ){
    	echo '<script>window.location="loginadmin.php"</script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa - Data Penilaian</title>
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
			<h3>Data Scoring</h3>
			<div class="box">
					<?php
					$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id ASC");
					if (mysqli_num_rows($kategori) > 0) {
						while ($k = mysqli_fetch_array($kategori)) {
							?>
							<a href="data-penilaian_eng.php?kat=<?php echo $k['category_id'] ?>">
								<div class="col-5">
									<img src="img/logokdbi.jpeg" width="50px" style="margin-bottom:5px;">
									<p>
										<?php echo $k['category_name'] ?>
									</p>
								</div>
							</a>
						<?php }
					} else { ?>
						<p>No data Available</p>
					<?php } ?>

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