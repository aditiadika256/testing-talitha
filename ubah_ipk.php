<?php 
    require_once 'connection.php';

    $semester = $_GET['semester'];
    
    $result  = pg_query($conn, "SELECT * FROM ipk WHERE semester=$semester");
    $row = pg_fetch_assoc($result);
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

    <title>Ubah Data IPK</title>
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
        <h2 class="card-header" class="card-header">Ubah Data IPK</h2>
        <div class="card-body">
        <form action="proses_ubah.php" method="post"> 
            <div class="form-group">
                <input type="text" name="semester" value="<?=$row['semester']; ?>" hidden>
                <label for="ipk">IPK Semester</label>
                <input type="text" name="ipk" class="form-control" value="<?=$row['ipk'];?>" >
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
        </form>
    </div>
</div><center>

  </body>
</html>