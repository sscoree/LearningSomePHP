<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
    <?php

    $error = $_FILES['task_upload']['error'];
    if ($error !== UPLOAD_ERR_OK){
        echo 'Error uploading file '. $_FILES['task_upload']['name'];
        die;
    }

    $uploadType = $_FILES['task_upload']['type'];
    $uploadSize = $_FILES['task_upload']['size'];
    $maxSize = 1000000;
    $acceptable = [
        'image/jpeg',
        'image/jpg',
        'image/png',
        'image/bmp'
    ];

    if (in_array($uploadType, $acceptable) && $maxSize > $uploadSize){
        $uploadedFileName = $_FILES['task_upload']['name'];
        $fileSavePath = './data/'. uniqid().'_'.$uploadedFileName;
        $tempFilePath = $_FILES['task_upload']['tmp_name'];
        move_uploaded_file($tempFilePath, $fileSavePath);

        $metaDataFile = './meta/meta_data.json';
        $metaDataJson = file_get_contents($metaDataFile);
        $data = json_decode($metaDataJson, true);
        $data[] = [
            'name' => $_FILES['task_upload']['name'],
            'size' => $_FILES['task_upload']['size'],
            'path' => $fileSavePath,
            'date' => date_create()->format('Y-m-d H:i')
        ];
        $serializedData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($metaDataFile, $serializedData);

        echo "Your file upload was successful";
    } else {
        echo "Upload file type or size error!";
        die();
    } ?>
    <br>
    <div><a href="index.php">Go back!</a></div>
    <div><a href="gallery.php">To gallery</a></div>
</body>
</html>

