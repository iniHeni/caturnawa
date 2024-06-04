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
	<title>Caturnawa - Data Rank</title>
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
			<h3>Data Rank</h3>
			<div class="box">
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="40px">No</th>
                            <th>Team Name</th>
                            <th>Team Participants</th>
							<th>Team Score</th>
							<th>Rank</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$qry = "SELECT A.* 
							,
							@rownum:=@rownum + 1 as rank
							FROM 
							(
							SELECT tim, peserta, peserta_dua, skor_tim FROM tb_penilaian GROUP BY tim, peserta, peserta_dua
							) A,
							(SELECT @rownum := 0) r
							ORDER BY skor_tim DESC";
							$penilaian = mysqli_query($conn, $qry);
							if(mysqli_num_rows($penilaian) > 0){

							while($row = mysqli_fetch_array($penilaian)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
                            <td><?php echo $row['tim'] ?></td>
                            <td><?php echo $row['peserta']." & ".$row['peserta_dua'] ?></td>
							<td><?php echo  $row['skor_tim'] ?></td>
                            <td><?php echo  $row['rank'] ?></td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="5">No data available</td>
							</tr>		

						<?php } ?>	
					</tbody>
				</table>
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