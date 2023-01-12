<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
</head>
<body>

<div><a href="index.php">Go to main page</a></div>
<br>
<?php
    $metaFile = file_get_contents('./meta/meta_data.json', true);
    $metaDataArray = json_decode($metaFile, true);
    if ($metaDataArray){
        foreach ($metaDataArray as $key => $value){
            echo '<div>'.'Filename: '.$value['name'].'<br>'.
                'Size: '.$value['size'].' bytes'.'<br>'.
                'Uploaded: '.$value['date'].'<br>'.
                '<a href="download.php?id='.$key.'">Download</a>'.
                '<form style="display: inline" method="POST" action="delete.php">
                        <input type="submit" name="delete" value="Delete" />
                        <input type="hidden" name="metaID" value="'.$key.'">
                 </form><br>'.
                '<img src="'.$value['path'].'" width="250px" alt="some photo">'.
                '</div><br>';
        }
    }

?>



</body>
</html>