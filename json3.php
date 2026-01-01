<?php
$jsonData = file_get_contents('person.json');
// $person = json_decode($jsonData,);
// var_dump($person);
// echo $person->name;

$person = json_decode($jsonData, true);
var_dump($person);
// echo $person['name'];