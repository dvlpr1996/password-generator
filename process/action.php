<?php

include __DIR__ . "/../vendor/autoload.php";
include __DIR__ . "/../libs/form-helper.php";

use src\view;
use src\hash;
use src\Generator;

$valid_len = [6, 8, 10, 12, 16, 18, 24, 26, 32, 34, 36, 42, 46, 56, 60, 67, 70, 74, 76, 72, 86, 90, 124];
$algos = [
	"sha1",
	"sha256",
	"sha224",
	"sha384",
	"sha512",
	"crc32",
	"gost",
	"ripemd128",
	"ripemd160",
	"ripemd256",
	"ripemd320"
];

$request = strtoupper($_SERVER['REQUEST_METHOD']);

if (!isset($_GET['action']) || empty($_GET['action'])) {
	die_Page("Invalid Action!");
}

$action = $_GET['action'];

try {
	switch ($action) {
		case "pass":

			if ($request !== 'POST') {
				die_Page("invalid request!");
			}

			if (!isset($_POST['generate']) && $_POST['generate'] != "generate Password") {
				throw new Exception("Invalid request");
			}

			(isset($_POST['upper']) && $_POST['upper'] == "upper") ? $upper = $_POST['upper'] : $upper = null;

			(isset($_POST['lower']) && $_POST['lower'] == "lower") ? $lower = $_POST['lower'] : $lower = null;

			(isset($_POST['symbols']) && $_POST['symbols'] == "symbols") ? $symbols = $_POST['symbols'] : $symbols = null;
			(isset($_POST['numbers']) && $_POST['numbers'] == "numbers") ? $num = $_POST['numbers'] : $num = null;

			(isset($_POST['length'])) ? $len = (int)$_POST['length'] : $len = null;

			if ($lower == null && $upper == null && $num == null && $symbols == null) {
				throw new Exception("At least one item must be selected");
			}

			if (!in_array($len, $valid_len, true)) {
				throw new Exception("password length value in not valid! try again");
			}

			$data = [
				"upper" => $upper,
				"lower" => $lower,
				"symbols" => $symbols,
				"numbers" => $num
			];

			$pass_generator = new Generator();
			$pass = $pass_generator->passgenerator($data, $len);

			$pass = e($pass);
			view::render("index", ["pass" => $pass]);


			break;
		case "hash":

			if ($request !== 'POST') {
				die_Page("invalid request!");
			}

			if (!isset($_POST['generate']) && $_POST['generate'] != "generate hash") {
				throw new Exception("Invalid request");
			}

			(isset($_POST['user-input']) && !empty($_POST['user-input'])) ? $input = input_validation($_POST['user-input']) : $input = null;
			(isset($_POST['radiodata'])) ? $radiodata = $_POST['radiodata'] : $radiodatat = null;

			if (!isset($_POST['radiodata'])) {
				throw new Exception("one item must be selected");
			}

			if (empty($input)) {
				throw new Exception("Enter your text");
			}

			if (!in_array($radiodata, $algos, true)) {
				throw new Exception("hash algorithm is not valid! try again");
			}

			$hash_generator = new hash;
			$hash = $hash_generator->generateHash($input, $radiodata);

			$hash = e($hash);

			view::render("hash", ["hash" => $hash]);

			break;
		default:
			die_page("invalid request");
	}
} catch (exception $e) {
	echo "<pre style='color: #9c4100; background: #fff; z-index: 999; position: relative; padding: 10px; margin: 10px; border-radius: 5px; border-left: 3px solid #c56705;'>";
	echo $e->getMessage() . " " . "back to <a href='../index.php'>homepage</a>";
	die();
	echo "</pre>";
}
