<?php
$person = [
    'name' => 'John Doe',
    'age' => 30,
    'hobbies' => ['reading', 'swimming']
];

$json = json_encode($person, JSON_PRETTY_PRINT);
// echo $json;
file_put_contents('person.json', $json);