<?php

var_dump($_GET); // array(0) { } 
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_POST); // array(2) { ["username"]=> string(4) "john" ["password"]=> string(3) "123" } 
}