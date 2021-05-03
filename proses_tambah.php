<?php 
    require_once 'connection.php';
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];

    $result  = pg_query($conn, "INSERT INTO ipk VALUES('$semester', '$ipk')");

    header("location: kelola_ipk.php");
?>