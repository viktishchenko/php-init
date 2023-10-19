<?php
// array_search

$articles = [
    "First post",
    "Second post",
    "Read this!",
];

/* 
    // the same

    $articles = array(
        "First post",
        "Second post",
        "Read this!",
        )
*/

/* 
    // associative array
    
    $articles = [
       "two" => "First post",
       "four" => "Second post",
       "twenty-six" => "Read this!",
    ];
*/

/* 
    // associative array
    
    $articles = [
       "two" => "First post",
       "four" => "Second post",
       "twenty-six" => "Read this!",
    ];
*/

var_dump($articles); // array(3) { [0]=> string(10) "First post" [1]=> string(11) "Second post" [2]=> string(10) "Read this!" } 

echo "<br>";

echo $articles[1]; // Second post
// echo $articles["four"]; // Second post

echo "<br>";

$values = [
    "message"=>"Hello, World!",
    "count"=>150,
    "pi"=>3.14,
    "status"=>false,
    "result"=>null,
];

$price = 3.95;
$quantity = 2;

var_dump ($values); // array(5) { ["message"]=> string(13) "Hello, World!" ["count"]=> int(150) ["pi"]=> float(3.14) ["status"]=> bool(false) ["result"]=> NULL } 

$values2 = [
    $price,
    $quantity
];

echo "<br>";

var_dump ($values2); // array(2) { [0]=> float(3.95) [1]=> int(2) } 

echo "<br>";

// multidimensional arrays
$alice = [
    "name" => "Aliace",
    "email" => "alice@eg.com",
    "height" => 1.80,
];
$bob = [
    "name" => "Bob",
    "email" => "bob@eg.com",
    "height" => 1.67,
];
$john = [
    "name" => "John",
    "email" => "john@eg.com",
    "height" => 1.74,
];

$people = [$alice, $bob, $john];

echo "<br>";

echo $people[1]["email"] ;

echo "<br>";

var_dump($people[1]);

echo "<br>";

/* 
$people = [
    [
        "name" => "Aliace",
        "email" => "alice@eg.com",
        "height" => 1.80,
    ];
    [
        "name" => "Bob",
        "email" => "bob@eg.com",
        "height" => 1.67,
    ];
    [
        "name" => "John",
        "email" => "john@eg.com",
        "height" => 1.74,
    ];
];

$alice_email = $people[0]["email"]

*/

/* 
$articles3 = [
    ["title" => "First post", content => "This is first post"],
    ["title" => "Second post", content => "Another post to read"],
    ["title" => "Read this!", content => "You must read this article!"],
]
*/
$articles3 = [
    ["title" => "First post", "content" => "This is first post"],
    ["title" => "Second post", "content" => "Another post to read"],
    ["title" => "Read this!", "content" => "You must read this article!"],
];

echo "<br>";

var_dump($articles3[1]); // array(2) { ["title"]=> string(11) "Second post" ["content"]=> string(20) "Another post to read" }

echo "<br>";

echo $articles3[1]["title"]; // Second post

// Loop https://www.php.net/manual/en/language.control-structures.php

echo "<br>";

$articles4 = [
    "First post",
    "Second post",
    "Read this!",
];

foreach($articles4 as $article){
    echo $article, ", "; // First post, Second post, Read this!, 
};

echo "<br>";

foreach($articles4 as $index => $article){
    echo $index . ' - ' . $article, ", "; // 0 - First post, 1 - Second post, 2 - Read this!, 
};

$articles5= [
    "a" => "First post",
    "b" => "Second post",
    "c" => "Read this!",
];

echo "<br>";

foreach($articles5 as $index => $article){
    echo $index . ' - ' . $article, ", "; // a - First post, b - Second post, c - Read this!,
};