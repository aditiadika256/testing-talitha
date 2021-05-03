<?php

include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>About</title>

</head>

        <nav class="navbar navbar-dark bg-dark">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">PORTAL MAHASISWA</a>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item active"><a class="nav-link" href="about.php">About</a></li>
          </ul>
          <ul class="navbar-nav">
              <li class="nav-item active"><a class="nav-link" href="kelola_ipk.php">Lihat IPK</a></li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item active"><a class="nav-link" href="registrasi.php">Registrasi</a></li>
          </ul>
          <ul class="navbar-nav">
              <li class="nav-item active"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
          </div>
        </nav>

<body style="background-color:grey">

        <br><br><center><div class="card" style="width: 18rem;">
          <img class="card-img-top" src="tal.jpg">
          <div class="card-body">
            <h5 class="card-title">TALITHA RIZKI GHAISANNI RIOEH</h5>
            <p class="card-text">Mahasiswa yang mengambil jurusan D3SI di Telkom University.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">6701194051</li>
            <li class="list-group-item">D3SI-43-02</li>
          </ul>
          <div class="card-body">
            <a href="kelola_ipk.php" class="card-link">Lihat Data IPK</a>
          </div>
        </div></center><br><br>
  


</body>
</html>