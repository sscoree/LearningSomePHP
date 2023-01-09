<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="edit-submit.php">
    <fieldset>
        <legend>Edit TODO</legend>
        <input type="text" name="todo" value="<?php  ?>">
        <input type="date" name="date" value="<?php  ?>" disabled>
        <input type="time" name="time" value="<?php  ?>" disabled>
        <input type="submit">
    </fieldset>
</form>
</body>
</html>
