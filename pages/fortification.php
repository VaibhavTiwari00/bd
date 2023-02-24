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
    <!-- FORTIFICATION CSS -->
    <link rel="stylesheet" href="<?= get_file('fortification.css'); ?>">

    <style>
        .about-box {
            width: 50%;
            height: 100%;
            background-color: var(--bg-yellow);
            position: absolute;
            top: 27%;
            right: 10%;
            padding: 5% 4% 8% 4%;
            color: #262626;
            overflow: hidden;
        }

        .about-box>p {
            margin: 5% 0 10% 0;
            font-size: 18px;
            line-height: 1.5;
            letter-spacing: 2px;
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <?php include_once header; ?>

    <main style="margin-bottom:50vh">
        <section class="about-partners">
            <img src="./assets/img/home-3.jpeg" alt="">

            <div class="about-box">
                <div class="about-box-svg">
                    <img src="./assets/img/schema-bg.png" alt="">
                </div>
                <h2>
                    Fortification
                </h2>



                <p>
                    Healthy food is the right of every citizen. Unfortunately, every 2nd Indian man and woman suffers from anemia and the 3rd child faces stunted growth. Fortification is the process of adding FSSAI-prescribed micronutrients (Iron, Folic Acid, Vitamin B12) to commonly consumed staples like rice, wheat, milk, and salt. Fortification of rice offers a sustainable solution to “hidden hunger” as rice is consumed by 65% of the Indian population.
                    Considering the benefits, the GoI has mandated the supply of fortified rice and wheat through government schemes across the country. We are the trusted partner of the FCI and the West Bengal government for the supply of fortified rice kernels (FRK), fortified wheat, and micronutrient-enriched pre-mixes.
                    Our facilities are based on international guidelines laid by PATH and GAIN (Global Alliance for Improved Nutrition) which allows us to customize the FRKs as per the client’s requirements.

                </p>

                <a href="#product" class="scroll-txt">Scroll</a>

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