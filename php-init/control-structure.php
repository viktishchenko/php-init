<?php

$articles = [
    "First post",
    "Second post",
    "Read this!",
];

foreach($articles as $article){
    echo $article . ", <br>"; // 
}

// if construct

$articles2 = [];
// $articles2 = [23];

var_dump(empty($articles2)); // bool(true)

echo "<br>";

if (true) {
    echo "The condition true...";
}

echo "<br>";

if (empty($articles2)) {
    echo "The array is empty...";
} else {
    echo "The array is not empty...";
}

echo "<br>";

// comparison operators

var_dump(3==4); // bool(false)

echo "<br>";

var_dump(4==4); // bool(true)

echo "<br>";

$age = 21;

if ($age >= 21) {
    echo "The condition true..."; // >=
} else {
    echo "The condition false..."; // >
}

echo "<br>";

// while loop

$month = 1;

while ($month<=12) {
    echo $month . ", "; // 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 
    $month = $month + 1; 
}


echo "<br>";

// for loop

for ($i=0; $i <= 10; $i++) { // $i = $i + 1 / $i += 1 / $i++
    echo $i . ", "; // 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
}

echo "<br>";

// if elseif condition

$hour = 3;

if ($hour < 12 && $hour >= 4) {
    echo "Good morning, Dave";
} elseif ( $hour >= 12 && $hour < 18) {
    echo "Good afternoon, Dave";
} elseif ($hour >= 18 && $hour < 24) {
    echo "Good evening, Dave";
} elseif ($hour > 24 || $hour < 0) {
    echo "Whaaa, Dave?";
} else {
    echo "Good night, Dave!";
}

echo "<br>";

$day = "Bla";
// $day = "Sun";
// $day = "Tue";

switch ($day) {
    case 'Mon':
        echo "today is: Monday";
        break;
    case 'Tue':
        echo "today is: Tuesday";
        break;
    case 'Wed':
        echo "today is: Wednesday";
        break;
    case 'Thu':
        echo "today is: Thursday";
        break;
    case 'Fri':
        echo "today is: Friday";
        break;
    case 'Sat':
        echo "today is: Saturday";
        break;
    case 'Sun':
        echo "today is: Sunday";
        break;
        
        default:
        echo "Whaaa?";
        break;
}
