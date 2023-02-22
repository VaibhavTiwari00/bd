<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <title>Contact Us - BD (group of industry)</title>

    <?php include_once head; ?>


    <!-- THIS PAGE CSS FILE -->
    <link rel="stylesheet" href="<?= get_file('contact.css'); ?>">
    <!-- THIS PAGE CSS FILES -->
    <link rel="stylesheet" href="<?= get_file('products.css'); ?>">
    <style>
        .about-box {
            width: 45%;
            height: unset;
            background-color: var(--bg-yellow);
            position: absolute;
            top: 30%;
            border-radius: 20px;
            right: 7%;
            padding: 1%;
            color: #262626;
            overflow: hidden;
        }
    </style>
</head>

<body>

    <?php include_once header; ?>

    <main>
        <section class="main">
            <div class="div-container-padding landing-section">
                <h1>
                    Contact Us
                </h1>


                <span>
                    SCROLL
                </span>
                <div class="about-box contact-info">
                    <div class="info-item">
                        <div class="info-1">
                            <h3 class="company-name">ACME INTRALOG FZCO</h3>
                            <address>
                                Plot S40125, Jebel Ali Free Zone South, Jebel Ali, P.O. Box 3636,
                                Dubai, United Arab Emirates
                            </address>
                        </div>

                        <ul class="info-2">
                            <li>
                                <a href="#">
                                    <i class="fas fa-map-marker-alt"></i>
                                    view on google map
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-phone"></i>
                                    +971 4 3769 000
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fas fa-fax"></i>
                                    +971 4 3769 000
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fas fa-at"></i>
                                    info@bd.com
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="info-item" style="border-right:0px;">
                        <div class=" info-1">
                            <h3 class="company-name">ACME INTRALOG FZCO</h3>
                            <address>
                                Plot S40125, Jebel Ali Free Zone South, Jebel Ali, P.O. Box 3636,
                                Dubai, United Arab Emirates
                            </address>
                        </div>

                        <ul class="info-2">
                            <li>
                                <a href="#">
                                    <i class="fas fa-map-marker-alt"></i>
                                    view on google map
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-phone"></i>
                                    +971 4 3769 000
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fas fa-fax"></i>
                                    +971 4 3769 000
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fas fa-at"></i>
                                    info@bd.com
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- <div class="contact-info">
            <div class="info-item">
                <div class="info-1">
                    <h3 class="company-name">ACME INTRALOG FZCO</h3>
                    <address>
                        Plot S40125, Jebel Ali Free Zone South, Jebel Ali, P.O. Box 3636,
                        Dubai, United Arab Emirates
                    </address>
                </div>

                <ul class="info-2">
                    <li>
                        <a href="#">
                            <i class="fas fa-map-marker-alt"></i>
                            view on google map
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa-solid fa-phone"></i>
                            +971 4 3769 000
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-fax"></i>
                            +971 4 3769 000
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-at"></i>
                            info@bd.com
                        </a>
                    </li>
                </ul>
            </div>

            <div class="info-item">
                <div class="info-1">
                    <h3 class="company-name">ACME INTRALOG FZCO</h3>
                    <address>
                        Plot S40125, Jebel Ali Free Zone South, Jebel Ali, P.O. Box 3636,
                        Dubai, United Arab Emirates
                    </address>
                </div>

                <ul class="info-2">
                    <li>
                        <a href="#">
                            <i class="fas fa-map-marker-alt"></i>
                            view on google map
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa-solid fa-phone"></i>
                            +971 4 3769 000
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-fax"></i>
                            +971 4 3769 000
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-at"></i>
                            info@bd.com
                        </a>
                    </li>
                </ul>
            </div>



        </div> -->
        <!-- <section class=" div-container-padding contact-form">
            <h4>get in touch</h4>

            <div class="form-subject">
                <span class="input-hint">
                    Subject
                </span>

                <div class="subject-selector">
                    <div class="option-item" id="subject-1">
                        <div class="bullet">

                        </div>
                        <p>PRODUCTS</p>

                    </div>
                    <div class="option-item" id="subject-2">
                        <div class="bullet">

                        </div>
                        <p>JOBS INQUIRIES</p>

                    </div>

                    <div class="option-item" id="subject-3">
                        <div class="bullet">

                        </div>
                        <p> OTHER</p>

                    </div>



                </div>


            </div>

            <div class="form">
                <span class="input-hint" style="margin-top:0;">
                    Name*
                </span>
                <div class="input-container">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                </div>

                <span class="input-hint">
                    Address*
                </span>
                <textarea type="text" placeholder="Address"></textarea>

                <span class="input-hint">
                    Contact*
                </span>
                <div class="input-container">
                    <input type="text" placeholder="E-Mail">
                    <input type="text" placeholder="Phone">
                </div>
                <span class="input-hint">
                    Message*
                </span>
                <textarea type="text" placeholder="Message"></textarea>

                <button> SEND </button>


            </div>

        </section> -->

        <!-- <section class="contact-us">

            <h2>
                WANT TO BECOME A PART OF THE ACME TEAM ?
            </h2>

            <a href="#">JOB OPPORTUNITIES</a>

        </section> -->




    </main>


    <?php
    include_once footer;
    include_once script;
    ?>

    <script src="<?= get_file('contact.js'); ?>"></script>
</body>

</html>