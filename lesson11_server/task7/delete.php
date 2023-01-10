<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        $file = 'todo.json';
        $jsonContent = file_get_contents('todo.json', true);
        $todoList = json_decode($jsonContent, true);

        if ($todoList) {
            unset($todoList[$_POST['todoID']]);
            $updatedTodoList = json_encode($todoList, JSON_PRETTY_PRINT);
            file_put_contents($file, $updatedTodoList);
            echo 'ToDo item was deleted from the list!';
        }
    ?>
    <a href="index.php">Go back!</a>

</body>
</html>