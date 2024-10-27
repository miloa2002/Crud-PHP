<?php
$db = mysqli_connect('localhost', 'root', 'root', 'crud');

if(!$db) {
    echo 'No se pudo conectar';
    exit;
}

?>