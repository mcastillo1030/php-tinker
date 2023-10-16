<?php
	foreach (glob('interfaces/*.php') as $filename) {
		include $filename;
	}

	foreach (glob('traits/*.php') as $filename) {
		include $filename;
	}

	foreach (glob('classes/*.php') as $filename) {
		include $filename;
	}

	use Classes\Dog;
	use Classes\Person;

	$array = array('apple', 'orange');
	$array2 = ['apple', 'orange'];
	$assoc_array = array('name' => 'John', 'age' => 25);
	$jon = 'Jon';

	$isTrue = true;
	$isFalse = false;

	$ternary = $isTrue ? 'true' : 'false';
	$shortTernary = $isTrue ?: 'false';
	$nullish = $isFalse ?? 'false';


	$my_person = new Person('John', 25);
	$name = $my_person->name;
	$dog = new Dog();

	// $my_person->myTraitMethod();
	// $dog->myTraitMethod();

	$age = $my_person->age;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Testing PHP</title>
</head>
<body>
	<h1>Page Title</h1>
	<ul>
		<?php foreach ($array as $item) { ?>
			<li><?php echo $item; ?></li>
		<?php } ?>
	</ul>

	<ul>
		<?php foreach ($array2 as $item) { ?>
			<li><?php echo $item; ?></li>
		<?php } ?>
	</ul>

	<ul>
		<?php foreach ($assoc_array as $k => $v) { ?>
			<li><?php echo $k . ': ' . $v; ?></li>
		<?php } ?>
	</ul>
</body>
</html>