<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="sp">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="<?=IMG?>favicon.ico">
	<link rel="stylesheet" href="<?=CSS?>normalize.css">
	<link rel="stylesheet" href="<?=CSS?>bootstrap.min.css">
	<link rel="stylesheet" href="<?=CSS?>bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="<?=CSS?>footer.css">
	<link rel="stylesheet" href="<?=CSS?>header.css">
	<link rel="stylesheet" href="<?=CSS?>index.css">
	<link rel="stylesheet" href="<?=FONTS?>style.css">
	<title>SIPRAC</title>
</head>
<body>
	
	<?php $this -> load -> view('core/modals') ?>
	
	<?php $this->load->view('core/header') ?>

	<?php $this -> load -> view('ourContent') ?>

	<?php $this->load->view('core/footer') ?>

	<script src="<?=JS?>jquery.min.js"></script>
    <script src="<?=JS?>bootstrap.min.js"></script>
    <script src="<?=JS?>bootstrap-datepicker.min.js"></script>
    <script src="<?=JS?>ourJS.js"></script>
    <script src="<?=JS?>login.js"></script>
</body>
</html>