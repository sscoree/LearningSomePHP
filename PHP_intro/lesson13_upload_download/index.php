<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            text-align: center;
            margin-top: 10px;
        }
        button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input class="form-control" type="file" name="task_upload">
    <button class="btn btn-primary" type="submit">Upload</button>
</form>
<a class="btn btn-warning" href="gallery.php">To gallery</a>
</body>
</html>
