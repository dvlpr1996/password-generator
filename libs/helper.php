<?php
defined('BASE_PATH') or die("Permision Denied!");

function nice_dd($data)
{
	echo "<pre style='color: #9c4100; background: #fff; z-index: 999; position: relative; padding: 10px; margin: 10px; border-radius: 5px; border-left: 3px solid #c56705;'>";
	var_dump($data);
	echo "</pre>";
}

function dd($data)
{
	nice_dd($data);
	die();
}

function current_time()
{
	return date('Y');
}

function site_url(string $uri = '')
{
	return BASE_URL . $uri;
}

function redirect(string $url)
{
	header("Location: $url");
	die();
}

function page_title(): string
{
	$title = $_SERVER['SCRIPT_FILENAME'];
	$title = basename($title, '.php');
	if ($title == 'index') {
		return ucwords("Password generator");
	}
	return ucwords($title .  " " . "generator");
}

function include_layout(string $url = '')
{
	include_once(BASE_PATH . $url);
}

function validation($data)
{
	$data = filter_var($data, FILTER_SANITIZE_STRING);
	$data = trim($data);
	$data = htmlspecialchars($data);
	return $data;
}
