<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <title>WHAT WE DO (representation)? </title>

    <?php include_once head; ?>


    <!-- THIS PAGE CSS FILE -->
    <link rel="stylesheet" href="<?= get_file('what-we-do.css'); ?>">
    <!-- View Products section css  -->
    <link rel="stylesheet" href="<?= get_file('view_product_show.css'); ?>">


</head>

<body>

    <?php include_once header; ?>

    <main>
        <section class="main">
            <div class="div-container-padding landing-section">
                <h1>
                    WHAT WE DO <br> (representation)?
                </h1>

                <p>
                    A seamless process with utmost precision
                </p>

                <span>
                    SCROLL
                </span>

                <div class="bottom-layer">

                </div>
            </div>
        </section>

        <!-- Our Services section start -->
        <section class="div-container-padding product" id="product">

            <h6>Our Services</h6>
            <div class="products-child-links">
                 <ul>
                    <li><a href="#">Rice Processing</a></li>
                    <li><a href="#">Floor Processing</a></li>
                    <li><a href="#">Private labeling</a></li>
                    <li><a href="#">Government Tenders</a></li>
                    <li><a href="#">Warehousing</a></li>
                    <li><a href="#">Sugar & Rice Trading</a></li>
                    <li><a href="#">Fortification</a></li>

                </ul>
            </div>


        </section>
        <!-- Our Services section end -->


        <!-- Roadmap Start From here  -->
        <section class="div-container-padding section-roadmap product">

            <h6>A Simple, Iterative Process</h6>
            <ul class="roadmap">
                <li>

                    <div class="roadmap-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                        <h2>PROCUREMENT</h2>
                        <p>
                            WE HAVE A NETWORK OF
                            FARMERS AND BROKERS
                            WHO WORK WITH US ON A
                            PARALLEL PROCUREMENT
                            STRATEGY. THIS STRATEGY
                            HELPS US TO MAINTAIN A
                            LONG TERM AND
                            SUSTAINABLE
                            RELATIONSHIP WITH THE
                            GROWERS.
                            -LOCATION-is chosen
                            keeping in mind the
                            convenience and feasibility
                            of sourcing the best quality
                            raw material
                            -PRIVATE WAREHOUSING
                            CAPACITY - 10,00,000 sq/ft
                        </p>
                    </div>
                </li>
                <li>
                    <div class="roadmap-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                        <h2>PROCESSING</h2>
                        <p>
                            State of the art
                            manufacturing facility with
                            latest technology and
                            machinery spread over …?
                            acres and 7 different facilities
                            - capacity …?
                            - Teams are continuously
                            trained
                        </p>
                    </div>
                </li>
                <li>

                    <div class="roadmap-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                        <h2>QUALITY CHECK</h2>
                        <p>
                            Quality Check
                            4 quality gates integrated in
                            the supply chain to deliver
                            the required quality for our
                            clients. We have an in-house
                            lab to reduce dependency
                            and time to make the
                            required changes
                        </p>
                    </div>
                </li>
                <li>
                    <div class="roadmap-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                        <h2>PACKAGING</h2>
                        <p>
                            Inhouse packaging unit
                            - Inhouse packing material production unit adn printing house
                            Warehousing content will come last
                        </p>
                    </div>
                </li>
                <li>

                    <div class="roadmap-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                        <h2>WAREHOUSING</h2>
                        <p>
                            Inhouse logistics
                            department. - think of some
                            content.
                        </p>
                    </div>
                </li>


                <div class="v-line"></div>

            </ul>

        </section>
        <!-- Roadmap End From here  -->

        <!--contact us strip-->
        <section class="contact-us">

            <h2>
                WANT TO LEARN MORE ABOUT US ?
            </h2>

            <a href="<?= home_path() ?>contact">Contact Us</a>

        </section>










    </main>


    <?php
    include_once footer;
    include_once script;
    ?>

    <script src="<?= get_file('about.js'); ?>"></script>
</body>

</html>