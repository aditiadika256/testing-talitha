
<?php

require 'connection.php';

if (isset($_POST["login"])){

$username = $_POST["username"];
$password = $_POST["password"];

  $result = pg_query($conn, "SELECT * FROM mahasiswa WHERE username = '$username' AND password = $password");

if (password_verify($password, $row["password"])){
      set session
      $_SESSION["login"] = true;
      $_SESSION["username"] = $username;

      header("Location: indexnelayan.php");
      exit;
    }

  header("location: about.php");

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  
  <title>Login Mahasiswa</title>


</head>

<body>
 
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="post">
        <h2 class="form-login-heading">Login Sekarang</h2>

          <?php //if(isset($error)): ?>

            <p style ="color:red; font-style: italic; margin-left: 20px; margin-top: 25px; margin-bottom: 5px;">Username/Password Salah</p>
          <?php //endif; ?>

        <div class="login-wrap">
          <div class="form-group">
            <label for="username">Username : </label>
            <input type="text" name="username" class="form-control" id="username"  placeholder="Masukkan Username">
          </div>

          <div class="form-group">
              <label for="password">Password : </label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
            </div>
          <br>

          <button class="btn btn-theme btn-block" type="submit" name="login"><i class="fa fa-lock"></i>  LOGIN</button>
          <hr>

          <div class="registration">
            Belum punya akun?<br/>
            <a class="" href=registrasi.php>
              Buat akun anda
              </a>
          </div>
         
        </div>

      </form>
    </div>
  </div>
 
</body>

</html>
