<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing some PHP</title>
</head>
<body>

<?php for ($i = 0; $i < 11; $i++)
    if ($i % 2 === 0){
        echo "<strong>".$i."</strong>"."<br>";
    }
    else {
        echo $i."<br>";
    }
    ?>

</body>
</html>
