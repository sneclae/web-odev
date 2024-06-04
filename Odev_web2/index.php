<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List Uygulaması</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="todo-list">
            <h2>Yapılacaklar</h2>
            <form id="taskForm" action="add_task.php" method="POST">
                <input type="text" id="taskInput" name="task" placeholder="Yeni görev ekle" required>
                <button type="submit">Ekle</button>
            </form>
            <ul id="tasks">
                <?php
                $tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES);
                foreach ($tasks as $task) {
                    echo "<li>$task <span class='complete'>🔘</span></li>";
                }
                ?>
            </ul>
        </div>
        <div class="completed-list">
            <h2>Yapılmış Olanlar</h2>
            <ul id="completedTasks">
                <?php
                $completedTasks = file('completed_tasks.txt', FILE_IGNORE_NEW_LINES);
                foreach ($completedTasks as $task) {
                    echo "<li class='completed'>$task</li>";
                }
                ?>
            </ul>
        </div>
    </div>
    

    <script src="scripts.js"></script>
</body>
</html>