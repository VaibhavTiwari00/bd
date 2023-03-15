<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <title>New Site</title>

    <?php include_once head; ?>


    <!-- THIS PAGE CSS FILE -->
    <link rel="stylesheet" href="<?= get_file('partners.css'); ?>">

</head>

<body>

    <?php include_once header; ?>

    <main>
        <section class="main">
            <div class="div-container-padding landing-section">
                <h1>
                    MEET OUR PARTNERS
                </h1>

                <p>
                    Since 1975, ACME has worked with market leaders in industrial automation components as well as intralogistics systems. ACME helps bring products and solutions from these partners to the region.
                </p>

                <span>
                    SCROLL
                </span>

            </div>
        </section>

        <section class="who-they">
            <div class="pra-container">
                <h2>Who they are</h2>
                <p>We have partnered with industry leaders to bring a wide range of industrial automation components, fluid sealing products, warehouse automation and intralogistics solutions to the region.

                </p>
            </div>

            <p class="parteners-count">
                <strong>11+</strong><br>
                Industry Partners

            </p>

        </section>

        <section class="parteners">
            <h2>OUR PARTNERS</h2>


            <div class="parteners-item-container">

                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/alfanumatic-white.png" alt="" style="width: 54%;">

                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/axelent-02-copy-500x441.png" alt="">
                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/dotec-white.png" alt="">
                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>

                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/habasit-white.png" alt="">
                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/kardex-02-500x127.png" alt="" style="width: 66%;">
                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/leuze-03-1600x407-7-500x127.png" alt="" style="width: 76%;">
                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/metalwork-white.png" alt="">
                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>


                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/optimus-white.png" alt="">
                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/schmalz-white.png" alt="">
                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/talustech-white.png" alt="" style="width: 25%;">
                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>


                <div class="parteners-item">
                    <div class="item">
                        <img src="https://acme-world.com/static/admin/wp-content/uploads/teknostore-white.png" alt="" style="width: 46%;">
                        <a href="#">More Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </section>

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