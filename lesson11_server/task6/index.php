<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action="submit.php">
    <fieldset>
        <legend>New TODO</legend>
    <input type="text" name="todo">
        <input type="date" name="date">
        <input type="time" name="time">
    <input type="submit">
    </fieldset>
</form>
<div>
    <fieldset>
        <legend>TODOs</legend>
        <?php
        $jsonContent = file_get_contents('todo.json', true);
        $todoList = json_decode($jsonContent, true);
            if ($todoList) {
                foreach ($todoList as $key => $item){
                    echo $item['todo'].
                        ', created at: '.
                        $item['created'].
                        ', due date: '.
                        $item['deadline'].
                        '<form style="display: inline" method="POST" action="delete.php">
                        <input type="submit" name="delete" value="Delete" />
                        <input type="hidden" name="todoID" value="'.$key.'">
                        </form><br>';
                }
            }
        ?>
    </fieldset>
</div>

</body>
</html>
