<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <title>Sustainability & CSR Activities</title>

    <?php include_once head; ?>



    <!-- THIS PAGE CSS FILES -->
    <link rel="stylesheet" href="<?= get_file('products.css'); ?>">

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

            <img src="./assets/img/home-4-01.jpeg" alt=" Sustainability & CSR Activities">
            <div class="about-box">
                <div class="about-box-svg">
                    <img src="./assets/img/schema-bg.png" alt=" Sustainability & CSR Activities">
                </div>
                <h2>
                    Sustainability & CSR Activities
                </h2>


                <p>
                    Our Directors understood the magnifying importance of sustainable industrial processes as early as 2006. They set up our in-house power generation boiler plant at Kolkata to produce our own electricity using the byproduct, rice husk.
                </p>

                <a href="#product" class="scroll-txt">Scroll</a>

            </div>

        </section>

        <section class="div-container-padding product " id="product" style="margin: 2% 0 0 0 !important;">

            <h6>More About Sustainability & CSR Activities</h6>





            <p class="forti-para">Currently, we have scaled to a 4 MW power generation plant ensuring “waste-to-energy” conversion along with supporting process economics.<br><br>
                We ensure environmental compliance through our zero-liquid discharge (ZLD) technologies. Our packaging products adhere to the Food Safety and Standards (Packaging and Labeling) Regulations 2011, and BIS.
                Our machinery and warehousing comply with the industrial energy efficiency standards laid by the Bureau of Energy Efficiency of India, 2018.
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