<?php

require("s6-db-dry.php");

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}


$sql = "SELECT *
  FROM article
--   WHERE id = 0
  ORDER BY created_at;";

$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>

<?php require('header.php'); ?>

<?php
if (empty($articles)): ?>
    <p>No articles found.</p>
<?php else: ?>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2><a href="s4-single-page-data.php?id=<?= $article['id']; ?>">
                            <?= $article["title"]; ?>
                        </a></h2>
                    <p>
                        <?= $article["content"]; ?>
                    </p>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php require('footer.php'); ?>