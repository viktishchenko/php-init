<?php

$db_host = "localhost";
$db_name = "myfirst_php_db";
$db_user = "myfirst_start";
$db_pass = "grRDVPJBOmm-6FMj";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
   echo mysqli_connect_error();
   exit;
}

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
   echo mysqli_connect_error();
   exit;
}


$sql = "SELECT *
  FROM article
  ORDER BY created_at;";

$result = mysqli_query($conn, $sql);

if ($result === false) {
   echo mysqli_error($conn);
} else {
   $articles = mysqli_fetch_all($result);
   /* 
   add corresponding values:
     - $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

     [0]=>
  array(4) {
    ["id"]=>
    string(1) "1"
    ["title"]=>
    string(10) "First post"
    ["content"]=>
    string(19) "This is first post!"
    ["created_at"]=>
    string(19) "2023-09-01 12:48:26"
  } */

   var_dump($articles);
}
