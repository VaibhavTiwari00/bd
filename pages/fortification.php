<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <title>B.D. Corporates || Fortification</title>

    <?php include_once head; ?>



    <!-- THIS PAGE CSS FILES -->
    <link rel="stylesheet" href="<?= get_file('products.css'); ?>">
    <!-- FORTIFICATION CSS -->
    <link rel="stylesheet" href="<?= get_file('fortification.css'); ?>">

    <!-- View Products section css  -->
    <link rel="stylesheet" href="<?= get_file('view_product_show.css'); ?>">


    <style>
        .div-container-padding>h6 {
            font-size: 50px;
            text-align: center;
            padding-bottom: 10px;
        }

        .forti-para {
            font-size: 19px;
            color: var(--txt-gray);
            padding-bottom: 10%;
            z-index: 1;
            margin: 4% 0 0 0;
            letter-spacing: 0.7px;
            line-height: 1.4;
            font-weight: 300;
            color: #fff;
        }

        @media screen and (max-width:900px) {
            .div-container-padding>h6 {
                font-size: 35px;
                text-align: center;
                padding-bottom: 10px;
            }

            .forti-para {
                font-size: 16px;

            }

            .about-box>p {

                font-size: 16px;

            }

            .about-partners {

                height: 530px;

            }
        }
    </style>
</head>

<body>

    <?php include_once header; ?>

    <main>


        <section class="about-partners">

            <img src="./assets/img/benefits-of-wholegrains-1200x628-facebook-1200x628-1.jpg" alt="">
            <div class="about-box">
                <div class="about-box-svg">
                    <img src="./assets/img/schema-bg.png" alt="">
                </div>
                <h2>
                    Fortification
                </h2>


                <p>
                    Healthy food is the right of every citizen. Unfortunately, every 2nd Indian man and woman suffers from anemia and the 3rd child faces stunted growth.
                </p>

                <a href="#product" class="scroll-txt">Scroll</a>

            </div>

        </section>

        <section class="div-container-padding product " id="product" style="margin: 2% 0 0 0 !important;">

            <h6>More About Fortification</h6>





            <p class="forti-para">Fortification is the process of adding FSSAI-prescribed micronutrients (Iron, Folic Acid, Vitamin B12) to commonly consumed staples like rice, wheat, milk, and salt. Fortification of rice offers a sustainable solution to “hidden hunger” as rice is consumed by 65% of the Indian population.
                <br><br> Considering the benefits, the
                Government of India has mandated the supply of fortified rice and wheat through government schemes across the country. We are the trusted partner of the FCI and the West Bengal government for the supply of fortified rice kernels (FRK), fortified wheat, and micronutrient-enriched pre-mixes.<br><br>
                Our facilities are based on international guidelines laid by PATH and GAIN (Global Alliance for Improved Nutrition) which allows us to customize the FRKs as per the client’s requirements.
            </p>


        </section>

    </main>


    <?php
    include_once footer;
    include_once script;
    ?>

    <script src="<?= get_file('about.js'); ?>"></script>
</body>

</html>