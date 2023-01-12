<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download</title>
</head>
<body>
<?php

$filePath = './meta/meta_data.json';
$jsonContent = file_get_contents($filePath, true);
$metaArray = json_decode($jsonContent, true);
$itemID = $_GET['id'];

$file = $metaArray[$itemID]['path'];
//var_dump($file);
//die();
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Length:'.filesize($file));
readfile($file);

die();
?>
<div><a href="gallery.php">Go to gallery</a></div>
<div><a href="index.php">Go to main page</a></div>
</body>
</html>
