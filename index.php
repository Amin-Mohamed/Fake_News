<?php

declare(strict_types=1);

require __DIR__.'/data.php';
require __DIR__.'/functions.php';

// sort the array by date of the news using 'usort' function.
usort($articles, "sortByDate");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Fake-News</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">FAKE NEWS</a>
    </nav>
    <div class="container">
        <?php foreach ($articles as $article): ?>
            <div>
                <h2> <?php echo $article['title'] ?> </h2>
                <p class="Author">  <?php echo 'by ' . $article['author'] ?> </p>
                <p class="date">  <?php echo $article['date'] . '<br>' . randomLikes() . ' likes' ?> </p>
                <p>  <?php echo $article['content'] ?> </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
