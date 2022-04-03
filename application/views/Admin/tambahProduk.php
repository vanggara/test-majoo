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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<!-- CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  

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
					<h1 class="mt-4">Tambah Produk</h1>
					<div class="card mb-4">
						<div class="card-header">
							<i class="fas fa-plus"></i>
							Tambah Produk
						</div>
						<div class="card-body">
							<form action=<?php echo base_url('admin/save-produk')?>
								enctype="multipart/form-data" id="form" name="form" method="post">
								<div class="form-row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="small mb-1" for="namaProduk">Nama Produk </label>
											<input class="form-control py-4" name="namaProduk" id="namaProduk"
												type="text" value="" placeholder=""  required/>
										</div>
									</div>
									</div>
									<div class="form-row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="small mb-1" for="hargaProduk">Harga Produk </label>
											<input class="form-control py-4" name="hargaProduk" id="hargaProduk"
												type="number" value="" placeholder="" required/>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="small mb-1" for="selKategori">Kategori Produk </label>
											<div class="py-2">
												<select id='selKategori' class="w-100">
													<option value='0'>-- Pilih Kategori --</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="small mb-1" for="deskripsiProduk">Deskripsi Produk</label>
									<div class="input-group">
										<textarea name="deskripsiProduk" id="deskripsiProduk" placeholder=""
											required class="form-control" required></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="small mb-1">Foto Produk</label>
									<div class="input-group mb-3">
										<div class="custom-file">
											<input type="file" class="form-control-file" name="fotoProduk"
												id="fotoProduk" accept="image/png, image/jpeg, image/jpg">
										</div>
									</div>
								</div>
								<button class="btn btn-primary btn-lg btn-block" type="submit"
								name="submit">Simpan</button>
							</form>
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
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
	</script>
	<script src=<?php echo base_url('assets/admin/js/scripts.js')?>></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script src=<?php echo base_url('assets/admin/demo/datatables-demo.js')?>></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#selKategori").select2({
				ajax: {
					url: 'getKategori',
					dataType: 'json',
					type: "post",
					delay: 250,
					data: function (params) {
						return {
							searchTerm: params.term // search term
						};
					},
					processResults: function (response) {
						return {
							results: response
						};
					},
					cache: true
				}
			});
		});
	</script>
</body>

</html>
