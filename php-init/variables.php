<?php

// https://www.php.net/manual/en/index.php

$message = "Hello again!";
$temperature = -23.123;
$count = 5;
$is_admin = true;
$data = null;

echo "This is our: ", $message, "<br>"; // message Hello again!


var_dump($message); // string(12) "Hello again!" 
var_dump($temperature); // float(-23.123)
var_dump($count); // int(5)
var_dump($is_admin, $data); // bool(true) NULL 

$num_float = 1.53;
$num_int = 3;

// math
var_dump($num_float + $num_int); //  float(4.53) 

// next line & tag
echo "<div>First line <br> Second line</div>";

// concat
$str1 = "Hello,";
$str2 = "Dave!";

echo $str1 ." ". $str2;

//mult string & int

$price = "150";
$quantity = 3;
$total_price = $price * $quantity;

echo "<br> Tolal price: ";

var_dump($total_price); // Tolal price: int(450) 

// or and operator

$is_admin2 = true;
$is_editor = false;

echo "<br>";
var_dump($is_admin2 or $is_editor); //bool(true) 
var_dump($is_admin2 || $is_editor); //bool(true) 
echo "<br>";
var_dump($is_admin2 and $is_editor); //bool(false) 
var_dump($is_admin2 && $is_editor); //bool(false) 

echo "<br>";

// quote "/'
$start = "3 o'clock - "; // 3 o'clock - 4 o'clock
$end = '4 o\'clock'; // 3 o'clock - 4 o'clock

echo $start, $end;