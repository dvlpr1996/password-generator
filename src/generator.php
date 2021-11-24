<?php

namespace src\generator;

class generator
{
	private $char = "rowbxqlumphgidyfaenktvsjcz";
	private $symbols = "#@!()&^%$~/]*[{}?><;";
	private $numbers = "6203457189";



	public function passgenerator(array $data, int $lengh = 6): string
	{

		(isset($data["lower"])) ? $lower = str_shuffle(strtolower($this->char)) : $lower = "";
		(isset($data["upper"])) ? $upper = str_shuffle(strtoupper($this->char)) : $upper = "";
		(isset($data["numbers"])) ? $numbers = str_shuffle($this->numbers) : $numbers = "";
		(isset($data["symbols"])) ? $symbols = str_shuffle($this->symbols) : $symbols = "";

		$shuffle = str_shuffle($upper . $numbers . $lower . $symbols);

		if($lengh <= 82) 
			return substr($shuffle, 0, $lengh);

		if ($lengh > 82) {
			$shuffle = str_pad($shuffle, 124, $shuffle, STR_PAD_BOTH);
			return substr($shuffle, 0, $lengh);
		}
	}
}