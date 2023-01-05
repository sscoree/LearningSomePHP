<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="submit.php">
    <fieldset>
        <legend>New TODO</legend>
    <input type="text" name="todo">
    <input type="submit">
    </fieldset>
</form>
<div>
    <fieldset>
        <legend>TODOs</legend>
        <?php
        $space = file_get_contents('todo.json', true);
        $json = json_decode($space, true);
            if ($json) {
                foreach ($json as $item){
                    echo $item.'<br>';
                }
            }
        ?>
    </fieldset>
</div>

</body>
</html>
