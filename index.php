<?php

include './config/db.php';

$query = "SELECT * FROM pruebacrud";
$result = mysqli_query($db, $query);

?>

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
        <form class="task-input-container" action="/crear.php" method="post">
            <input type="text" name="title" class="task-input" placeholder="Escribe tu tarea">
            <input type="submit" value="Crear" class="add-task-btn" />
        </form>

        <ul class="task-list">
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <li class="task-item">
                <span><?php echo $row['title']; ?></span>
                <div class="task-actions">
                    <a href="/edit.php?id=<?php echo $row['id'] ?>" class="edit-btn">✏️</a>
                    <a href="/delete.php?id=<?php echo $row['id'] ?>" class="delete-btn">🗑️</a>
                    </form>
                </div>
            </li>
            <?php }; ?>
        </ul>
    </div>

</body>
</html>