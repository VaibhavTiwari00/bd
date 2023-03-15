<?php


function home_path()
{
    return  DOMAIN;
}

function assets()
{
    return  DOMAIN . '/assets';
}

function get_js($fileName = "")
{
    return DOMAIN . '/assets/js/' . $fileName;
}

function get_img($fileName = "")
{
    return DOMAIN . '/assets/img/' . $fileName;
}

function get_css($fileName = "")
{
    return DOMAIN . '/assets/css/' . $fileName;
}


function get_file($file_name)
{
    if ($file_name != '') {

        $brack_file_name = explode('.', $file_name);
        $extension = $brack_file_name[(count($brack_file_name) - 1)];
        $response_link = "";
        switch ($extension) {
            case 'css':
                $response_link = get_css() . $file_name;
                break;
            case 'js':
                $response_link = get_js() . $file_name;
                break;

            case 'jpg':
            case 'jpeg':
            case 'png':
            case 'gif':
                $response_link = get_img() . $file_name;
                break;
        }
        return $response_link;
    } else {
        throw new Exception("function get_file nead a file name");
    }
}
