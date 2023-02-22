<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <title>New Site</title>

    <?php include_once head; ?>



    <!-- THIS PAGE CSS FILES -->
    <link rel="stylesheet" href="<?= get_file('products.css'); ?>">


</head>

<body>

    <?php include_once header; ?>

    <main>
        <section class="about-partners">
            <img src="./assets/img/home-4-01.jpeg" alt="">

            <div class="about-box">
                <div class="about-box-svg">
                    <img src="./assets/img/schema-bg.png" alt="">
                </div>
                <h2>
                    sustainability
                </h2>



                <p>
                    At B.D. Corporate, we make all efforts to adopt more sustainable ways of conducting our business activities. Our dependency on coal for electricity is only 20%, and the rest comes from rice husks. no grid electricity
                </p>

                <a href="#" class="scroll-txt">Scroll</a>

            </div>

        </section>



        <!-- news section start -->
        <!-- <section class="div-container-padding news">
            <div class="new-header">
                <h3>
                    OUR LATEST NEWS
                </h3>

                <a href="#">ALL NEWS</a>
            </div>


            <div class="new-item-container">
                <div class="item-news" style="background-image: url('./assets/img/about-news-1.jpeg')">
                    <div class=" news-details">
                        <span>Decembre 31, 2021</span>
                        <p>Acme follows the new UAE working week.</p>
                    </div>
                </div>

                <div class="item-news" style="background-image: url('./assets/img/about-news-2.png')">
                    <div class="news-details">
                        <span>Decembre 31, 2021</span>
                        <p>Acme follows the new UAE working week.</p>
                    </div>
                </div>

            </div>

        </section> -->
        <!-- news section end -->
    </main>


    <?php
    include_once footer;
    include_once script;
    ?>

    <script src="<?= get_file('about.js'); ?>"></script>
</body>

</html>