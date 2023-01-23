<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $content = $_POST['todo'];
        $todoID = $_POST['editID'];

        $file = 'todo.json';
        $oldContents = file_get_contents($file, true);
        $todoList = json_decode($oldContents, true);
        $todoList[$todoID]['todo'] = $content;
        
        $updatedList = json_encode($todoList, JSON_PRETTY_PRINT);
        file_put_contents($file, $updatedList);

        echo "Form was updated ";

    ?>
    <a href="index.php">Go back!</a>
</body>
</html>