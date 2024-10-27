<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreador de tareas</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="task-tracker">
        <h2>Rastreador de tareas</h2>
        <form class="task-input-container" action="/index.php" method="post">
            <input type="text" name="title" class="task-input" placeholder="Escribe tu tarea">
            <input type="submit" value="Crear" class="add-task-btn" />
        </form>

        <ul class="task-list">
            <li class="task-item">
                <span>Tarea</span>
                <div class="task-actions">
                    <a href="" class="delete-btn">🗑️</a>
                    <a href="" class="edit-btn">✏️</a>
                    </form>
                </div>
            </li>
        </ul>
    </div>

</body>
</html>