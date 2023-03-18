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

    <style>
        footer {
            margin-top: 350px;
        }
    </style>
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

        @media screen and (max-width:900px) {
            .about-box {
                width: 90%;
                top: 30%;
                padding: 4%;
                right: 5%;
                height: unset;
            }

            .about-box>h2 {
                font-size: 40px;
                letter-spacing: 4px;
            }

            .about-box>p {
                margin: 5% 0 10% 0;
                font-size: 15px;
                line-height: 1.5;
                letter-spacing: 2px;
                opacity: 0.8;
            }
        }
    </style>

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
                    Sustainability & CSR Activities
                </h2>



                <p>
                    Mr. Rajendra Agarwal, a mechanical (power) engineer, understood the magnifying importance of sustainable industrial processes as early as 2006. He set up our in-house power generation boiler plant at Kolkata to produce our own electricity using the byproduct, rice husk. Currently, we have scaled to a 4 MW power generation plant ensuring “waste-to-energy” conversion along with supporting process economics.<br><br>
                    We ensure environmental compliance through our zero-liquid discharge (ZLD) technologies. Our packaging products adhere to the Food Safety and Standards (Packaging and Labeling) Regulations 2011, and BIS.
                    Our machinery and warehousing comply with the industrial energy efficiency standards laid by the Bureau of Energy Efficiency of India, 2018.
                    <!-- Giving Hope and Life to the Abandoned Girl Child of West Bengal.
                    Taking up social responsibility with full heart, Late Shri B.D. Agarwal: the eponym of the B.D. Corporates established a wholesome care facility in 1975 for unfortunate girls abandoned by their parents. The humble cause started with the education, grooming, and meeting of the daily needs of 6 girls. The ashram presently houses 300 girls. The administration’s focus spans their medical, hygienic, and extra-curricular developmental needs. -->
                </p>

                <!-- <a href="#" class="scroll-txt">Scroll</a> -->

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