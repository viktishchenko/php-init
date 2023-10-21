<?php

// require("s6-db-dry.php");
include("includes/s6-db-dry.php");

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $sql = "SELECT *
  FROM article
  WHERE id = " . $_GET['id'];

    // var_dump($sql);

    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        echo mysqli_error($conn);
    } else {
        $article = mysqli_fetch_assoc($result);
    }
} else {
    $article = null;
}



?>

<?php require('includes/header.php'); ?>
<?php
if ($article === null): ?>
    <p>No article found.</p>
<?php else: ?>
    <ul>
        <li>
            <article>
                <h2>
                    <?= $article["title"]; ?>
                </h2>
                <p>
                    <?= $article["content"]; ?>
                </p>
            </article>
        </li>
    </ul>
<?php endif; ?>

<?php require('includes/footer.php'); ?>