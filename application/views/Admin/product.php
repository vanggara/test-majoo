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
					<h1 class="mt-4">Daftar Produk</h1>

					<div class="mb-4">
						<div class="form-group align-items-center justify-content-between mt-4 mb-0">
							<a class="btn btn-primary" href=<?php echo base_url('admin/tambah-produk')?>>+ Tambah
								Produk</a>
						</div>
					</div>
					<div class="card mb-4">
						<div class="card-header">
							<i class="fas fa-table mr-1"></i>
							Daftar Produk
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Produk</th>
											<th>Harga Produk</th>
											<th>Deskripsi Produk</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($products as $product): ?>
										<tr>
											<th><?php echo $product->ID_PRODUK ?></th>
											<td><?php echo $product->NAMA_PRODUK ?></td>
											<td>Rp. <?php echo number_format($product->HARGA_PRODUK,2,',','.') ?>
											</td>
											<td><?php echo $product->DESKRIPSI_PRODUK ?></td>
											<td><a
													href=<?php echo base_url('admin/edit-produk/')?><?php echo $product->ID_PRODUK ?>>Edit</a>
												/
												<a href=<?php echo base_url('admin/hapus-produk/')?><?php echo $product->ID_PRODUK ?>
													onclick="return confirm_alert(this);">Hapus</a>

											</td>
										</tr>
										<?php endforeach?>
									</tbody>
								</table>
								<p class="col-2 text-center d-flex justify-content-between"><?php echo $links; ?></p>
							</div>
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
	<script>
		function confirm_alert(node) {
			return confirm("Apakah anda ingin menghapus puduk ini?");
		}

	</script>
</body>

</html>
