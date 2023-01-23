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
        $jsonContent = file_get_contents('todo.json', true);
        $todoList = json_decode($jsonContent, true);
        if (!$todoList) die('error');
        $id = $_POST['editID'];
        $todoItem = $todoList[$id];
    ?>
<form method="POST" action="edit-submit.php">
    <fieldset>
        <legend>Edit TODO</legend>
        <input type="text" name="todo" value="<?php echo $todoItem['todo']  ?>">
        <input type="hidden" name="editID" value="<?php echo $_POST['editID'] ?>">
        <input type="date" name="date" value="<?php  ?>" disabled>
        <input type="time" name="time" value="<?php  ?>" disabled>
        <input type="submit" value="Update">
    </fieldset>
</form>
</body>
</html>