<?php


function redirect ($url) {

    if ('/login.php' == $url) {
        if (!empty($_POST['name'])) {
            $_SESSION['old']['name'] = $_POST['name'];
        }

        if (!empty($_POST['password'])) {
            $_SESSION['old']['password'] = $_POST['password'];
        }
    }
    header('location: '.$url);
    exit;
}

function uploadImage ($image) {

    $valid_extensions = array("jpg", "gif", "png");
    $extension = pathinfo($image['name'],PATHINFO_EXTENSION);
    if (in_array($extension, $valid_extensions)) {
        $filename = uniqid().'.'.$extension;
        move_uploaded_file($image['tmp_name'], ROOT_PATH.'/upload/'.$filename );
        $path = ROOT_PATH.'/upload/';
        resizeImage($extension,$path,$filename);

        return $filename;
    } else {
        $_SESSION['errors'][] = 'Недопустимый тип файла';
        redirect('list.php');
    }

    return false;
}

function resizeImage ($type, $path , $filename, $size = 100){

    switch ($type){
        case 'jpg':
            $img = imagecreatefromjpeg($path.$filename);
            break;
        case 'gif':
            $img = imagecreatefromgif($path.$filename);
            break;
        case 'png':
            $img = imagecreatefrompng($path.$filename);
            break;
        default:
            return false;
    }

    $width = imagesx($img);
    $height = imagesy($img);

    if ($width > $height) {
        $percent = round($width/$size,0);
    } else {
        $percent = round($height/$size,3);
    }

    $new_width = $width / $percent;
    $new_height = $height / $percent;
    $new_img= imagecreatetruecolor($new_width, $new_height);
    imagecopyresized($new_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    return imagejpeg($new_img, $path.'min_'.$filename);
}