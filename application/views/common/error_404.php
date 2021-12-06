<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('common/head'); ?>
</head>

<body>

	<?php $this->load->view('common/preloader'); ?>

	<!-- error area start -->
	<div class="error-area text-center">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-4 col-7">
					<div class="error-page-left-img">
						<div class="top-image">
							<img class="error-img-1" src="<?= assets('assets/img/others/3.png') ?>" alt="404">
							<span>Oops !</span>
						</div>
						<img src="<?= assets('assets/img/others/2.png') ?>" alt="404">
					</div>
				</div>
				<div class="col-md-8 text-center">
					<img src="<?= assets('assets/img/others/1.png') ?>" alt="404">
					<div class="error-back-to-home">
						<a class="btn" href="<?= base_url() ?>">Go to Home</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- error area end -->

	<!-- back to top area start -->
	<div class="back-to-top">
		<span class="back-top"><i class="fa fa-angle-up"></i></span>
	</div>
	<!-- back to top area end -->

	<!-- jquery -->
	<script src="<?= assets('assets/js/jquery-2.2.4.min.js') ?>"></script>
	<!-- popper -->
	<script src="<?= assets('assets/js/popper.min.js') ?>"></script>
	<!-- bootstrap -->
	<script src="<?= assets('assets/js/bootstrap.min.js') ?>"></script>
	<!-- magnific popup -->
	<script src="<?= assets('assets/js/jquery.magnific-popup.js') ?>"></script>
	<!-- wow -->
	<script src="<?= assets('assets/js/wow.min.js') ?>"></script>
	<!-- owl carousel -->
	<script src="<?= assets('assets/js/owl.carousel.min.js') ?>"></script>
	<!-- cssslider slider -->
	<script src="<?= assets('assets/js/jquery.cssslider.min.js') ?>"></script>
	<!-- waypoint -->
	<script src="<?= assets('assets/js/waypoints.min.js') ?>"></script>
	<!-- counterup -->
	<script src="<?= assets('assets/js/jquery.counterup.min.js') ?>"></script>
	<!-- imageloaded -->
	<script src="<?= assets('assets/js/imagesloaded.pkgd.min.js') ?>"></script>
	<!-- isotope -->
	<script src="<?= assets('assets/js/isotope.pkgd.min.js') ?>"></script>
	<!-- nice-select -->
	<script src="<?= assets('assets/js/jquery.nice-select.min.js') ?>"></script>
	<!-- world map -->
	<script src="<?= assets('assets/js/worldmap-libs.js') ?>"></script>
	<script src="<?= assets('assets/js/worldmap-topojson.js') ?>"></script>
	<script src="<?= assets('assets/js/mediaelement.min.js') ?>"></script>
	<!-- main js -->
	<script src="<?= assets('assets/js/main.js') ?> "></script>
</body>

</html>