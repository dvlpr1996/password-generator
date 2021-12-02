<?php

namespace src;

class Hash
{
	public function generateHash(string $data, string $algo)
	{
		return hash($algo, input_validation($data));
	}
}