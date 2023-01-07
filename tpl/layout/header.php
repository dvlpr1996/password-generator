<?php require_once __DIR__ . '/../../bootstrap/init.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= page_title() ?></title>
	<meta charset="UTF-8">
	<meta name="designer" content="Nima jahan bakhshian">
	<meta name="language" content="en">
	<meta name="description" content="Password Generator help's you to generate password and hashing your data">
	<meta name="subject" content="Password Generator">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?= BASE_URL ?>assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
	<!-- [if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif] -->
</head>

<body>
	<div class="container-fluid">

		<nav class="mt-1">
			<a href="<?= site_url("index.php") ?>">
				<img src="<?= BASE_URL ?>assets/img/logo.png" alt="logo" width="70" height="70">
			</a>
			<a href="<?= site_url("index.php") ?>">Password Generator</a>
			<a href="<?= site_url("hash.php") ?>">Hash Generator</a>
		</nav>

	</div>
