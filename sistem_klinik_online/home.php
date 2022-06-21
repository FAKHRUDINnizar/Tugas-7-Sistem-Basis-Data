<?php
	require "koneksi.php";

	$querypasien = mysqli_query($conn, "SELECT * FROM pasien");
	$jumlahpasien = mysqli_num_rows($querypasien);
	
	$queryobat = mysqli_query($conn, "SELECT * FROM obat");
	$jumlahobat = mysqli_num_rows($queryobat);
	
	$querydokter = mysqli_query($conn, "SELECT * FROM dokter");
	$jumlahdokter = mysqli_num_rows($querydokter);
	
	$queryberobat = mysqli_query($conn, "SELECT * FROM berobat");
	$jumlahberobat = mysqli_num_rows($queryberobat);
	
	$queryresep = mysqli_query($conn, "SELECT * FROM resep_obat");
	$jumlahresep = mysqli_num_rows($queryresep);
	
	$queryusers = mysqli_query($conn, "SELECT * FROM users");
	$jumlahusers = mysqli_num_rows($queryusers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome/fontawesome/css/all.css" />
    <title>Home</title>
	<link rel="stylesheet" href="style.css">

 <div id="container">

 </div>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<nav>
 <a href="" class="active">HOME</a>
 <a href="">Tentang Kami</a>
 <a href="">Konsultasi</a>
 <a href="">Kontak</a>
</nav>
<section id="hero"></section>
<section id="wrapper">
<section id="main"></section>
<aside id="sidebar"></aside>
</section>
<style css >
/* navigasi */
body {
    min-height: 95vh;
    background-image: linear-gradient(-20deg,#FF7F50 0%, #FF7F50 100%);
    background: url(background.png)no-repeat;
    position: fixed;
    width: 100%;
    height: 100%;
    background-size: cover;
    font-family: 'Quicksand',sans-serif;

}
table {
    border-collapse: collapse
    color: #FFFFF0;
}
nav {
 display: block;
 background-color: #B0C4DE;
}
nav a {
 padding: 15px 30px;
 display: inline-block;
 color: #FFFFF0;
 font-size: 14px;
 text-decoration: none;
 font-weight: bold;
}
nav a.active,
nav a:hover {
 background-color: #B0C4DE;
}
</style>
	
	<style>
		.kotak {
			border: solid;
		}
		.summary-pasien{
			background-color: #F0FFFF;
			border-radius: 15px;
		}
		.summary-obat{
			background-color: #5F9EA0;
			border-radius: 15px;
		}
		.summary-dokter{
			background-color: #FFF8DC;
			border-radius: 15px;
		}
		.summary-berobat{
			background-color: #00FFFF;
			border-radius: 15px;
		}
		.summary-resep{
			background-color: #8FBC8F;
			border-radius: 15px;
		}
		.summary-users{
			background-color: #00BFFF;
			border-radius: 15px;
		}
		
		.no-decoration{
			text-decoration: none;
		}
		
	</style>


<div class=” row g-0″></div>
<div class=" container shadow ">
<div style=” margin:24px;”></div>
<div class=” col-sm-11 mx-auto”>
<div class=” card ”>
<div class=” card-body ”>
<p>
<form method=” POST ”>
<table style=” width:50%; padding:15px;”>
</div>
</div>
</div>
</div>
</div>
</div>
<tr>
<td>Id</td>
<td><textarea name=” id_pasien ” class=” inputanallborder ” style=” width:70% ”></textarea></td>
</tr>
<tr>
<td>Nama</td>
<td><input type=” text ” name=”nama” class=”inputan”></td>
</tr>
<tr>
<td>Option</td>
<td><select name=”option” class=”inputan”>
<option>Pasien</option>
<option>Obat</option>
<option>Resep obat</option>
<option>Dokter</option>
<option>Users</option>
<option>Resep obat</option>
</select></td>
</tr>
</table>

<form  action="index.php" method="get">
<input type="submit" value="Cari">
</form>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
    }
?>

	<div class="container mt-4">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="text-black-item active" aria-current="page">
				<i class="fa-solid fa-file-medical fa-2x"></i>
				<h2 align="center" > Data Klinik Dr.Fakhrudin Nizar</h2>
			</li>
		  </ol>
		</nav>
		
		<div class="container mt-4">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-pasien p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-bed-pulse fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-black">
								<h3 class="fs-2">Pasien</h3>
								<p class="fs-4"><?php echo $jumlahpasien; ?> Pasien</p>
								<p> <a href="pasien.php" class="text-black no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-obat p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-capsules fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-black">
								<h3 class="fs-2">Obat</h3>
								<p class="fs-4"><?php echo $jumlahobat; ?> Obat</p>
								<p> <a href="obat.php" class="text-black no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-dokter p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-user-doctor fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-black">
								<h3 class="fs-2">Dokter</h3>
								<p class="fs-4"><?php echo $jumlahdokter; ?> Dokter</p>
								<p> <a href="dokter.php" class="text-black no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-berobat p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-syringe fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-black">
								<h3 class="fs-2">Berobat</h3>
								<p class="fs-4"><?php echo $jumlahberobat; ?> Berobat</p>
								<p> <a href="berobat.php" class="text-black no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-resep p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-receipt fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-black">
								<h3 class="fs-2">Resep</h3>
								<p class="fs-4"><?php echo $jumlahresep; ?> Resep</p>
								<p> <a href="resep.php" class="text-black no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 mb-3">
					<div class="summary-users p-3">
						<div class="row">
							<div class="col-6">
								<i class="fa-solid fa-hospital-users fa-7x text-black-50"></i>
							</div>
							<div class="col-6 text-black">
								<h3 class="fs-2">Users</h3>
								<p class="fs-4"><?php echo $jumlahusers; ?> Users</p>
								<p> <a href="users.php" class="text-black no-decoration">Lihat Detail</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>