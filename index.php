<?php include "bootstrap/init.php" ?>
<?php include_once "tpl/layout/header.php" ?>

<div class="text-center mt-3">
	<h1>Password Generator</h1>
	<p>service help's you to generate password in 1 - 2 click</p>
</div>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-8 col-lg-6 mx-auto">
			<input type="text" class="form-control" id="copy" data-action="pass"
			 value="<?= $pass ?? 'your generated password' ?>" readonly>
		</div>
	</div>



	<form action="<?= site_url('process/action.php?action=pass') ?>" method="POST" class="row justify-content-evenly align-items-center mt-3">

		<div class="col-auto mt-3 mt-lg-2">

			<div class="form-check form-check-inline">
				<input class="form-check-input" id="upper" name="upper" type="checkbox" value="upper">
				<label class="form-check-label" for="upper">uppercase</label>
			</div>

			<div class="form-check form-check-inline">
				<input class="form-check-input" id="lower" name="lower" type="checkbox" value="lower">
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
			<button type="submit" class="btn" name="generate" value="generate Password">generate Password</button>
		</div>

	</form>

</div>

<?php include_once "tpl/layout/footer.php" ?>
</body>

</html>