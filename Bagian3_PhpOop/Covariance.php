<?php

require_once "Data/Animal.php";
require_once "Data/AnimalShelter.php";

$catShelter = new \Data\catShelter();
$cat = $catShelter->adopt("Luna");

$dogShelter = new \Data\dogShelter();
$dog = $dogShelter->adopt("Doggy");


