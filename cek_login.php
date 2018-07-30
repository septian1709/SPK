<?php
  include "koneksi.php";
  session_start();

  $username = $_POST['user'];
  $password = $_POST['pass'];
  if (empty($username) && empty($password)) {
    echo "<script>alert('Username dan Password masih kosong !');location.href='login.php';</script>";
  } elseif (empty($username)) {
    echo "<script>alert('Username masih kosong !');location.href='login.php';</script>";
  } elseif (empty($password)) {
    echo "<script>alert('Password masih kosong !');location.href='login.php';</script>";
  } else {
    $query = mysqli_query($koneksi,"SELECT * FROM login WHERE username = '$username' AND password ='$password'");
    if(mysqli_num_rows($query)){
      $row = mysqli_fetch_assoc($query);
      $username = $row['username'];

      $_SESSION['username'] = $username;
      if($_SESSION['username'] == "sanglah") {
        echo "<script>alert('Anda Login Sebagai Sanglah');location.href='index.php';</script>";
      }else if($_SESSION['username'] == "mataram") {
        echo "<script>alert('Anda Login Sebagai Mataram');location.href='index.php';</script>";
      }else {
        echo "<script>alert('Login Sukses');location.href='index.php';</script>";
      }
    } else {
      echo "<script>window.alert('LOGIN GAGAL! Username dan Password salah !');location.href='login.php';</script>";
    }
  }
?>
