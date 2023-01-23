<?php

$filePath = './meta/meta_data.json';
$jsonContent = file_get_contents($filePath, true);
$metaArray = json_decode($jsonContent, true);
$itemID = $_GET['id'];

$file = $metaArray[$itemID]['path'];

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Length:'.filesize($file));
readfile($file);

die();

