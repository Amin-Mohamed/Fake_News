<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

// sort the array by date of the news using 'usort'
usort($NewsFeed, "sortArrayAsDate");

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
    <div class="navbar">
        <h1> <a href="index.php"> NEWS</a> </h1>
    </div>
    <body>
        <div class="container">
            <?php foreach ($NewsFeed as $news): ?>
                <div>
                  <h2> <?php echo $news['title'] ?> </h2>
                  <p class="auther">  <?php echo 'by ' . $news['Author'] ?> </p>
                  <p class="date">  <?php echo $news['date'] . '<br>' . randomLikes() . ' likes' ?> </p>
                  <p>  <?php echo $news['Content'] ?> </p>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>
