<?php 
require('conn.php');
session_start();
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $email = $_POST['email'];
    $hashpassword = md5($_POST['pwd']);
    $sql ="select *from public.mahasiswa where email = '".pg_escape_string($_POST['email'])."' and password ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        
        $_SESSION['user']=$email;
        echo "<script> location= 'home.php'; </script>";  
    }else{
        
        echo "<script>
        alert('Email atau password salah');
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

    <title>Login</title>
  </head>
  <body>

    <div class="container">
  <h2>Login Here </h2>
  <form method="post">
  
     
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
     
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">

    <div class="form-group">
    <a href="register.php">Click here to register</a>
    </div>
  </form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!-- <?php

//require 'connection.php';

//if (isset($_POST["login"])){

  //$username = $_POST["username"];
  //$password = $_POST["password"];

  $result //= pg_query($conn, "SELECT * FROM mahasiswa WHERE username = '$username' AND password = $password");

  //if (password_verify($password, $row["password"])){
      // set session
      //$_SESSION["login"] = true;
      //$_SESSION["username"] = $username;

      //header("Location: indexnelayan.php");
      //exit;
    }

  //header("location: about.php");

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
 -->
