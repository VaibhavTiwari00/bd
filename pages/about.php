<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <title>New Site</title>

    <?php include_once head; ?>


    <!-- THIS PAGE CSS FILE -->
    <link rel="stylesheet" href="<?= get_file('about.css'); ?>">

</head>

<body>

    <?php include_once header; ?>

    <main>
        <section class="main">
            <div class="div-container-padding landing-section">
                <h1>
                    WE HELP YOU <br>KEEP COMMITMENTS <br> TO YOUR VALUED CUSTOMERS

                </h1>

                <!-- <p>
                    Our goal is to be the leading regional supplier of industrial and intralogistics automation solutions and components. We try to pave the way for the future.
                </p> -->

                <span>
                    SCROLL
                </span>

                <div class="bottom-layer">

                </div>
            </div>
        </section>

        <section class="div-container-padding section-2">
            <div class="section-2-1">
                <img src="./assets/img/about-us-our-value.jpg" class="out-value-img" />

                <div class="section-2-1-text">

                    <h4>About US</h4>
                    <h2>A BIT MORE ABOUT US</h2>
                    <p>
                        Sri Rajendra founded B.D. Corporates Pvt. Ltd. in 1980.
                        Agarwal and Sri Mahendra Agarwal, belonging to the same family
                        who put their first step into food manufacturing and processing
                        industry by capitalising on unbound agriculture growth and natural
                        geographical resources of Bengal. Since "rice" and "flour" are the most commonly used words in India,
                        main staple food, with Bengal occupying a prominent position in terms of
                        Rice Production: They stepped into this industry with zeal and valour to
                        make a mark of their own.
                    </p>

                </div>
            </div>

            <div class="section-2-2">

                <h4>OUR VALUES</h4>
                <p>
                    We support regional retail brands by our offerings and our deliverables. With our integrated supply chain business model we are able to conduct our business activities in the most efficient and cost effective way.

                    <!-- With a strong set of principles and the ability to analyse the present with
                    the past market scenario and foreseeing the future helped in making
                    decision. -->
                </p>


                <!-- <iframe width="908" height="510" src="https://www.youtube.com/embed/PwM4VuJsRr8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

            </div>

        </section>


        <section class="section-3">


            <div class="section-3-1">

                <h4>OUR PHILOSOPHY</h4>
                <h2>WE BELIEVE IN SUPPLY CHAIN INTEGRATION</h2>

            </div>
            <img src="./assets/img/about-us-our-philo.jpg" alt="">
            <p>
                We believe that by bringing major supply chain processes in-house, we can reduce our reliance on external factors and deliver to our clients more efficiently and effectively. 


            </p>

        </section>

        <!-- <section class="about-partners">
            <img src="./assets/img/about-partners.jpg" alt="">

            <div class="about-box">

                <h2>
                    WE REPRESENT MARKET LEADERS
                </h2>

                <div class="brand-list">

                    <img src="./assets/img/alfanumatic-dark.png" alt="">
                    <img src="./assets/img/axelent-01-copy-500x441.png" alt="">
                    <img src="./assets/img/dotec-dark.png" alt="">
                </div>

                <p>
                    Our partners are market leaders in pneumatics, vacuum, automation sensors, safety equipment, conveyors as well as smart intralogistics solutions.
                </p>

                <a href="#">DISCOVER OUR PARTNERS</a>

            </div>

        </section> -->


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
    </main>


    <?php
    include_once footer;
    include_once script;
    ?>

    <script src="<?= get_file('about.js'); ?>"></script>
</body>

</html>