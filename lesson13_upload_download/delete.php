<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        echo 'ToDo item was deleted from the list!';
    }
?>
<div><a href="gallery.php">Go to gallery</a></div>
<div><a href="index.php">Go to main page</a></div>


</body>
</html>
