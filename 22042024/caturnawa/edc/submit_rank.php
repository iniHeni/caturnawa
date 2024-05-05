<?php
	
	include 'db.php';

	if(isset($_GET['kat']) && isset($_GET['room'])){
		$kat = $_GET['kat'];
		$room = $_GET['room'];		

		$qry1 = "SELECT * FROM tb_penilaian WHERE category_id=".$kat." AND room='".$room."' AND submitted_rank=0 ORDER BY skor_tim DESC";
		$penilaian = mysqli_query($conn, $qry1);
		if (mysqli_num_rows($penilaian) == 4) 
		{
			$point = 4;
			while ($row = mysqli_fetch_array($penilaian)) 
			{
				$point--;
				$namatim = $row['tim'];
				$pesertatim =  $row['peserta']." & ".$row['peserta_dua'];
				$qry2 = "SELECT * FROM tb_rank WHERE team_name='".$namatim."'";

				$rankdata = mysqli_query($conn, $qry2);

				if (mysqli_num_rows($rankdata) > 0) 
				{
					$qryupdate = "UPDATE tb_rank SET score_team=score_team + ".$point." WHERE team_name='".$namatim."'";
					$execdata = mysqli_query($conn, $qryupdate);
				}
				else
				{

					$qryInsert = "INSERT INTO tb_rank VALUES (null, '".$namatim."', '".$pesertatim."', '".$point."')";
					$execdata = mysqli_query($conn, $qryInsert);
				}

				if($execdata)
				{
					$qryupdate = "UPDATE tb_penilaian SET submitted_rank=1 WHERE category_id=".$kat." AND room='".$room."' AND tim='".$namatim."'";
					$updt = mysqli_query($conn, $qryupdate);
				}
				
			}
		}
		echo '<script>alert("Submit Rank Succesfully")</script>';
		echo '<script>window.location="data-penilaian.php?kat='.$kat.'"</script>';
	}
?>