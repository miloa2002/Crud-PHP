<?php
    include './config/db.php';
    
    $id = $_GET['id'];
    $title = $_POST['title'];
    
    $query = "UPDATE pruebacrud SET title='$title' WHERE id=$id";
    $result = mysqli_query($db, $query);
    header('location: index.php');
?>