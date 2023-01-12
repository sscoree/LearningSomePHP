<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Delete</title>
</head>
<body>

<?php
    $filePath = './meta/meta_data.json';
    $jsonContent = file_get_contents($filePath, true);
    $metaArray = json_decode($jsonContent, true);
    $itemID = $_POST['metaID'];

    if ($metaArray){
        unlink($metaArray[$itemID]['path']);
        unset($metaArray[$_POST['metaID']]);
        $updatedMetaList = json_encode($metaArray, JSON_PRETTY_PRINT);
        file_put_contents($filePath, $updatedMetaList);
        echo 'Picture was deleted';
    }
?>
<div><a href="gallery.php">Go to gallery</a></div>
<div><a href="index.php">Go to main page</a></div>


</body>
</html>
