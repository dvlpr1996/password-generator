<?php

function ddd($data){
	echo "<pre style='color: #9c4100; background: #fff; z-index: 999; position: relative; padding: 10px; margin: 10px; border-radius: 5px; border-left: 3px solid #c56705;'>";
	var_dump($data);
	echo "</pre>";
}

function dd($data){
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}

function current_time() {
	return date('Y');
}

function site_url($uri = ''){
	return BASE_URL . $uri;
}

function redirect($url) {
	header("Location: $url");
	die();
}

function page_title($title) {
	
}
