<?php header("HTTP/1.0 404 Not Found"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <title>404 Page Not Found</title>

    <?php include_once head; ?>


    <!-- THIS PAGE CSS FILE -->
    <link rel="stylesheet" href="<?= get_file('404.css'); ?>">

</head>

<body>

    <?php include_once header; ?>

    <main>
        <section class="main">
            <div class="div-container-padding landing-section">
                <h1>
                    SOMETHING </br> WENT WRONG!
                </h1>

                <p>
                    404 error: Guess the page you are looking for is out of stock! Hope the rest of our wonderful site can help!
                </p>

                <a href="<?= home_path() ?>">Back to homepage</a>
            </div>
        </section>


    </main>


    <?php
    include_once script;
    ?>
</body>

</html>