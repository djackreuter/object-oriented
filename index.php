<!DOCTYPE html>
<html>
	<head>
		<title>Object Oriented</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<p>
			<?php
			class Person {
				public $isAlive = true;
				public $name;
				public $age;
				public $location;

				public function __construct($name, $age, $location) {
					$this->name = $name;
					$this->age = $age;
					$this->location = $location;
				}
				public function greet() {
					return "My name is " . $this->name . " " . "I am " . $this->age . " " . "years old " . "and I live in " .
						$this->location . ".";
				}
			}

			$person1 = new Person("Jack", 24, "Albuquerque, NM");
			echo $person1->greet();
			?>
		</p>
	</body>
</html>