<?php

namespace src;

defined('BASE_PATH') or die("Permision Denied!");

class Hash
{
	private $algos = ["sha1", "sha256", "sha224", "sha384", "sha512", "crc32", "gost", "ripemd128", "ripemd160", "ripemd256", "ripemd320"];

	public function generateMd5(string $data)
	{
		return md5(validation($data));
	}

	public function generateHash(string $algo, string $data)
	{
		if (!in_array($algo, $this->algos)) {
			throw new \Exception("invalid request. try again");
		}
		return hash($algo, validation($data));
	}
}