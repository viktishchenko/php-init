<?php

// $db_host = "localhost";
// $db_name = "myfirst_php_db";
// $db_user = "root";
// $db_pass = "";
$db_host = "localhost";
$db_name = "myfirst_php_db";
$db_user = "myfirst_start";
$db_pass = "grRDVPJBOmm-6FMj";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

 if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
 }

  echo "Connected successfully.";

  /* 
  - .\mysql -u root -p
  - pass
  - MariaDB [(none)]> show databases;
  MariaDB [(none)]> SELECT User, Host FROM mysql.user;
  +---------------+-----------+
  | User          | Host      |
  +---------------+-----------+
  | myfirst_start | %         |
  | root          | 127.0.0.1 |
  | root          | ::1       |
  | pma           | localhost |
  | root          | localhost |
  +---------------+-----------+
  - MariaDB [(none)]> DROP USER 'myfirst_start'@'%';
  - MariaDB [(none)]> SELECT User, Host FROM mysql.user;
  +------+-----------+
  | User | Host      |
  +------+-----------+
  | root | 127.0.0.1 |
  | root | ::1       |
  | pma  | localhost |
  | root | localhost |
  +------+-----------+
  4 rows in set (0.001 sec)
  MariaDB [(none)]> Bye
  - Ctrl-C -- exit!
  - .\mysql -u root -p
  - DROP DATABASE databasename

   --- SQL Qqeries
   SELECT * FROM `article` WHERE  id = 2;
   SELECT title FROM `article` WHERE  id = 2;
   SELECT title FROM `article`;
   SELECT title FROM `article` WHERE title = `Bla-bla-bal`;
   SELECT title FROM `article` WHERE title != `Bla-bla-bal`;
   SELECT title FROM `article` WHERE title = `Bla-bla` OR title = `First; post`;
   
   --- Add Index to Make Queries Faster and Order the Result
   Structure → add index → profit!
   --- SQL Qqeries FAST ↕
   SELECT * FROM `article` ORDER BY  title;
   SELECT * FROM `article` ORDER BY  title DESC;
   

  */