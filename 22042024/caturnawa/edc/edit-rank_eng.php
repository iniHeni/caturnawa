<?php
session_start();
include 'db_edc.php';
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="loginadmin.php"</script>';
}

$kat = 0;
$rank = mysqli_query($conn, "SELECT * FROM tb_rank WHERE rank_id = '" . $_GET['id'] . "' ");
if (mysqli_num_rows($rank) == 0) {
	echo '<script>window.location="data-rank_eng.php"</script>';
}
$rk = mysqli_fetch_object($rank);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caturnawa | Edit Rank</title>
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
			<h3>Edit Rank</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="team_name" placeholder="Team Name" class="input-control"
						value="<?php echo $rk->team_name ?>" required>
					<input type="text" name="team_participants" placeholder="Team Participants" class="input-control"
						value="<?php echo $rk->team_participants ?>" required>
					<input type="number" name="score_team" placeholder="Point" class="input-control"
						value="<?php echo $rk->score_team ?>" required>
					<select class="input-control" name="kategori_id" required>
						<option value="">--Choose Round--</option>
						<?php
						$kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY kategori_id ASC");
						while ($r = mysqli_fetch_array($kategori)) {
							?>
							<option value="<?php echo $r['kategori_id'] ?>" <?php echo ($r['kategori_id'] == $rk->kategori_id) ? 'selected' : ''; ?>>
								<?php echo $r['kategori_rank'] ?>
							</option>
						<?php } ?>
					</select>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php
				if (isset($_POST['submit'])) {

					$team_name = ucwords($_POST['team_name']);
					$team_participants = ucwords($_POST['team_participants']);
					$score_team = ucwords($_POST['score_team']);
					$kategori_id = ucwords($_POST['kategori_id']);
					$kat = $kategori_id;

					$update = mysqli_query($conn, "UPDATE tb_rank SET
												team_name = '" . $team_name . "',
												team_participants = '" . $team_participants . "',
												score_team = '" . $score_team . "',
												kategori_id = '" . $kategori_id . "'
												WHERE rank_id = '" . $rk->rank_id . "'	");
					if ($update) {
						echo '<script>alert("Edit Data Successfully")</script>';
						echo '<script>window.location="data-rank_eng.php?kat='.$kat.'"</script>';
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
</body>

</html>