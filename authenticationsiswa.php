<?php
include'koneksi.php';

$email = $_POST["emailsiswa"];
$password = $_POST["passwordsiswa"];

$query_sql = "SELECT * FROM datasiswa WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);

if(mysqli_num_rows($result) > 0){
      header('Location:datasiswa.php');
}
      else{
      echo "<h2>Username atau Password Salah!</h2>";
      }

?>