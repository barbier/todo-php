<?php
if (isset($_POST['todo'])) {
    file_put_contents('todo.txt', $_POST['todo'] . "\n", FILE_APPEND);
}

$todos = file('todo.txt');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="todo"/>
        <button type="submit">Submit</button>
        <ul>
            <?php
            foreach ($todos as $todo) {
                echo '<li>' . $todo . '</li>';
            }
            ?>
        </ul>
    </form>
</body>
</html>