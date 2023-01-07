<?php

require_once __DIR__ . "/../bootstrap/init.php";

use src\view;
use src\hash;

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

$btnGenerate = $_POST['generate'];
$request = strtoupper($_SERVER['REQUEST_METHOD']);


try {
    if ($request !== 'POST')
        die_Page('invalid request!');

    if (!isset($btnGenerate) && $btnGenerate != 'generate hash')
        throw new Exception('Invalid request');

    (isset($_POST['user-input']) && !empty($_POST['user-input'])) ? $input = input_validation($_POST['user-input']) : $input = null;

    (isset($_POST['radiodata'])) ? $radiodata = $_POST['radiodata'] : $radiodata = null;

    if (!isset($_POST['radiodata']))
        throw new Exception('one item must be selected');

    if (empty($input))
        throw new Exception('Enter your text');

    if (!in_array($radiodata, $algos, true))
        throw new Exception('hash algorithm is not valid! try again');

    $hash = e((new hash)->generateHash($input, $radiodata));

    view::render('hash', ['hash' => $hash]);

} catch (exception $e) {
    display_error($e->getMessage());
}
