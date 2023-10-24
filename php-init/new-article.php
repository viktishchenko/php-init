<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require("includes/s6-db-dry.php");

    // var_dump($_POST);
    /* 
    unreliable option, vulnerable to sql injection
    $sql = " INSERT INTO article (title, content, created_at)
             VALUES ('" . $_POST['title'] . "', '"
        . $_POST['content'] . "', '"
        . $_POST['created_at'] . "') ";

        SELECT Password FROM user WHERE user = 'myfirst_satrt' LIMIT 1; 
        → *1A47CBC50AC5B0DECAC1964E2A2C7ASDF3T342
        → Free Password Hash Cracker
    */

    $sql = " INSERT INTO article (title, content, created_at)
             VALUES ('" . $_POST['title'] . "', '"
        . $_POST['content'] . "', '"
        . $_POST['created_at'] . "') ";


    // var_dump($sql);
    // exit;

    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        echo mysqli_error($conn);

    } else {

        $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: " . $id;

    }

}

?>

<?php require "includes/header.php"; ?>

<h2>New article</h2>

<form method="post">
    <!-- <form action="process_form.php" method="post"> -->
    <style>
        .spacer {
            height: .5rem;
        }

        .max {
            max-width: 320px
        }
    </style>
    <div>
        <input id="title" type="text" name="title" placeholder="Article title">
        <label for="title">Title</label>
    </div>
    <div class="spacer"></div>
    <div>
        <input id="content" type="text" name="content" placeholder="Article content" rows="4" cols="40">
        <label for="content">Content</label>
    </div>
    <div class="spacer"></div>
    <div>
        <input id="created_at" type="date" name="created_at">
        <label for="created_at">Created at: </label>
    </div>
    <div class="spacer"></div>
    <button>Add</button>
</form>

<?php require "includes/footer.php"; ?>