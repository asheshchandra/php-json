<?php

$personProfile = [
    "name" => "John Doe",
    "age" => 30,
    "address" => [
        "street" => "123 Main St",
        "city" => "New York",
        "state" => "NY",
        "zip" => "10001"
    ],
    "addresses" => [
        'home' => [
            "street" => "123 Main St",
            "city" => "New York",
            "state" => "NY",
            "zip" => "10001"
        ],
        'work' => [
            "street" => "456 Corporate Blvd",
            "city" => "San Francisco",
            "state" => "CA",
            "zip" => "94105"
        ]
    ],
    "hobbies" => [
        ["name" => "reading", "level" => "intermediate"],
        ["name" => "swimming", "level" => "advanced"]
    ],
    "education" => [
        [
            "degree" => "Bachelor of Science",
            "major" => "Computer Science",
            "university" => "University of California, Berkeley"
        ]
    ]
];

// $json = json_encode($personProfile, JSON_PRETTY_PRINT);
// file_put_contents("profile.json", $json);

$personData = file_get_contents("profile.json");
$person = json_decode($personData, true);
echo $person['addresses']['home']['street']; // Outputs: San Francisco