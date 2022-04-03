<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Majoo Teknologi Indonesia</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href=<?php echo base_url('assets/favicon.ico')?> />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
		type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href=<?php echo base_url('assets/css/styles.css')?> rel="stylesheet" />
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg bg-secondary text fixed-top navbar-shrink" id="mainNav">
		<div class="row col-12">
			<div class="col d-flex justify-content-start ms-3">
				<a class="navbar-brand" href="#page-top">Majoo Teknologi Indonesia</a>
			</div>
			<div class="col d-flex justify-content-end my-2">
				<button class="btn btn-primary" onclick="location.href='<?php echo base_url();?>admin'">Login as Admin</button>
			</div>
		</div>
	</nav>
	<!-- Portfolio Section-->
	<section class="page-section portfolio" id="portfolio">
		<div class="container">
			<H2 class="mb-4">Product</H2>
			<!-- Portfolio Grid Items-->
			<div class="row justify-content">
				<?php foreach ($products as $product): ?>
				<!-- Daftar product -->
				<div class="col-md-6 col-lg-3 mb-5">
					<form action="beli" method="post">
						<div class="row justify-content-center ">
							<div class="btn btn-xl btn-outline-dark">
								<div class="detail">
									<div class="image">
										<!-- Portfolio Modal - Image-->
										<img class="img-fluid rounded mb-5"
											src=<?php echo 'assets/img/produk/'.$product->FOTO_PRODUK ?> alt="..." />
									</div>
									<!-- Portfolio Modal - Text-->
									<input hidden id="idProduk" name="idProduk"
										value=<?php echo $product->ID_PRODUK ?>>
									<p><?php echo $product->NAMA_PRODUK ?></p>
									<p>Rp. <?php
									echo number_format($product->HARGA_PRODUK,2,',','.')?></p>
									<p><?php echo substr(nl2br($product->DESKRIPSI_PRODUK), 0, 50) ?>...</p>
								</div>
								<div class="col-lg-12 text-center">
									<button type="submit" class="btn btn-primary" name="submit">
										Beli
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<?php endforeach ?>
				<p class="col-2 text-center d-flex justify-content-between"><?php echo $links; ?></p>
			</div>
		</div>
	</section>
	<!-- Copyright Section-->
	<div class="copyright py-4 text-center text-white">
		<div class="container"><small>2022 &copy; PT Majoo Teknologi Indonesia</small></div>
	</div>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
</body>

</html>
