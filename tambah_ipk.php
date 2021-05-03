<?php 
    require_once 'connection.php';
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

    <title>Tambah Data IPK</title>
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





  <body>
    <br><br><br><br><center><div class="card text-white bg-dark mb-3" style="width: 400px">
        <h2 class="card-header" class="card-header">Tambah Data IPK</h2>
        <div class="card-body">
        <form action="proses_tambah.php" method="post" style="width: 300px">
                <label for="ipk">Semester</label>
                <select name="semester" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                </select>
                <br><div class="form-group">
                    <label for="ipk">IPK Semester</label>
                    <input type="text" name="ipk" class="form-control">
                </div>
            <br><button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div><center>


  </body>
</html>