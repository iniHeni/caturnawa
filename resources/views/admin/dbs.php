<?php 
    $hostname = 'db';
    $username = 'root';
    $password = 'admin';
    $dbname   = 'db_kdbi';
    $dbport   = 3306;

    $conn = mysqli_connect($hostname, $username, $password, $dbname, $dbport) or die('Gagal terhubung ke database');
 ?>
