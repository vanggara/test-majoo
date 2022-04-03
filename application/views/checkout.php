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
	<link href=<?php echo base_url('assets/css/form-validation.css')?> rel="stylesheet" />

	<!-- Bootstrap core CSS -->
	<link href=<?php echo base_url('assets/css/bootstrap.min.css')?>rel="stylesheet">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

	</style>
	<!-- Custom styles for this template -->
	<link href=<?php echo base_url('assets/css/form-validation.css')?> rel="stylesheet">
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg bg-secondary text fixed-top navbar-shrink" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="#page-top">Majoo Teknologi Indonesia</a>
		</div>
	</nav>
	<!-- Portfolio Section-->
	<section class="page-section portfolio" id="portfolio">
		<div class="container">
			<H2 class="mb-4">Detail Pembelian</H2>
			<!-- Portfolio Grid Items-->
			<div class="row justify-content">
				<!-- Daftar product -->
				<form action="transfer" method="post" class="needs-validation" validate>
					<div class="row">
						<div class="col-md-4 order-md-2 mb-4">
							<?php foreach ($products->result_array() as $product): ?>
								<input hidden id="idProduk" name="idProduk" value=<?php echo $product['ID_PRODUK'] ?>>
							<h4 class="d-flex justify-content-between align-items-center mb-3">
								<span class="text-muted">Keranjang</span>
								<span class="badge badge-secondary badge-pill">3</span>
							</h4>
							<ul class="list-group mb-3">
								<li class="list-group-item d-flex justify-content-between lh-condensed">
									<div class="col-md-8">
										<h6 class="my-0"><?php echo $product['NAMA_PRODUK'] ?></h6>
										<small class="text-muted"><?php echo $product['DESKRIPSI_PRODUK'] ?></small>
									</div>
									<span class="text-muted">Rp. <?php echo number_format($product['HARGA_PRODUK'],2,',','.') ?></span>
								</li>
								<li class="list-group-item d-flex justify-content-between">
									<span>Total (Rp)</span>
									<strong>Rp. <?php echo number_format($product['HARGA_PRODUK'],2,',','.') ?></strong>
								</li>
							</ul>
							<?php endforeach ?>
						</div>
						<div class="col-md-8 order-md-1">
							<h4 class="mb-3">Alamat Pengiriman</h4>
							<div class="row">
								<div class="col-md-6 mb-3">
									<label for="namaDepan">Nama Depan</label>
									<input type="text" class="form-control" name="namaDepan" id="namaDepan" placeholder="" value=""
										required>
									<div class="invalid-feedback">
										Nama depan belum diisi.
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<label for="namaBelakang">Nama Belakang</label>
									<input type="text" class="form-control" name="namaBelakang" id="namaBelakang" placeholder="" value=""
										required>
									<div class="invalid-feedback">
										Nama belakang belum diisi.
									</div>
								</div>
							</div>

							<div class="mb-3">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="you@example.com"
									required>
								<div class="invalid-feedback">
									Alamat email belum diisi
								</div>
							</div>

							<div class="mb-3">
								<label for="alamat">Alamat</label>
								<input type="text" class="form-control" name="alamat" id="alamat" placeholder="1234 Main St"
									required>
								<div class="invalid-feedback">
									Alamat belum diisi.
								</div>
							</div>

							<div class="row">
								<div class="col-md-5 mb-3">
									<label for="negara">Negara</label>
									<input type="text" class="form-control" name="negara" id="negara" placeholder="Indonesia"
										value="" required>
									<div class="invalid-feedback">
										Negara belum diisi.
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="provinsi">Provinsi</label>
									<input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Jawa Timur"
										value="" required>
									<div class="invalid-feedback">
										Provinsi belum diisi.
									</div>
								</div>
								<div class="col-md-3 mb-3">
									<label for="kodePos">Kode Pos</label>
									<input type="text" class="form-control" name="kodePos" id="kodePos" placeholder="" required>
									<div class="invalid-feedback">
										Kode pos belum diisi.
									</div>
								</div>
							</div>
							<hr class="mb-4">

							<h4 class="mb-3">Pembayaran</h4>
							<span>Silahkan transfer sesuai dengan total pembayaan yang tampil di bagian Total pada
								Keranjang ke Nomor Rekening di bawah ini dan mengirimkan bukti Transfer melalui
								nomor
								WhatsApp dibawah ini.<br></span>
							<span>BCA : XXXXXXXXX<br> Konfirmasi WhatsApp : 081XXXXXXXXXX</span>
							<hr class="mb-4">
							<button class="btn btn-primary btn-lg btn-block" type="submit"
								name="submit">Transfer</button>
						</div>
					</div>
				</form>


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
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script>
		window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')

	</script>
	<script src=<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>></script>
</body>

</html>
