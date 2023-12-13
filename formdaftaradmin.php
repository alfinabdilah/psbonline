<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PSB(Online)</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
body{
	background-image: url("bgimage.jpg");
	background-size: cover;
}
h3,h5{
	color: black;
}
p{
	color: black;
}

</style>
<body>

<br><h3 style="text-align: center;">FORMULIR PENDAFTARAN ADMIN</h3><br><br>
<button onclick="history.back()" class="btn btn-dark">Back</button>
<h5 style="text-align: center;">Masukan data pada form di bawah ini dengan benar!</h5><br><br>
<form action="prosesdaftaradmin.php" method="post">
  <div class="row">
    <div class="col">
      <input type="email" class="form-control" name="emailadmin" placeholder="Email"required><br>
    </div>
    <div class="col">
      <input type="password" class="form-control" name="passwordadmin" placeholder="Password"required><br>
    </div>
    <center>
      <center><button type="submit" name="daftar" class="btn btn-dark">Daftar</button></center> 
    </center>
</form>
</body>
</html>