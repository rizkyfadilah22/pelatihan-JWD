<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Sistem Informasi Perpustakaan</title>
</head>

<body>
	<nav class="navbar navbar-dark bg-primary">
		<div class="col" style="text-align: center;">
			<div class="row">
				<span class="navbar-brand mb-0 h1" style="font-size: 30px; font-weight:900;">Perpustakaan Umum</span>
			</div>
			<div class="row">
				<span class="navbar-brand mb-0 h1" style="font-size: 15px;">Jl. Lemah Abang No. 11 Telp. (021)555555555</span>
			</div>
		</div>
	</nav>

	<div class="row">
		<div class="col-2">
			<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height:100%;">
				<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
					<svg class="bi me-2" width="40" height="32">
						<use xlink:href="#bootstrap"></use>
					</svg>
					<span class="fs-4">Hi Admin</span>
				</a>
				<hr>
				<ul class="nav nav-pills flex-column mb-auto">
					<li class="nav-item">
						<a href="index.php?p=beranda" class="nav-link active" aria-current="page">
							<svg class="bi me-2" width="16" height="16">
								<use xlink:href="#home"></use>
							</svg>
							Beranda
						</a>
					</li>
					<hr>
					<li>
						<a href="#" class="nav-link text-white">
							<svg class="bi me-2" width="16" height="16">
								<use xlink:href="#speedometer2"></use>
							</svg>
							Entry Data Dan Transaksi
						</a>
					</li>
					<li>
						<a href="index.php?p=anggota" class="nav-link text-white">
							<svg class="bi me-2" width="16" height="16">
								<use xlink:href="#table"></use>
							</svg>
							Data Anggota
						</a>
					</li>
					<li>
						<a href="index.php?p=buku" class="nav-link text-white">
							<svg class="bi me-2" width="16" height="16">
								<use xlink:href="#grid"></use>
							</svg>
							Data Buku
						</a>
					</li>
					<li>
						<a href="index.php?p=transaksi-peminjaman" class="nav-link text-white">
							<svg class="bi me-2" width="16" height="16">
								<use xlink:href="#people-circle"></use>
							</svg>
							Transaksi Peminjaman
						</a>
					</li>
				</ul>
				<hr>
			</div>
		</div>
		<div class="col-10">
			<div id="content-container">
				<div class="container">
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
							<div class="col-md-4 col-md-offset-4">
								<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">

									<div class="panel-footer">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				$pages_dir = 'pages';
				if (!empty($_GET['p'])) {
					$pages = scandir($pages_dir, 0);
					unset($pages[0], $pages[1]);
					$p = $_GET['p'];
					if (in_array($p . '.php', $pages)) {
						include($pages_dir . '/' . $p . '.php');
					} else {
						echo 'Halaman Tidak Ditemukan';
					}
				} else {
					include($pages_dir . '/beranda.php');
				}
				?>
			</div>
		</div>
	</div>

	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top sticky-bottom">
		<div class="col-md-4 d-flex align-items-center">
			<a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
				<svg class="bi" width="30" height="24">
					<use xlink:href="#bootstrap"></use>
				</svg>
			</a>
			<span class="text-muted">© 2021 Sistem Informasi Perpustakaan</span>
		</div>
	</footer>



	<!-- <div id="footer">
		<h3>Sistem Informasi Perpustakaan (sipus) | Praktikum </h3>
	</div> -->


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>