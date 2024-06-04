<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = trim($_POST['task']);
    if ($task) {
        file_put_contents('tasks.txt', $task . PHP_EOL, FILE_APPEND);
    }
}
header('Location: index.php');
?>