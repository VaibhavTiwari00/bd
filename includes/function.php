<?php
function admin_root($root = "")
{
    if ($root != "") {
        $root_array = explode("\\", $root);
    } else {
        $root_array = explode("\\", __DIR__);
    }

    $admin_root_index = array_search('admin', $root_array, true);
    $back_dir_count = count($root_array) - $admin_root_index;
    $admin_root = "";
    for ($i = 0; $i < $back_dir_count; $i++) {
        $admin_root .= "../";
    }
    return $admin_root;
}

function getRequestData()
{
    // geting data from request
    $req_data =  stripslashes(file_get_contents("php://input"));

    // convert json to php array
    $req_data_array = json_decode($req_data, true);

    // return 
    return $req_data_array;
}

function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 25; $i++) {
        $randstring .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randstring;
}

function uploadFile($file_name, $fun = null)
{


    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    // dir name where uploaded
    $target_dir = "../../img/";

    // file type
    $imageFileType = strtolower(pathinfo($file_name["name"], PATHINFO_EXTENSION));

    //  new file name
    $target_file_name =  RandomString() . '.' . $imageFileType;


    // complete path with new file name
    $target_file = $target_dir . $target_file_name;

    $check = getimagesize($file_name["tmp_name"]);
    if ($check == false) {
        if ($fun != null) {
            $fun("Failed to get file size");
        }
        return false;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        if ($fun != null) {
            $fun("File already exists");
        }
        return false;
    }

    // Check file size
    if ($file_name["size"] > 5000000) {
        if ($fun != null) {
            $fun("File is to large");
        }
        return false;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        if ($fun != null) {
            $fun("please upload only jpg, png, jpeg or gif");
        }
        return false;
    }

    if (move_uploaded_file($file_name["tmp_name"], $target_file)) {
        return $target_file_name;
    } else {
        if ($fun != null) {
            $fun("Fail to move file from you to remote.");
        }
        return false;
    }
}

// This function generate a unique tour id qudination of data base
function generate_unique_id($table_name, $column_name, $id_length)
{

    $db = new Db();

    if ($id_length > 2) {

        $lowest = 1;
        $highest = 9;

        for ($i = 1; $i < $id_length; $i++) {
            $lowest .= 0;
            $highest .= 9;
        }

        $generated_id = rand($lowest, $highest);


        $check_generated_id = "SELECT * FROM '$table_name' WHERE `$column_name` = '$generated_id' ";


        if ($db->fetch_data($check_generated_id)) {

            generate_unique_id($table_name, $column_name, $id_length);
        } else {
            return $generated_id;
        }
    } else {

        trigger_error('Id Lenght must be grater then 2 ', E_USER_WARNING);
    }
}

// get $_POST and secure incoming data 
function senitize_array($array)
{
    $return_array = [];
    global $con;
    if ($con) {
        if (count($array) > 0) {
            $keys = array_keys($array);
            for ($i = 0; $i < count($keys); $i++) {
                $key_val = $array[$keys[$i]];
                if (gettype($key_val) != 'array') {
                    $value = mysqli_escape_string($con, $key_val);
                    $return_array[$keys[$i]] = $value;
                } else {
                    $return_array[$keys[$i]] = senitize_array($key_val);
                }
            }
        }
    } else {
        trigger_error('Error: while connecting to database', E_USER_WARNING);
    }
    return $return_array;
}

function _post($key, $required = false, $error = null)
{
    if (isset($_POST[$key])) {
        global $con;
        return mysqli_escape_string($con, $_POST[$key]);
    } else {
        if ($required) {
            thowResponse(false, $error);
        } else {
            return '';
        }
    }
}

function _get($key, $required = false, $error = null)
{
    if (isset($_GET[$key])) {
        global $con;
        return mysqli_escape_string($con, $_GET[$key]);
    } else {
        if ($required) {
            thowResponse(false, $error);
        } else {
            return '';
        }
    }
}

function thowResponse($result = false, $message = '', $data = null)
{
    $response = [];
    $response['status'] = $result;
    $response['message'] = $message;

    if ($data != null) {
        $response['data'] = $data;
    }
    echo json_encode($response);
    exit;
}

function calculateDistance($lat1, $long1, $lat2, $long2, $unit = "kilometers")
{
    $theta = $long1 - $long2;
    $miles = (sin(deg2rad($lat1))) * sin(deg2rad($lat2)) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
    $miles = acos($miles);
    $miles = rad2deg($miles);


    $result['miles'] = $miles * 60 * 1.1515;
    $result['feet'] = $result['miles'] * 5280;
    $result['yards'] = $result['feet'] / 3;
    $result['kilometers'] = $result['miles'] * 1.609344;
    $result['meters'] = $result['kilometers'] * 1000;


    switch ($unit) {
        case 'miles':
            $result = $result['miles'];
            break;
        case 'feet':
            $result = $result['feet'];
            break;
        case 'yards':
            $result = $result['yards'];
            break;
        case 'kilometers':
            $result = $result['kilometers'];
            break;
        case 'meters':
            $result = $result['meters'];
            break;
    }

    return $result;
}
