<?php
include 'db_edc.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rank</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
	<!-- header -->
	<?php
		include('mainmenu_eng.php');
	?>


	<!-- category -->
	<div class="section">
		<div class="container">
			<h1>Choose Round</h1>
			<div class="col-12">
				<div class="box box-grid">
					<?php
					$category = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY kategori_id ASC");
					if (mysqli_num_rows($category) > 0) {
						while ($k = mysqli_fetch_array($category)) {
							?>
							<a href="rank_eng.php?kat=<?php echo $k['kategori_id'] ?>">
								<div class="">
									<img src="img/logokdbi.jpeg" width="50px" style="margin-bottom:5px;">
									<p>
										<?php echo $k['kategori_rank'] ?>
									</p>
								</div>
							</a>
						<?php }
					} else { ?>
						<p>Data not found</p>
					<?php } ?>

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


