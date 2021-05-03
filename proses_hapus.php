<?php

	require_once 'connection.php';
	$semester = $_GET["semester"];

	global $conn;

	$result = pg_query($conn, "DELETE FROM public.ipk WHERE semester=$semester");

	header("location: kelola_ipk.php");


?>