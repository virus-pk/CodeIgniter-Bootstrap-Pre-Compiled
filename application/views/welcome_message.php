<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Sweet Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/extra.css') ?>" rel="stylesheet">

</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-1 col-md-11 col-lg-6 col-xl-3 bg-primary">
				<button class="m-6 btn btn-success shadow-sm" type="submit">Submit Button</button>
			</div>
			<div class="col-sm-11 col-md-1 col-lg-6 col-xl-9 bg-secondary">
				<button class="m-6 btn btn-danger shadow-sm" type="reset">Reset Button</button>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
	<script src="<?= base_url('bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
	<script>
	$(document).ready(function () {
		$('button').hover(function () {
				// over
				$(this).removeClass('shadow-sm');
				$(this).addClass('shadow-lg');
			}, function () {
				// out
				$(this).removeClass('shadow-lg');
				$(this).addClass('shadow-sm');
			}
		);
	});
	</script>
</body>
</html>