<base href="<?php echo base_url() ?>" />

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $title ?></title>

	<!-- Custom fonts for this template -->
	<link href="assets/back/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="assets/back/css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="assets/back/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	<link href="assets/back/vendor/bootstrap-chosen/css/bootstrap-chosen.css" rel="stylesheet">




	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	<link href="assets/back/summernote/summernote-bs4.min.css" rel="stylesheet">


</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="pagecontrol/dashboard">
				<img style="width:30px" src="https://caturcemeyka.com/assets/front/img/favicon.png" alt="">

				<div class="sidebar-brand-text mx-1">Catur Cemeyka </div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="pagecontrol/dashboard">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Halaman
			</div>


			<!--<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/beranda">
					<i class="fas fa-fw fa-home"></i>
					<span>Beranda</span></a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/penawaran">
					<i class="fas fa-fw fa-tasks"></i>
					<span>Penawaran</span></a>
			</li>-->

			<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/quote">
					<i class="fas fa-fw fa-quote-left"></i>
					<span>Quote</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/jumlah">
					<i class="fas fa-fw fa-plus-square"></i>
					<span>Jumlah Karya</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/paket">
					<i class="fas fa-fw fa-list-alt"></i>
					<span>Paket</span></a>
			</li>

			<!--<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/project">
					<i class="fas fa-fw fa-cubes"></i>
					<span>Project Kami</span></a>
			</li>-->

			<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/testimoni">
					<i class="fas fa-fw fa-users"></i>
					<span>Testimoni Klien</span></a>
			</li>

			<!--<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/klien">
					<i class="fas fa-fw fa-address-book"></i>
					<span>Klien Kami</span></a>
			</li>-->

			<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/blog">
					<i class="fas fa-fw fa-list-alt"></i>
					<span>Postingan Blog</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/produk">
					<i class="fas fa-fw fa-image"></i>
					<span>Produk</span></a>
			</li>

			<!--<li class="nav-item">
				<a class="nav-link" href="pagecontrol/page/tim">
					<i class="fas fa-fw fa-user-alt"></i>
					<span>Tim Penerbit</span></a>
			</li>-->
			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Setting
			</div>

			<?php
			if ($_SESSION['akses'] == "administrator") {
				echo '<li class="nav-item">
						<a class="nav-link" href="pagecontrol/user/data">
							<i class="fas fa-fw fa-user-plus"></i>
							<span>Kelola User</span></a>
					</li>';
			}
			?>
			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<form class="form-inline">
						<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
						</button>
					</form>


					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama'] ?></span>
								<img class="img-profile rounded-circle" src="upload/user/<?php echo $_SESSION['foto'] ?>">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="pagecontrol/user">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="autentikasi/logout">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="" target="_blank">
									<i class="fas fa-globe fa-sm fa-fw mr-2 text-gray-400"></i>
									Lihat Web
								</a>
								<!--<a class="dropdown-item" href="autentikasi/logout" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>-->
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->