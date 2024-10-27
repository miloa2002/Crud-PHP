<?php
include './config/db.php';

$id = $_GET['id'];

$query = "SELECT * FROM pruebacrud WHERE id=$id";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
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
        <h2>Edita la tarea <p><?php echo $row['title'] ?></p></h2>
        <form class="task-input-container" action="/update.php?id=<?php echo $row['id'] ?>" method="post">
            <input type="text" name="title" value="<?php echo $row['title'] ?>" class="task-input" placeholder="Escribe tu tarea">
            <input type="submit" value="Editar" class="add-task-btn" />
        </form>
    </div>

</body>
</html>