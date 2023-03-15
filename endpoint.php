<?php

$URL_END_POINTS = array(
    "home" => "pages/home2.php",
    "about" => "pages/about.php",
    "404" => "pages/error/404.php",
    "partners" => "pages/partners.php",
    "contact" => "pages/contact.php",
    "what-we-do" => "pages/what-we-do.php",
    "products" => "pages/products.php",
    "sustainability" => "pages/sustainability.php",
    "fortification" => "pages/fortification.php",
    "infrastructure" => "pages/infrastructure.php",
);

$DATA_URL_END_POINTS = [];




function find_page_in_dir($dir, $page)
{
    return is_dir($dir . $page);
}


// this function remove last slash from url
function clean_url($url)
{
    $url_array = explode("/", $url);

    if ($url_array[count($url_array) - 1] == "") {
        $new_url = "";
        for ($i = 0; $i < count($url_array) - 1; $i++) {
            if ($i == count($url_array) - 2) {
                $new_url .= $url_array[$i];
            } else {
                $new_url .= $url_array[$i] . "/";
            }
        }
        return $new_url;
    } else {
        return $url;
    }
}
