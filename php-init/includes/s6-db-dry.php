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