<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">



    <title>B.D. Corporates</title>

    <?php include_once head; ?>


    <!-- THIS PAGE CSS FILE -->
    <link rel="stylesheet" href="<?= get_file('index.css'); ?>">

</head>

<body>

    <?php include_once header; ?>

    <main>

        <div class="parent-slider">

            <div class="slider">

                <div class="slider-item-container">
                    <div class="slide-panal"></div>

                </div>

            </div>
            <div class="slider ">

                <div class="slider-img slider-img-active-1">
                    <h2>
                        Trusted German Technologies to Serve You the Best Quality with Precision
                    </h2>
                </div>


                <div class="slider-item-container ">
                    <div class="slide-panal"></div>
                    <div class="slider-items">
                        <img src="./assets/img/Infrastructure-icon.png" alt="" srcset="">
                        <a href="<?= home_path() ?>infrastructure"> INFRASTRUCTURE</a>
                    </div>
                </div>

            </div>

            <div class="slider">
                <div class="slider-img ">
                    <h2>Products Designed for a Healthy You!</h2>
                </div>
                <div class="slider-item-container">
                    <div class="slide-panal"></div>
                    <div class="slider-items ">
                        <img src="./assets/img/product-icon.png" alt="" srcset="">
                        <a href="<?= home_path() ?>products"> PRODUCTS</a>
                    </div>
                </div>
            </div>

            <div class="slider">
                <div class="slider-img">
                    <h2>Let’s Fortify and Fight the Hidden Hunger</h2>
                </div>
                <div class="slider-item-container">
                    <div class="slide-panal sp-3"></div>
                    <div class="slider-items">
                        <img src="./assets/img/team-icon.png" alt="" srcset="">
                        <a href="<?= home_path() ?>fortification">FORTIFICATION
                        </a>
                    </div>
                </div>
            </div>

            <div class="slider">
                <div class="slider-img ">
                    <h2>We Are Here For You</h2>
                </div>
                <div class="slider-item-container">
                    <div class="slide-panal"></div>
                    <div class="slider-items">
                        <img src="./assets/img/sustainability-icon.png" alt="" srcset="">
                        <a href="<?= home_path() ?>sustainability">Sustainability</a>
                    </div>
                </div>
            </div>
            <div class="slider">

                <div class="slider-item-container">
                    <div class="slide-panal"></div>

                </div>

            </div>

        </div>

    </main>


    <?php
    include_once script;
    ?>

    <script src="<?= get_file('home.js'); ?>"></script>
</body>

</html>