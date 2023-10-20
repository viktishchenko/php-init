<?php

$articles = [
    ["title" => "First post", "content" => "This is first post!"],
    ["title" => "Second post", "content" => "Yet anoher fascinating post..."],
    ["title" => "Read this!", "content" => "You must read this now, it's essential reading!"],
    ["title" => "The larest news", "content" => "Here's the latest news, read it..."],
];
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
        <ul>
            <?php foreach($articles as $article) : ?>
<li>
    <article>
        <h2><?= $article["title"]; ?></h2>
        <p><?= $article["content"]; ?></p>
    </article>
</li>
<?php endforeach; ?>
        </ul>
    </main>
</body>
</html>