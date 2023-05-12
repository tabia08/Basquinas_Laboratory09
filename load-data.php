<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Kat', 'Female', '03-22-20010', 'Baron', 'basquinas@gmail.com', 'Quirino Street', '90905434323');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Lukas',
			'gender' => 'Male',
			'birthdate' => '12-21-2012',
			'owner' => 'Youji',
			'email' => 'asd@gmail.com',
			'address' => 'Lourdes Sur East',
			'contact_number' => '90054436842'
		],
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}