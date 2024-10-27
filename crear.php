<?php
    require './config/db.php';
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $title = $_POST['title'];

        if($title) {
            $query = "INSERT INTO pruebacrud (title) VALUES ('$title')";
            $result = mysqli_query($db, $query);
        }

        header("location: /index.php");
    }
?>