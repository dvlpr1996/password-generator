<?php

namespace src;

class Generator
{
	private $char = "rowbxqlumphgidyfaenktvsjcz";
	private $symbols = "#@!()&^%$~/]*[{}?><;";
	private $numbers = "6203457189";

	public function passgenerator(array $data, int $length = 6): string
	{	
		(isset($data["upper"])) ? $upper = str_shuffle(strtoupper($this->char)) : $upper = null;
		(isset($data["lower"])) ? $lower = str_shuffle(strtolower($this->char)) : $lower = null;
		(isset($data["symbols"])) ? $symbols = str_shuffle($this->symbols) : $symbols = null;
		(isset($data["numbers"])) ? $numbers = str_shuffle($this->numbers) : $numbers = null;

		$shuffle = str_shuffle($upper . $numbers . $lower . $symbols);

		if ($length <= 82)
			return substr($shuffle, 0, $length);

		if ($length > 82) {
			$shuffle = str_pad($shuffle, 124, $shuffle, STR_PAD_BOTH);
			return substr($shuffle, 0, $length);
		}
	}
}
