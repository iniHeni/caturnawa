<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true ){
    	echo '<script>window.location="loginadmin.php"</script>';
    }
	$kat = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa | Tambah Data Rank</title>
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
					<input type="text" name="team_name" placeholder="Nama Tim" class="input-control" required>
					<input type="text" name="team_participants" placeholder="Tim Peserta" class="input-control" required>
					<input type="number" name="score_team" placeholder="Poin" class="input-control" required>
					<select class="input-control" name="kategori_rank" required>
						<option value="">--Pilih Ronde--</option>
						<?php
						$kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY kategori_id ASC");
						while ($r = mysqli_fetch_array($kategori)) {
							?>
							<option value="<?php echo $r['kategori_id'] ?>">
								<?php echo $r['kategori_rank'] ?>
							</option>
						<?php } ?>
					</select>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php
					if(isset($_POST['submit'])){

						$team_name = ucwords($_POST['team_name']);
						$team_participants = ucwords($_POST['team_participants']);
						$score_team = ucwords($_POST['score_team']);
						$kategori_rank = ucwords($_POST['kategori_rank']);
						$kat = $kategori_rank;
						$insert = mysqli_query($conn, "INSERT INTO tb_rank VALUES(
											null, 
											'".$team_name."'
											,'".$team_participants."'
											,'".$score_team."'
											,'".$kategori_rank."')
											");
						if($insert){
							echo '<script>alert("Berhasil Memasukkan Data")</script>';
							echo '<script>window.location="data-rank.php?kat='.$kat.'"</script>';
						}else{
							echo 'Failed'.mysqli_error($conn);
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