<?php include "libs/helper.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Password Generator</title>
	<meta charset="UTF-8">
	<meta name="designer" content="Nima jahan bakhshian">
	<meta name="language" content="en">
	<meta name="description" content="Password Generator help's you to generate password">
	<meta name="subject" content="Password Generator">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- [if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif] -->
</head>

<body>
	<div class="container-fluid">

		<nav class="mt-1">
			<a href="index.html">
				<img src="assets/img/logo.png" alt="logo" width="70" height="70">
			</a>
			<span>Password Generator</span>
		</nav>

	</div>

	<div class="text-center mt-3">
		<h1>Password Generator</h1>
		<p>service help's you to generate password in 1 - 2 click</p>
	</div>

	<div class="container mt-5">

		<div class="row">
			<div class="col-md-8 col-lg-6 mx-auto">
				<input type="text" class="form-control" id="copy" value="your generated password" readonly>
			</div>
		</div>

		<form action="process/action.php" method="POST" class="row justify-content-evenly align-items-center mt-3">

			<div class="col-auto mt-3 mt-lg-2">

				<div class="form-check form-check-inline">
					<input class="form-check-input" id="upper" name="upper" type="checkbox" value="uppercase">
					<label class="form-check-label" for="upper">uppercase</label>
				</div>

				<div class="form-check form-check-inline">
					<input class="form-check-input" id="lower" name="lower" type="checkbox" value="lowercase">
					<label class="form-check-label" for="lower">lowercase</label>
				</div>

				<div class="form-check form-check-inline">
					<input class="form-check-input" id="symbols" name="symbols" type="checkbox" value="symbols">
					<label class="form-check-label" for="symbols">symbols</label>
				</div>

				<div class="form-check form-check-inline">
					<input class="form-check-input" id="numbers" name="numbers" type="checkbox" value="numbers">
					<label class="form-check-label" for="numbers">numbers</label>
				</div>

			</div>
			<!-- todo : form input validation sanitize and filter func -->
			<div class="col-md-6 col-lg-4 mt-3 mt-lg-2">
				<select class="form-select" name="length">
					<option>Password Length</option>
					<optgroup label="Weak">
						<option value="6">6</option>
						<option value="8">8</option>
						<option value="10">10</option>
						<option value="12">12</option>
					</optgroup>
					<optgroup label="Strong">
						<option value="16">16</option>
						<option value="18">18</option>
						<option value="24">24</option>
						<option value="26">26</option>
						<option value="32">32</option>
					</optgroup>
					<optgroup label="Very Strong">
						<option value="34">34</option>
						<option value="36">36</option>
						<option value="42">42</option>
						<option value="46">46</option>
						<option value="56">56</option>
						<option value="60">60</option>
						<option value="67">67</option>
					</optgroup>
					<optgroup label="Unbelievable">
						<option value="70">70</option>
						<option value="74">74</option>
						<option value="76">76</option>
						<option value="72">72</option>
						<option value="86">86</option>
						<option value="90">90</option>
						<option value="124">124</option>
					</optgroup>
				</select>
			</div>

			<div class="text-center mt-4">
				<button type="button" class="btn btn-copy m-3" data-clipboard-action="copy" data-clipboard-target="#copy">copy to
					clipboard</button>
				<button type="submit" class="btn" name="generate">generate Password</button>
			</div>

		</form>

	</div>


	<div class="container-fluid">
		<footer>
			<div class="text-center">
				<hr>
				<p>
					all right reserved by nima jahan bakhshian &copy; <?= current_time() ?>
				</p>
			</div>
		</footer>
	</div>


	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/clipboard/clipboard.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="assets/js/script.js"></script>
	<noscript>your browser does not support the javascript</noscript>
</body>

</html>