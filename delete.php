<?php 
include './config/db.php';

$id = $_GET['id'];


$query = "DELETE FROM pruebacrud WHERE id=$id";
$result = mysqli_query($db, $query);
header("location: /index.php");

?>