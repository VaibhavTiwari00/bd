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
            <img src="./assets/img/home-1.jpeg" alt="">

            <div class="about-box">
                <div class="about-box-svg">
                    <img src="./assets/img/schema-bg.png" alt="">
                </div>
                <h2>
                    Infrastructure
                </h2>



                <p>
                    Since the 1980s, B.D. Corporates has been delivering value to its clients by favouring quality and timely delivery. It was only possible because of our backward integration in the supply chain.
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

            <h6>Our Facilities</h6>
            <div class="products-child-links">
                <ul>
                    <li><a href="#p-1">Floor mill division</a></li>
                    <li><a href="#p-2">Rice mill division</a></li>
                    <li><a href="#p-3">Packaging Unit</a></li>
                    <li><a href="#p-4">Lab</a></li>
                    <li><a href="#p-5">Cold Storage</a></li>
                </ul>
            </div>

            <div class="products-child">
                <div class="product-child-grid" id="p-1">
                    <div class="product-child-grid-content">
                        <h2>Floor mill division</h2>
                        <p>A Flour Mill with a Capacity of 63,000
                            tonnes per annum (tpa) in Purusottambati, Sugandha village
                            of Hooghly district West Bengal where ‘wheat’ is processed
                            into flor products such as Atta, Maida, Suji, and wheat bran.
                            The Company Has been manufacturing flour products since
                            2004 and with the passage of time thorough consistent
                            supply and timely delivery of products, the company has
                            been able to develop a true & loyal clientele.</p>

                    </div>
                    <div class="product-child-grid-img">
                        <img src="./assets/img/product-01.jpg" alt="">
                    </div>
                </div>
                <div class="product-child-grid" id="p-2">
                    <div class="product-child-grid-img">
                        <img src="./assets/img/product-02.jpg" alt="">
                    </div>
                    <div class="product-child-grid-content">
                        <h2>Rice mill division</h2>
                        <p>A Rice Mill with a Capacity of 92,500
                            tpa is situated in Brunda, Bagnan village in Howrah district of
                            West Bengal. Few of the verities produced by us are parboil,
                            Miniket, Swarna, Brown Rice, and Non-basmati rice IR-36, IR-
                            64. Having state of the art milling facilities with modern
                            machineries producing optimum capacity per day. Healthy
                            relationship with customers and suppliers in one hand and
                            quality, pricing, reliability & Flexibility is the main forte of the
                            company.
                        </p>

                    </div>

                </div>
                <div class="product-child-grid" id="p-3">
                    <div class="product-child-grid-content">
                        <h2>Packaging Unit</h2>

                        <p>A Rice Mill with a Capacity of 92,500
                            tpa is situated in Brunda, Bagnan village in Howrah district of
                            West Bengal. Few of the verities produced by us are parboil,
                            Miniket, Swarna, Brown Rice, and Non-basmati rice IR-36, IR-
                            64. Having state of the art milling facilities with modern
                            machineries producing optimum capacity per day. Healthy
                            relationship with customers and suppliers in one hand and
                            quality, pricing, reliability & Flexibility is the main forte of the
                            company.</p>
                    </div>
                    <div class=" product-child-grid-img">
                        <img src="./assets/img/product-03.jpg" alt="">
                    </div>
                </div>
                <div class="product-child-grid" id="p-4">
                    <div class="product-child-grid-img">
                        <img src="./assets/img/product-02.jpg" alt="">
                    </div>
                    <div class="product-child-grid-content">
                        <h2>Lab</h2>
                        <p>A Rice Mill with a Capacity of 92,500
                            tpa is situated in Brunda, Bagnan village in Howrah district of
                            West Bengal. Few of the verities produced by us are parboil,
                            Miniket, Swarna, Brown Rice, and Non-basmati rice IR-36, IR-
                            64. Having state of the art milling facilities with modern
                            machineries producing optimum capacity per day. Healthy
                            relationship with customers and suppliers in one hand and
                            quality, pricing, reliability & Flexibility is the main forte of the
                            company.
                        </p>

                    </div>

                </div>
                <div class="product-child-grid" id="p-5">
                    <div class="product-child-grid-content">
                        <h2>Cold Storage</h2>

                        <p>A Rice Mill with a Capacity of 92,500
                            tpa is situated in Brunda, Bagnan village in Howrah district of
                            West Bengal. Few of the verities produced by us are parboil,
                            Miniket, Swarna, Brown Rice, and Non-basmati rice IR-36, IR-
                            64. Having state of the art milling facilities with modern
                            machineries producing optimum capacity per day. Healthy
                            relationship with customers and suppliers in one hand and
                            quality, pricing, reliability & Flexibility is the main forte of the
                            company.</p>
                    </div>
                    <div class=" product-child-grid-img">
                        <img src="./assets/img/product-03.jpg" alt="">
                    </div>
                </div>
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