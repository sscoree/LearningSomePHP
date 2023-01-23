<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            text-align: center;
            margin-top: 10px;
        }
        img {
            margin-top: 10px;
        }
        input {
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div><a class="btn btn-warning" href="index.php">Go to main page</a></div>
<br>
<?php
    $metaFile = file_get_contents('./meta/meta_data.json', true);
    $metaDataArray = json_decode($metaFile, true);
    if ($metaDataArray){
        foreach ($metaDataArray as $key => $value){
            echo '<div>'.'Filename: '.$value['name'].'<br>'.
                'Size: '.$value['size'].' bytes'.'<br>'.
                'Uploaded: '.$value['date'].'<br>'.
                '<a class="btn btn-primary" href="download.php?id='.$key.'">Download</a>'.
                '<form style="display: inline" method="POST" action="delete.php">
                        <input class="btn btn-danger" type="submit" name="delete" value="Delete" />
                        <input type="hidden" name="metaID" value="'.$key.'">
                 </form><br>'.
                '<img src="'.$value['path'].'" width="250px" alt="some photo">'.
                '</div><br>';
        }
    }

?>



</body>
</html>