<?php 
    require_once 'connection.php';
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];

    $result  = pg_query($conn, "UPDATE public.ipk
  SET ipk='$ipk' WHERE semester = $semester");


    header("location: kelola_ipk.php");
?>



