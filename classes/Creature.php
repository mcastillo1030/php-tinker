<?php
namespace Classes;

class Creature {
	private $age;

	public function __construct($age) {
		$this->age = $age;
	}

	public function __get($age) {
		return $this->age;
	}
}