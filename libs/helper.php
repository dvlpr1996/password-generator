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
	echo "<pre>";
	print_r($data);
	echo "</pre>";
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
	$title = str_replace("-", " ", $title);
	if ($title == 'index') {
		$title = ucwords(SITE_TITLE . "- home");
	}
	return ucwords(SITE_TITLE . $title);
}

function include_layout(string $url = '')
{
	include_once(BASE_PATH . $url);
}
