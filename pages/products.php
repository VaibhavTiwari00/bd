<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <title>New Site</title>

    <?php include_once head; ?>



    <!-- THIS PAGE CSS FILE -->
    <link rel="stylesheet" href="<?= get_file('products.css'); ?>">
    <!-- View Products section css  -->
    <link rel="stylesheet" href="<?= get_file('view_product_show.css'); ?>">


</head>

<body>

    <?php include_once header; ?>

    <main>
        <section class="about-partners">
            <img src="./assets/img/about-us-our-philo.jpg" alt="">

            <div class="about-box">
                <div class="about-box-svg">
                    <img src="./assets/img/schema-bg.png" alt="">
                </div>
                <h2>
                    Our Products
                </h2>



                <p>
                    In the United Arab Emirates, ACME develops, manufactures, and puts into operation intralogistics systems such pallet, tote, and case conveyors, pallet stacker cranes, miniload cranes, as well as specially designed devices.
                </p>

                <a href="#product" class="scroll-txt">Scroll</a>

            </div>

        </section>
        <section class="who-they">
            <div class="pra-container">
                <h2>Made by B.D Corporates</h2>
                <p>We are happy to inform that our new facility in the Jebel Ali Free Zone is up and running and capable of providing complicated automation solutions swiftly in order to satisfy regional demands.
                </p>
            </div>

            <p class="parteners-count">
                <strong>4500+</strong><br>
                sq meter facility

            </p>

        </section>

        <!-- product section start -->
        <section class="div-container-padding product mb-5" id="product">

            <h6>Our Products</h6>
            <div class="products-child-links">
                <ul>
                    <li><a href="#">Rice</a></li>
                    <li><a href="#">Brown Rice</a></li>
                    <li><a href="#">Rice Flour</a></li>
                    <li><a href="#">Bran</a></li>
                    <li><a href="#">Bran Oil</a></li>
                    <li><a href="#">Fortified Rice</a></li>
                    <li><a href="#">FRK</a></li>
                    <li><a href="#">Aata</a></li>
                    <li><a href="#">Fortified Aata</a></li>
                    <li><a href="#">Maida</a></li>
                    <li><a href="#">Sooji</a></li>
                    <li><a href="#">Bakery All purpose flour</a></li>
                </ul>
            </div>


        </section>
        <!-- product section end -->

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