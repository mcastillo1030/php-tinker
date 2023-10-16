<?php
namespace Classes;

use Interfaces\MyInterface;
use Interfaces\MyInterface2;
use Traits\MyTrait;

class Person
		extends Creature
		implements MyInterface, MyInterface2
	{
		private $name;

		use MyTrait;

		public function __construct($name, $age) {
			parent::__construct($age);
			$this->name = $name;
			// $this->age = $age;
		}

		public function __get($name) {
			return $this->$name;
		}

		public function myInterfaceMethod()
		{
			echo 'MyInterface method';
		}

		public function myInterfaceMethod2()
		{
			echo 'MyInterface2 method';
		}
	}