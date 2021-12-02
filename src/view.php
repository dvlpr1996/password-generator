<?php

namespace src;

class view
{
	public static function render($view, $args = [])
	{
		extract($args, EXTR_SKIP);

		$file = __DIR__ . "/../{$view}.php";

		if (is_readable($file)) {
			require $file;
		} else {
			throw new \Exception("{$file} not found");
		}
	}
}
