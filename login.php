<?php
require ('connection.php');
session_start();
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $username = $_POST['username'];
    $hashpassword = md5($_POST['password']);
    $sql ="select * from mahasiswa where username = $username and password = $hashpassword";
    $data = pg_query($conn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check < 0){ 
        echo "Username password salah";
         
    }
    else{
        $_SESSION['mahasiswa']=$username;
        echo "Username password benar";
        
    }
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
      <form class="form-login">
        <h2 class="form-login-heading">Login Sekarang</h2>


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

          <button class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-lock"></i>  LOGIN</button>
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
