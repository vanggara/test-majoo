<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Majoo Teknologi Indonesia</title>
	<link href=<?php echo base_url('assets/admin/css/styles.css')?> rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
		crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
	</script>
</head>

<body class="sb-nav-fixed">
	<!-- header -->
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand" href="index.html">Majoo Teknologi Indonesia</a>
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
		</form>
		<!-- Navbar-->
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href=<?php echo base_url('admin/do-logout')?>>Logout</a>
				</div>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<!-- sidebar -->
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<div class="sb-sidenav-menu-heading">Management</div>
						<a class="nav-link" href=<?php echo base_url('admin')?>>
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Produk
						</a>
						<a class="nav-link" href=<?php echo base_url('admin/pesanan')?>>
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Pesanan
						</a>
					</div>
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<h1 class="mt-4">Detail Pembelian</h1>
					<div class="card mb-4">
						<div class="card-header">
						</div>
						<div class="card-body">
							<!-- Portfolio Section-->
							<section class="page-section portfolio" id="portfolio">
								<div class="container">
									<!-- Portfolio Grid Items-->
									<div class="row justify-content">
										<!-- Daftar product -->
										<form action=<?php echo base_url('admin/proses-pesanan')?> method="post">
											<div class="row ">
												<div class="col-md-12">
													<?php foreach ($products->result_array() as $product): ?>
													<input type="text" hidden name="idPembeli" id="idPembeli"
														value=<?php echo $product['ID_PEMBELI'] ?>>
													<h4 class="mb-3">Alamat Pengiriman</h4>
													<div class="row">
														<div class="col-md-6 mb-3">
															<label for="namaDepan">Nama Depan</label>
															<input type="text" class="form-control" name="namaDepan"
																id="namaDepan" readonly
																value='<?php echo $product['NAMA_DEPAN_PEMBELI'] ?>'>
														</div>
														<div class="col-md-6 mb-3">
															<label for="namaBelakang">Nama Belakang</label>
															<input type="text" class="form-control" name="namaBelakang"
																id="namaBelakang" placeholder=""
																value='<?php echo $product['NAMA_BELAKANG_PEMBELI'] ?>'
																readonly>
														</div>
													</div>

													<div class="mb-3">
														<label for="email">Email</label>
														<input type="email" class="form-control" name="email" id="email"
															placeholder="you@example.com"
															value='<?php echo $product['EMAIL_PEMBELI'] ?>' readonly>
													</div>

													<div class="mb-3">
														<label for="alamat">Alamat</label>
														<input type="text" class="form-control" name="alamat"
															id="alamat" placeholder="1234 Main St"
															value='<?php echo $product['ALAMAT_PEMBELI'] ?>' readonly>
													</div>

													<div class="row">
														<div class="col-md-5 mb-3">
															<label for="negara">Negara</label>
															<input type="text" class="form-control" name="negara"
																id="negara" placeholder="Indonesia"
																value='<?php echo $product['NEGARA_PEMBELI'] ?>'
																readonly>
														</div>
														<div class="col-md-4 mb-3">
															<label for="provinsi">Provinsi</label>
															<input type="text" class="form-control" name="provinsi"
																id="provinsi" placeholder="Jawa Timur"
																value='<?php echo $product['PROVINSI_PEMBELI'] ?>'
																readonly>
														</div>
														<div class="col-md-3 mb-3">
															<label for="kodePos">Kode Pos</label>
															<input type="text" class="form-control" name="kodePos"
																id="kodePos" placeholder="" readonly
																value='<?php echo $product['KODE_POS_PEMBELI'] ?>'>
														</div>
													</div>
													<hr class="mb-4">

													<h4 class="mb-3">Detail Produk</h4>
													<div class="mb-3">
														<label for="namaProduk">Nama Produk</label>
														<input type="text" class="form-control" name="namaProduk"
															id="namaProduk"
															value='<?php echo $product['NAMA_PRODUK'] ?>' readonly>
													</div>
													<div class="mb-3">
														<label for="deskripsiProduk">Deskripsi Produk</label>
														<input type="text" class="form-control" name="deskripsiProduk"
															id="deskripsiProduk"
															value='<?php echo $product['DESKRIPSI_PRODUK'] ?>' readonly>
													</div>
													<div class="mb-3">
														<label for="hargaProduk">Harga Produk</label>
														<input type="text" class="form-control" name="hargaProduk"
															id="hargaProduk"
															value='<?php echo "Rp ". number_format($product['HARGA_PRODUK'],2,',','.') ?>' readonly>
													</div>
													<hr class="mb-4">
													<div class="mb-3">
														<label for="status">Status</label>
														<input type="text" class="form-control" name="status"
															id="status" value='<?php echo $product['STATUS'] ?>'
															readonly>
													</div>
													<hr class="mb-4">
													<button class="btn btn-primary btn-lg btn-block" type="submit"
														name="submit">Proses
														Pesanan</button>
													<?php endforeach ?>
												</div>
											</div>
										</form>


									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</main>
			<!-- footer -->
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">2022 &copy; PT Majoo Teknologi Indonesia
						</div>
						<div>
							<a href="#">Privacy Policy</a>
							&middot;
							<a href="#">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
	</script>
	<script src=<?php echo base_url('assets/admin/js/scripts.js')?>></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script src=<?php echo base_url('assets/admin/demo/datatables-demo.js')?>></script>
</body>

</html>
