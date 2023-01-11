<?php

$error = $_FILES['task_upload']['error'];
if ($error !== UPLOAD_ERR_OK){
    echo 'Error uploading file '. $_FILES['task_upload']['name'];
    die;
}
//var_dump($_FILES['task_upload']['type']);
//die();
$uploadType = $_FILES['task_upload']['type'];
//$wantedTypes = ['jpeg', 'jpg', 'png', 'bmp'];


if ($uploadType === 'image/jpeg' || $uploadType === 'image/jpg' || $uploadType === 'image/png' || $uploadType === 'image/bmp'){
    $uploadedFileName = $_FILES['task_upload']['name'];
    $fileSavePath = './data/'. uniqid().'_'.$uploadedFileName;
    $tempFilePath = $_FILES['task_upload']['tmp_name'];
    move_uploaded_file($tempFilePath, $fileSavePath);
    echo "Your file upload was successful";
} else {
    echo "Upload file type error!";
    die();
}

