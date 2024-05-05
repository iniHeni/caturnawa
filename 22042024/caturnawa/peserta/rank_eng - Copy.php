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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php">Caturnawa</a></h1>
			<ul>
				<li><a href="index_eng.php">Home</a></li>
				<li><a href="peserta_eng.php">Participants</a></li>
				<li><a href="skor_eng.php">Score</a></li>
				<li><a href="rank_eng.php">Rank</a></li>
			</ul>
		</div>
	</header>

	<!-- category -->
	<div class="section">
		<div class="container">
			<h3>Data Rank</h3>
			<div class="box">
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Team Name</th>
							<th>Team Participants</th>
							<th>Team Score</th>
							<th>Rank</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$rank = 1;
						$qry = "SELECT A.* 
						,
						@rownum:=@rownum + 1 as rank
						FROM 
						(
						SELECT tim, peserta, peserta_dua, SUM(skor+skor_dua) as skor_tim FROM tb_penilaian GROUP BY tim, peserta, peserta_dua
						) A,
						(SELECT @rownum := 0) r
						ORDER BY skor_tim DESC";
						$penilaian = mysqli_query($conn, $qry);
						$ranks = mysqli_query($conn, $qry);
						if (mysqli_num_rows($ranks) > 0) {

							while ($row = mysqli_fetch_array($ranks)) {
								?>
								<tr>
									<td>
										<?php echo $rank++ ?>
									</td>
									<td>
										<?php echo $row['tim'] ?>
									</td>
									<td>
										<?php echo $row['peserta']." & ".$row['peserta_dua'] ?>
									</td>
									<td>
										<?php echo $row['skor_tim'] ?>
									</td>
									<td>
										<?php echo $row['rank'] ?>
									</td>
								</tr>
							<?php }
						} else { ?>
							<tr>
								<td colspan="5">No data Available</td>
							</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


</body>

</html>