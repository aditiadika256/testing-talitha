<?php
require('connection.php');
$dbconn = pg_connect($connection_string);

if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
      $sql = "insert into public.mahasiswa(nim,nama,kelas,username,password)values('".$_POST['nim']."','".$_POST['nama']."','".$_POST['kelas']."','".$_POST['username']."','".md5($_POST['password'])."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
          echo "<script>
          alert('Registrasi Berhasil')
          location= 'login.php';
          </script>";
    }else{
        
          echo "<script>
          alert('Registrasi Gagal');
          </script>";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Registrasi</title>
  </head>
  <body>

    <div class="container">
  <h2>Register Here </h2>
  <form method="post">

    <div class="form-group">
      <label for="nim">NIM:</label>
      <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
    </div>
  
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
    </div>

    <div class="form-group">
      <label for="kelas">Kelas:</label>
      <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" name="kelas" required>
    </div>

    <div class="form-group">
      <label for="Username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" required>
    </div>
    
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">

    <div class="form-group">
    <a href="login.php">Login</a>
    </div>
  </form>
</div>


  </body>
</html>

<!-- <?php

//require 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
  <title>Registrasi Mahasiswa</title>

</head>

        <nav class="navbar navbar-dark bg-dark">
          <div class="container-fluid" >
            <div class="navbar-header">
              <a class="navbar-brand" href="#">PORTAL MAHASISWA</a>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item active"><a class="nav-link" href="registrasi.php">Registrasi</a></li>
          </ul>
          <ul class="navbar-nav" style="margin-left: 0px">
              <li class="nav-item active"><a class="nav-link" href="login.php" >Login</a></li>
            </ul>
          </div>
        </nav>

<body>

  <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
 
  <div class="card" style="width: 400px">
      <center><form class="form-login" action="proses_regis.php" method="post">
        <br><br><h2 class="form-login-heading">Registrasi Sekarang</h2>
        <div class="login-wrap">
          <br><div class="form-group">
            <label for="nim">NIM Anda: </label>
            <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM Lengkap">
          </div>
          <div class="form-group">
            <label for="nama">Nama Anda: </label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
          </div>


          <div class="form-group">
            <label for="kelas">Kelas Anda: </label>
            <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan Kelas">
          </div>

        <div class="form-group">
            <label for="username">Username: </label>
            <input type="text" name="username" class="form-control" id="username"  placeholder="Masukkan Username">
          </div>

          <div class="form-group">
              <label for="password">Password : </label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
            </div><br>

          
          <button class="btn btn-theme btn-block" type="submit" name="register"><i class="fa fa-lock"></i> Registrasi</button>
          <hr>

          <div class="registration">
            Sudah punya akun?<br/>
            <a class="" href=login.php>
              Login Sekarang
              </a>
          </div>
         
        </div>

      </form></center>
    </div>

</body>

</html>
 -->