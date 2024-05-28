<base href="<?php echo base_url()?>" />
<!DOCTYPE html>
<html lang="en">
  <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $title?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
	<div class="container-scroller">
	  <div class="container-fluid page-body-wrapper full-page-wrapper">
		<div class="content-wrapper d-flex align-items-center auth">
		  <div class="row flex-grow">
			<div class="col-lg-4 mx-auto">
			  <div class="auth-form-light text-left p-5">
				<div class="brand-logo">
				  <img src="assets/images/logo-dark.png">
				</div>
				<h4>Pendaftaran Akun Konsumen</h4>
				<h6 class="font-weight-light">Isi form pendaftaran dengan benar.</h6>
				<form class="pt-3" method="post" action="home/prosesdaftar">
				  <div class="form-group">
					<input type="text" required class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
				  </div>
				  <div class="form-group">
					<input type="password" required class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="mt-3">
					<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="daftar" type="submit">DAFTAR</button>
				  </div>
				</form>
				<?= $this->session->flashdata('massage'); ?>
			  </div>
			</div>
		  </div>
		</div>
		<!-- content-wrapper ends -->
	  </div>
	  <!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="assets/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="assets/js/off-canvas.js"></script>
	<script src="assets/js/hoverable-collapse.js"></script>
	<script src="assets/js/misc.js"></script>
	<!-- endinject -->
  </body>
</html>