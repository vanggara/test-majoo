<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.1.1">
	<title>Signin Majoo</title>
	<!-- Bootstrap core CSS -->
	<link href=<?php echo base_url('assets/css/bootstrap.min.css')?> rel="stylesheet">

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
	<link href=<?php echo base_url('assets/css/signin.css')?> rel="stylesheet">
</head>

<body class="text-center">
	<form class="form-signin" action=<?php echo base_url('admin/do-login')?> id="form" name="form" method="post">
		<img class="mb-4" src=<?php echo base_url('assets/img/majoo.png')?> alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
		<label for="username" class="sr-only">Username</label>
		<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
		<p class="text-left">username: admin</p>
		<label for="password" class="sr-only">Password</label>
		<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
		<p class="text-left">password: password</p>
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<p class="mt-5 mb-3 text-muted">2022 &copy; PT Majoo Teknologi Indonesia</p>
	</form>
</body>

</html>
