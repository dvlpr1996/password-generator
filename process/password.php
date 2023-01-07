<?php

require_once __DIR__ . "/../bootstrap/init.php";

use src\view;
use src\Generator;

$valid_len = [
    6, 8, 10, 12, 16, 18, 24, 26, 32, 34, 36, 42, 46, 56, 60, 67, 70, 74, 76, 72, 86, 90, 124
];

$btnGenerate = $_POST['generate'];
$upperRequest = $_POST['upper'] ?? null;
$lowerRequest = $_POST['lower'] ?? null;
$symbolRequest = $_POST['symbols'] ?? null;
$numbersRequest = $_POST['numbers'] ?? null;
$request = strtoupper($_SERVER['REQUEST_METHOD']);

try {
    if ($request !== 'POST')
        die_Page('invalid request!');

    if (!isset($btnGenerate) && $btnGenerate != 'generate Password')
        throw new Exception('Invalid request');

    (isset($upperRequest) && $upperRequest == 'upper') ? $upper = $upperRequest : $upper = null;

    (isset($lowerRequest) && $lowerRequest == 'lower') ? $lower = $lowerRequest : $lower = null;

    (isset($symbolRequest) && $symbolRequest == 'symbols') ? $symbols = $symbolRequest : $symbols = null;

    (isset($numbersRequest) && $numbersRequest == 'numbers') ? $num = $numbersRequest : $num = null;

    (isset($_POST['length'])) ? $len = (int)$_POST['length'] : $len = null;

    if ($lower == null && $upper == null && $num == null && $symbols == null)
        throw new Exception('At least one item must be selected');

    if (!in_array($len, $valid_len, true))
        throw new Exception('password length value in not valid! try again');

    $data = [
        'upper' => $upper,
        'lower' => $lower,
        'symbols' => $symbols,
        'numbers' => $num
    ];

    $pass = e((new Generator())->passgenerator($data, $len));
    view::render('index', ['pass' => $pass]);
} catch (exception $e) {
    display_error($e->getMessage());
}
