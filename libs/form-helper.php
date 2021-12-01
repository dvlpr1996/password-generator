<?php

defined('BASE_PATH') or die("Permision Denied!");

function validation($data)
{
	$data = filter_var($data, FILTER_SANITIZE_STRING);
	$data = trim($data);
	$data = htmlspecialchars($data);
	return $data;
}
