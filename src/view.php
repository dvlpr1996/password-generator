<?php

class view {
	public staic function view(string $path,array $data) {
		extract($data);
	}
}