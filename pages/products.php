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
            <!-- <img src="./assets/img/about-us-our-philo.jpg" alt=""> -->
            <img src="./assets/img/home-2.jpeg" alt="">

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
        <!-- <section class="who-they">
            <div class="pra-container">
                <h2>Made by B.D Corporates</h2>
                <p>We are happy to inform that our new facility in the Jebel Ali Free Zone is up and running and capable of providing complicated automation solutions swiftly in order to satisfy regional demands.
                </p>
            </div>

            <p class="parteners-count">
                <strong>4500+</strong><br>
                sq meter facility

            </p>

        </section> -->

        <!-- product section start -->
        <section class="div-container-padding product mb-5" id="product">

            <h6>Our Products</h6>
            <div class="products-child-links">
                <ul>
                    <li><a href="#p-1">Rice</a></li>
                    <li><a href="#p-2">Brown Rice</a></li>
                    <li><a href="#p-3">Rice Flour</a></li>
                    <li><a href="#p-4">Bran</a></li>
                    <li><a href="#p-5">Bran Oil</a></li>
                    <li><a href="#p-6">Fortified Rice</a></li>
                    <li><a href="#p-7">FRK</a></li>
                    <li><a href="#p-8">Aata</a></li>
                    <li><a href="#p-9">Fortified Aata</a></li>
                    <li><a href="#p-10">Maida</a></li>
                    <li><a href="#p-11">Sooji</a></li>
                    <li><a href="#p-12">Bakery All purpose flour</a></li>
                </ul>
            </div>
            <div class="products-child">
                <div class="product-child-grid" id="p-1">
                    <div class="product-child-grid-content">
                        <h2>Rice</h2>
                        <p>We are well-known wholesale suppliers of high-quality parboiled, miniket, swarna, and non-basmati (IR-36 and IR-64) rice. We are also the trusted suppliers for the West Bengal government and the FCI.</p>

                    </div>
                    <div class="product-child-grid-img">
                        <img src="./assets/img/image-000-min.jpg" alt="">
                    </div>
                </div>
                <div class="product-child-grid" id="p-2">
                    <div class="product-child-grid-img">
                        <img src="./assets/img/brown-rice.jpg" alt="">
                    </div>
                    <div class="product-child-grid-content">
                        <h2>Brown Rice</h2>
                        <p>Brown rice is richer in nutrients than traditional white rice. Due to its higher fiber composition, it is helpful in blood sugar and weight management. We are preferred suppliers of brown rice for many reputed health brands.</p>



                    </div>

                </div>
                <div class="product-child-grid" id="p-3">
                    <div class="product-child-grid-content">
                        <h2>Rice Flour</h2>

                        <p>Rice flour serves as a healthy substitute for people with gluten allergies. It is rich in fiber and good for the heart, liver, and bones. We provide bulk quantities of white rice flour as well as a mixture of white and brown rice as per the customer’s need. </p>

                    </div>
                    <div class=" product-child-grid-img">
                        <img src="./assets/img/rice-flour-product.jpg" alt="">
                    </div>
                </div>
                <div class="product-child-grid" id="p-4">
                    <div class="product-child-grid-img">
                        <img src="./assets/img/bran.jpg" alt="">
                    </div>
                    <div class="product-child-grid-content">
                        <h2>Bran</h2>
                        <p>We are one of the leading bran manufacturers in India. Bran is high in protein and fiber and helps regulate cholesterol and obesity. The new, health-conscious India is developing a taste for delicacies made from a bran like bran buns, pancakes, muffins, cookies, etc.

                        </p>



                    </div>

                </div>
                <div class="product-child-grid" id="p-5">
                    <div class="product-child-grid-content">
                        <h2>Bran Oil</h2>

                        <p>We are a major supplier of bran oil which is a healthy substitute for traditional cooking oils. It contains zero trans-fats and high concentrations of antioxidants like oryzanol which is an elixir for the heart. </p>
                    </div>
                    <div class=" product-child-grid-img">
                        <img src="./assets/img/bran-oil.jpg" alt="">
                    </div>
                </div>
                <div class="product-child-grid" id="p-6">
                    <div class="product-child-grid-img">
                        <img src="./assets/img/fortified-rice.jpg" alt="">
                    </div>
                    <div class="product-child-grid-content">
                        <h2>Fortified Rice</h2>
                        <p>With two-thirds of the Indian population consuming rice as their staple food, it provides the best medium to supply essential micronutrients through fortification. We are one of the oldest suppliers of iron, folic acid, and vitamin B12 fortified rice to the government procurement agencies and private food manufacturing industries. </p>



                    </div>

                </div>
                <div class="product-child-grid" id="p-7">
                    <div class="product-child-grid-content">
                        <h2>FORTIFIED RICE KERNELS</h2>

                        <p>Fortified Rice Kernels provide an excellent solution to consuming broken rice along with alleviating nutritional deficiencies in the masses. FRK is produced by milling the broken rice and mixing the flour with micronutrient-enriched pre-mixes, followed by extrusion to reconstitute rice kernels. Our facilities follow international guidelines laid by PATH and GAIN (Global Alliance for Improved Nutrition) which allows us to customize the FRK as per the client’s requirements.
                            We are, also, the trusted partner of the FCI and the West Bengal government for the supply of fortified rice kernels (FRK).
                        </p>
                    </div>
                    <div class=" product-child-grid-img">
                        <img src="./assets/img/rice-kernels.jpg" alt="">
                    </div>
                </div>
                <div class="product-child-grid" id="p-8">
                    <div class="product-child-grid-img">
                        <img src="./assets/img/wheat-flour.jpg" alt="">
                    </div>
                    <div class="product-child-grid-content">
                        <h2>Wheat Flour</h2>
                        <p>We are the pioneer suppliers of best-quality milled wheat flour with 0% maida adulteration. We all love soft and fluffy rotis. Our stringent quality checks, fineness, and high-water absorption capacity ensure authentic taste, aroma, and fluffiness. </p>



                    </div>

                </div>
                <div class="product-child-grid" id="p-9">
                    <div class="product-child-grid-content">
                        <h2>Fortified Wheat Flour</h2>

                        <p>When it comes to health, there shouldn’t be any compromises. To deal with the nutritional deficiency of the major Indian population, we are a leading manufacturer and supplier of 3 micronutrients fortified wheat flour. We offer customized contract manufacturing and private labeling solutions at cost-effective pricing and a hassle-free supply chain.</p>
                    </div>
                    <div class=" product-child-grid-img">
                        <img src="./assets/img/foritfied-wheat-flour.jpg" alt="">
                    </div>
                </div>
                <div class="product-child-grid" id="p-10">
                    <div class="product-child-grid-img">
                        <img src="./assets/img/product-02.jpg" alt="">
                    </div>
                    <div class="product-child-grid-content">
                        <h2>Maida</h2>
                        <p>Maida or refined flour is a must-have for every kitchen. It is a finely milled, refined, and bleached variety of wheat flour. We provide customized maida composition and texture at competitive prices pan India through our integrated supply chains. </p>



                    </div>

                </div>
                <div class="product-child-grid" id="p-11">
                    <div class="product-child-grid-content">
                        <h2>Sooji</h2>

                        <p>As a firm believer in supplying quality, we offer 100% authentic sooji without any added color or preservatives. Our product has high water absorption capacities to make every dish tasty and healthy.</p>
                    </div>
                    <div class=" product-child-grid-img">
                        <img src="./assets/img/sooji.jpg" alt="">
                    </div>
                </div>
                <div class="product-child-grid" id="p-12">
                    <div class="product-child-grid-img">
                        <img src="./assets/img/bakery.jpg" alt="">
                    </div>
                    <div class="product-child-grid-content">
                        <h2>Bakery All-Purpose Flour</h2>
                        <p>We supply high-quality, bleached as well as unbleached all-purpose flour. Bleached flour is used for making crusts, pancakes, quick bread, and waffles while unbleached one is suitable for making pastries, puddings, and a variety of delicious Indian desserts.</p>



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