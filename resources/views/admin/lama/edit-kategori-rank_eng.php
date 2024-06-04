<?php
    session_start();
    include 'db_edc.php';
    if ($_SESSION['status_login'] != true) {
        echo '<script>window.location="loginadmin.php"</script>';
    }

    $kategori = mysqli_query($conn, "SELECT * FROM tb_kategori WHERE id = '" . $_GET['id'] . "' ");
    if (mysqli_num_rows($kategori) == 0) {
        echo '<script>window.location="babak_eng.php"</script>';
    }
    $k = mysqli_fetch_object($kategori);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caturnawa | Edit Round</title>
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
            <h3>Edit Data Round</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="number" name="kategori_id" placeholder="ID Round" class="input-control" value="<?php echo $k->kategori_id ?>" required>
                    <input type="text" name="babak" placeholder="Round" class="input-control" value="<?php echo $k->kategori_rank ?>" required>
                    <input type="submit" name="submit" value="Submit" class="btn">
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $kategori_id = ucwords($_POST['kategori_id']);
                    $babak = ucwords($_POST['babak']);

                    $update = mysqli_query($conn, "UPDATE tb_kategori SET
							                    kategori_id = '".$kategori_id."',
                                                kategori_rank = '".$babak."'
							                    WHERE id = '".$k->id."' ");
                    if ($update) {
                        echo '<script>alert("Edit data succesfully")</script>';
                        echo '<script>window.location="babak_eng.php"</script>';
                    } else {
                        echo 'Failed' . mysqli_error($conn);
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