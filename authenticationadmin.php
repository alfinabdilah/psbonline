<?php
include'koneksi.php';

$email = $_POST["emailadmin"];
$password = $_POST["passwordadmin"];

$query_sql = "SELECT * FROM dataadmin WHERE email_admin = '$email' AND password_admin = '$password'";

$result = mysqli_query($koneksi, $query_sql);

if(mysqli_num_rows($result) > 0){
      header('Location:menuadmin.php');
}
      else{
      echo "<h2>Username atau Password Salah!</h2>";
      }

?>