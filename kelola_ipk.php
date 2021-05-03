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

  <title>Data IPK</title>

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
        <br><br><center><h1>DATA INDEKS PRESTASI KUMULATIF ANDA</h1></center><br>

  <center><a href="tambah_ipk.php" class="btn btn-primary btn-lg">Tambah Data IPK</a><br><br></center>
    <center><table class="table" style="width: 800px">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Semester Mahasiswa</th>
                <th scope="col">IPK Mahasiswa</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
    <?php 
    $result  = pg_query($conn, "SELECT * FROM ipk ORDER BY semester ASC");
    while ($row = pg_fetch_assoc($result)) {
    ?>
            <tr>
                <td><?php echo $row['semester'] ?></td>
                <td><?php echo $row['ipk'] ?></td>
                <td>
                <a href="ubah_ipk.php?semester=<?php echo $row['semester']; ?>" class="btn btn-primary">Ubah</a>
                <a href="proses_hapus.php?semester=<?php echo $row['semester'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
    <?php } ?>
    </table></center>

</body>

</html>