<?php
  include "koneksi.php";
  session_start();

  $username = $_POST['user'];
  $password = $_POST['pass'];

  $query = mysqli_query($koneksi,"SELECT * FROM login WHERE username = '$username' AND password ='$password'");
  if (mysqli_num_rows($query)) {
    $row = mysqli_fetch_assoc($query);
    $username = $row['username'];

    $_SESSION['username'] = $username;
    if ($_SESSION['username'] == "sanglah") {
      echo "<script>alert('Anda Login Sebagai Sanglah');location.href='index.php';</script>";
    } elseif ($_SESSION['username'] == "PGR") {
      echo "<script>alert('Anda Login Sebagai PGR');location.href='index.php';</script>";;
    } elseif ($_SESSION['username'] == "mataram") {
      echo "<script>alert('Anda Login Sebagai Mataram');location.href='index.php';</script>";
    } else{
      echo "<script>alert('Anda Login Sebagai Waingapu');location.href='index.php';</script>";
    }

  }else {
      echo "<script>alert('LOGIN GAGAL! Akun tidak terdaftar !');location.href='login.php';</script>";
  }
?>
