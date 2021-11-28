<?= include_layout("tpl/layout/header.php") ?>

<div class="container">

	<div class="text-center mt-3">
		<h1>Hash Generator</h1>
		<p>service help's you to generate hash in 1 - 2 click</p>
	</div>

	<div class="row">
		<div class="col-md-8 col-lg-6 mx-auto">
			<input type="text" class="form-control hash-control" id="copy" data-action="hash" value="your generated hash" readonly>
		</div>
	</div>

	<form action="<?= site_url("hash.php") ?>" method="POST" class="text-center mt-4">

		<div class="form-check form-check-inline mt-2">
			<input type="radio" class="form-check-input" name="radiodata" id="sha1" value="sha1">
			<label class="form-check-label" for="sha1">sha1</label>
		</div>

		<div class="form-check form-check-inline mt-2">
			<input type="radio" class="form-check-input" name="radiodata" id="sha256" value="sha256">
			<label class="form-check-label" for="sha256">sha256</label>
		</div>

		<div class="form-check form-check-inline mt-2">
			<input type="radio" class="form-check-input" name="radiodata" id="sha224" value="sha224">
			<label class="form-check-label" for="sha224">sha224</label>
		</div>

		<div class="form-check form-check-inline mt-2">
			<input type="radio" class="form-check-input" name="radiodata" id="sha384" value="sha384">
			<label class="form-check-label" for="sha384">sha384</label>
		</div>

		<div class="form-check form-check-inline mt-2">
			<input type="radio" class="form-check-input" name="radiodata" id="sha512" value="sha512">
			<label class="form-check-label" for="sha512">sha512</label>
		</div>

		<div class="form-check form-check-inline mt-2">
			<input type="radio" class="form-check-input" name="radiodata" id="crc32" value="crc32">
			<label class="form-check-label" for="crc32">crc32</label>
		</div>

		<div class="form-check form-check-inline mt-2">
			<input type="radio" class="form-check-input" name="radiodata" id="gost" value="gost">
			<label class="form-check-label" for="gost">gost</label>
		</div>

		<div class="form-check form-check-inline mt-2">
			<input type="radio" class="form-check-input" name="radiodata" id="ripemd128" value="ripemd128">
			<label class="form-check-label" for="ripemd128">ripemd128</label>
		</div>

		<div class="form-check form-check-inline mt-2">
			<input type="radio" class="form-check-input" name="radiodata" id="ripemd320" value="ripemd320">
			<label class="form-check-label" for="ripemd320">ripemd320</label>
		</div>

		<div class="form-check form-check-inline mt-2">
			<input type="radio" class="form-check-input" name="radiodata" id="ripemd256" value="ripemd256">
			<label class="form-check-label" for="ripemd256">ripemd256</label>
		</div>
		
		<div class="text-center mt-4">
			<button type="button" class="btn btn-copy m-3" data-clipboard-action="copy" data-clipboard-target="#copy">copy to clipboard</button>
			<button type="submit" class="btn" name="generate">generate hash</button>
		</div>

	</form>

</div>
<?= include_layout("tpl/layout/footer.php") ?>