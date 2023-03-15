<header class="header">

    <a href="<?= home_path() ?>">
        <img src="<?= get_img('logo-white.png'); ?>" alt="Brand Logo" class="brand-name">
    </a>
    <div class="menu-container" id="menu-container">

        <div class="header-select" style="opacity:0;">
            <a href="#">Category</a>
            <i class="fa-solid fa-angle-down"></i>

            <ul class="header-select-dropdown">
                <li> <a href="https://google.com"> About </a> </li>
                <li> <a href="https://google.com"> Our Partner </a> </li>
                <li> <a href="https://google.com"> Contacts </a> </li>
                <li> <a href="https://google.com"> News </a> </li>
                <li> <a href="https://google.com"> Blogs </a> </li>
            </ul>
        </div>

        <ul class="header-right">
            <li> <a href="<?= home_path() ?>about"> About </a> </li>
            <li> <a href="<?= home_path() ?>what-we-do"> What We Do </a> </li>
            <li> <a href="<?= home_path() ?>contact"> Contacts </a> </li>
            <!-- <li> <a href="<?= home_path() ?>partners"> Our Partner </a> </li> -->

            <li> <a target="_blank" href="https://accounts.zoho.com/signin?servicename=VirtualOffice&signupurl=https://www.zoho.com/workplace/pricing.html"> EMPLOYEES LOG IN </a></li>


        </ul>

    </div>

    <button class="header-main-menu-toggle" id="menu-toggle-btn">
        <div class="bar"></div>
    </button>


</header>