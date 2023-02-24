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

    <style>
        .product-child-grid-content {
            padding: 10% 6% 6% 5%;

        }

        .product-child-grid-content>h2 {
            font-size: 46px;
            margin-bottom: 5%;
            letter-spacing: 4px;
        }



        .product-child-grid-content>ol {
            margin-left: 15px;

        }

        .product-child-grid-content>p,
        .product-child-grid-content>ol>li {

            font-size: 1.125rem;
            line-height: 1.5;
            color: #fff;
            opacity: 0.5;
        }
    </style>
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
                    <li><a href="#p-6">Warehouing</a></li>
                </ul>
            </div>

            <div class="products-child">
                <div class="product-child-grid" id="p-1">
                    <div class="product-child-grid-content">
                        <h2>Floor mill division</h2>
                        <p>Our state-of-the-art flour mill comprises German-imported technology. We have a capacity of processing 1,00,000 tons per annum of flour in various districts of West Bengal. After passing the quality checks, wheat is processed to remove the inner endosperm from the outer bran coat with precision, to avoid its contamination. Our notable product portfolio includes atta, maida, sooji, and wheat bran.
                            We have been in the flour business since 2004 building a loyal clientele owing to our consistent quality and uninterrupted supply chain.
                            <br><br>
                            <b>Our promises:</b>

                            <br>
                            *Best quality
                            <br>
                            *Consistency and timely delivery
                            <br>
                            *24x7 customer support
                            <br>
                            *Customization as per the client’s requirements
                        </p>

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
                        <p>Our sophisticated rice mill with a capacity of 1,50,000 tons per annum is situated at multiple locations in West Bengal. Our prominent supplies include </p>
                        <br>
                        <ol>
                            <li>
                                Parboiled
                            </li>
                            <li>
                                Miniket
                            </li>
                            <li>
                                Swarna
                            </li>
                            <li>
                                Brown
                            </li>
                            <li>
                                5. Non-basmati IR-36 and IR-64
                            </li>
                        </ol>
                        <br>
                        <p>We follow rigorous pre-processing of the incoming paddy to remove contaminants like weeds, straw, soil, etc. before hulling. This ensures the optimum quality of brown rice after de-husking. The separated husk is routed to our in-house power plant. Brown rice is either packed or sent for further processing to produce white rice by removing bran and germ.</p>



                    </div>

                </div>
                <div class="product-child-grid" id="p-3">
                    <div class="product-child-grid-content">
                        <h2>Packaging Unit</h2>

                        <p>The quality packaging of a food product is equally important as processing in preserving the nutritional value and taste. We offer customized and robust in-house packaging options in-line with governmental regulations with the following features</p>
                        <br>
                        <ol>
                            <li>Moisture, microbes, and pests resistant</li>
                            <li>Spillage and excessive heat resistant</li>
                            <li>Safe, economical, and attractive</li>
                            <li>
                                Robust to withstand transport-related abrasions
                            </li>
                        </ol>
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
                        <h2>Quality Assurance Laboratory</h2>
                        <p>The final products undergo dehumidification before packaging to minimize their deterioration related to
                        </p>
                        <br>
                        <ol>
                            <li>Physical conditions like temperature and humidity</li>
                            <li>Physiological agents like respiration and heating</li>
                            <li>Biological agents like microorganisms</li>
                        </ol>
                        <br>
                        <p>
                            The optimum moisture level for grains is approximately 11-12% while for flour is 10-11% at the time of packaging. Our precision analytical in-house laboratories ensure accurate detection of moisture content and temperature of storage to provide optimal shelf life.
                            Further, periodical quality checks are performed on the stored grains/ flour to keep deterioration in control.
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
                <div class="product-child-grid" id="p-6">
                    <div class="product-child-grid-img">
                        <img src="./assets/img/product-02.jpg" alt="">
                    </div>
                    <div class="product-child-grid-content">
                        <h2>Warehousing</h2>
                        <p>At times, the storage requirements may extend up to 1 year. We offer an in-house warehousing facility to our customers to allow them to follow the “Just-in-Time” inventory model. It helps them avoid huge investments and maintain a healthy demand-supply balance. Our in-house lab facilities empower us to take rapid action in the unlikely event of quality failure at the occurrence, saving time, money, and returns.<br><br>
                            Our warehousing facility meets ISO 9001:2008 and FSSAI guidelines for safe storage. The total warehousing area spans 10,00,000 sq. ft. offering a housing capacity of 2, 60, 000 tons of ready-to-transport products
                        </p>



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