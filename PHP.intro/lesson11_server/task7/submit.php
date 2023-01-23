<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form submitted!</title>
</head>
<body>

<?php
    $file = 'todo.json';
    $oldContents = file_get_contents($file);
    $todoList = json_decode($oldContents, true);
    $todoList[] = [
            'todo' => $_POST['todo'],
            'deadline' => $_POST['date']. ' '. $_POST['time'],
            'created' => date_create()->format('Y-m-d H:i')
    ];
    $updatedList = json_encode($todoList, JSON_PRETTY_PRINT);
    file_put_contents($file, $updatedList);

    echo "Form was submitted ";

?>
<a href="index.php">Go back!</a>

</body>
</html>