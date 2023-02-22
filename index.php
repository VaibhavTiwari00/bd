<?php

// include endpoint 
include_once 'endpoint.php';

// include header files for page views
include_once 'init.php';


// proce
if (isset($_GET['page'])) {

    $slug = $_GET['page'];

    // now remove the slash from slug 
    $slug = clean_url($slug);

    //find slug in simple endpoints 

    if (array_key_exists($slug, $URL_END_POINTS)) {
        $VIEW_PATH = $URL_END_POINTS[$slug];
        $display_page_path = (file_exists($VIEW_PATH)) ? $VIEW_PATH : 'pages/error/404.php';
    } else {
        // $display_page_path = 'pages/error/404.php';
        header('Location:' . home_path() . '404');
    }
} else {
    $display_page_path = "pages/home.php";
}





// echo $display_page_path;
include_once $display_page_path;
