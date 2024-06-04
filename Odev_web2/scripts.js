document.addEventListener('DOMContentLoaded', () => {
    const taskForm = document.getElementById('taskForm');
    const taskInput = document.getElementById('taskInput');
    const tasks = document.getElementById('tasks');
    const completedTasks = document.getElementById('completedTasks');
    const motivationalQuotes = document.getElementById('motivationalQuotes');

    taskForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const taskText = taskInput.value.trim();
        if (taskText !== '') {
            addTask(taskText);
            taskInput.value = '';
        }
    });

    function addTask(taskText) {
        const taskItem = document.createElement('li');
        const bubble = document.createElement('span');
        bubble.textContent = '🔘';
        bubble.style.cursor = 'pointer';
        bubble.addEventListener('click', () => {
            taskItem.classList.add('completed');
            completedTasks.appendChild(taskItem);
            taskItem.removeChild(bubble);
        });

        taskItem.textContent = taskText;
        taskItem.prepend(bubble);
        tasks.appendChild(taskItem);
    }

    // Motivation quote management
    motivationalQuotes.addEventListener('dblclick', (e) => {
        if (e.target.tagName === 'LI') {
            e.target.remove();
        }
    });
});