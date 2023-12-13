<!DOCTYPE html>
<html>
<head>
	<title>Grafik Data Siswa</title>
	<script type="text/javascript" src="chart.js/Chart.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>

    h3,h5{
	color: black;
    }
    p{
	color: black;
    }
	body{
        background-image: url("bgimage.jpg");
	    background-size: cover;
		font-family: roboto;
	}
 
	</style>
<body>
	<center>
		<h2>Grafik Data Siswa</h2>
	</center>
    <button onclick="history.back()" class="btn btn-dark">Back</button>
	<?php 
	include 'koneksi.php';
	?>
 <!-- membuat chart dengan library javascript chart.js -->
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
	<br/>
	<br/>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Diterima", "Tidak Diterima", "Cadangan",],
				datasets: [{
					label: 'Grafik data siswa berdasarkan status penerimaan',
					data: [
					<?php 
					$jumlah_diterima = mysqli_query($koneksi,"SELECT * FROM datasiswa where hasil_pendaftaran='Diterima'");
					echo mysqli_num_rows($jumlah_diterima);
					?>, 
					<?php 
					$jumlah_tidakditerima = mysqli_query($koneksi,"SELECT * FROM datasiswa where hasil_pendaftaran='Tidak diterima'");
					echo mysqli_num_rows($jumlah_tidakditerima);
					?>, 
					<?php 
					$jumlah_cadangan = mysqli_query($koneksi,"SELECT * FROM datasiswa where hasil_pendaftaran='Cadangan'");
					echo mysqli_num_rows($jumlah_cadangan);
					?>, 
					],
					backgroundColor: [
					'rgba(25, 217, 41, 0.67)',
					'rgba(255, 41, 41, 0.67)',
					'rgba(41, 110, 255, 0.67)'

					],
					borderColor: [
					'rgba(0, 0, 0, 0.9)',
					'rgba(0, 0, 0, 0.9)',
					'rgba(0, 0, 0, 0.9)'

					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
    <br><br>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart2"></canvas>
	</div>
	<br/>
	<br/>
	<script>
		var ctx = document.getElementById("myChart2").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Bogor", "Bekasi", "Jakarta","Bandung"],
				datasets: [{
					label: 'Grafik data siswa berdasarkan kota alamat', 
					data: [
					<?php 
					$jumlah_bogor = mysqli_query($koneksi,"SELECT * FROM datasiswa where alamat='Bogor'");
					echo mysqli_num_rows($jumlah_bogor);
					?>, 
					<?php 
					$jumlah_bekasi = mysqli_query($koneksi,"SELECT * FROM datasiswa where alamat='Bekasi'");
					echo mysqli_num_rows($jumlah_bekasi);
					?>, 
					<?php 
					$jumlah_Jakarta = mysqli_query($koneksi,"SELECT * FROM datasiswa where alamat='Jakarta'");
					echo mysqli_num_rows($jumlah_Jakarta);
					?>, 
					<?php 
					$jumlah_bandung = mysqli_query($koneksi,"SELECT * FROM datasiswa where alamat='Bandung'");
					echo mysqli_num_rows($jumlah_bandung);
					?>,                     
					],
					backgroundColor: [
                    'rgba(186, 41, 255, 0.67)',
					'rgba(255, 41, 41, 0.67)',
					'rgba(41, 110, 255, 0.67)',
                    'rgba(255, 217, 41, 0.67)'

					],
					borderColor: [
					'rgba(0, 0, 0, 0.9)',
					'rgba(0, 0, 0, 0.9)',
					'rgba(0, 0, 0, 0.9)',
                    'rgba(0, 0, 0, 0.9)'

					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>    
</body>
</html>