<?php

$host = "ec2-23-23-128-222.compute-1.amazonaws.com";
$port = "5432";
$dbname = "d1lv98h65q8rd5";
$user = "pboobdgwyaitgo";
$password = "4da227f86f5b021a6a235d3a16319dd745cf48a0217efd108ec1ed650096bd0e"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$conn = pg_connect($connection_string);


?>
