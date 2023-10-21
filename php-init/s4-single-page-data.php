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
  WHERE id = 1
  ORDER BY created_at;";

$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo mysqli_error($conn);
} else {
    $article = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="shortcut icon" href="#">
</head>

<body>
    <header>
        <h1>My Blog</h1>
    </header>
    <main>
        <?php
        if ($article === null) : ?>
            <p>No article found.</p>
        <?php else : ?>
            <ul>
                    <li>
                        <article>
                            <h2><?= $article["title"]; ?></h2>
                            <p><?= $article["content"]; ?></p>
                        </article>
                    </li>
            </ul>
        <?php endif; ?>
    </main>
</body>

</html>