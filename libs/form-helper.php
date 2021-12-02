<?php

function input_validation($data)
{
	$data = filter_var($data, FILTER_SANITIZE_STRING);
	$data = trim($data);
	$data = htmlspecialchars($data);
	return $data;
}

function e(string $value = ''): string
{
	return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}