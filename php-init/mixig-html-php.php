<?php

$name = "Tomas";
$name2 = "John";
$hour = 3;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="#">
</head>
<body>
   <?php echo "<h1>Hello, PHP!</h1>"; 
  // this coment line is works
  /*
  this 
  is
  multy 
  line 
  comments
  */
  echo "<p>Lorem ipsum dolor sit amet.</p>";
  ?>
   <!-- or -->
   <p>Hello, <?php echo "Dave"; ?>! </p> 
   <!-- or -->
   <p>Hello, <?php echo $name; ?>!</p>
   <!-- or -->
   <p>Hello, <?= $name2; ?>!</p>
   <!-- or -->
   <p>Hello, <?= "Anna" ?>!</p>
   <hr>
   
   <?php
    $hour = 3;
    // this coment line is works

    if ($hour < 12 && $hour >= 4) {
        echo "Good morning, Dave";
    } elseif ( $hour >= 12 && $hour < 18) {
        echo "Good afternoon, Dave";
    } elseif ($hour >= 18 && $hour < 24) {
        echo "Good evening, Dave";
    } elseif ($hour > 24 || $hour < 0) {
        echo "Whaaa, Dave?";
    } else {
        echo "Good night, Mike!";
    }
    ?>
<br>

    <?php if ($hour < 12 && $hour >= 4): ?>
    Good morning, Dave!
    <?php elseif ( $hour >= 12 && $hour < 18): ?>
    Good afternoon, Dave!
    <?php elseif ($hour >= 18 && $hour < 24): ?>
    Good evening, Dave!
    <?php elseif ($hour > 24 || $hour < 0): ?>
    Whaaa, Dave?
    <?php else: ?>
    Good night, Dave!
    <?php endif; ?>

</body>
</html>