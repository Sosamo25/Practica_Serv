<?php
$titulo = $_POST['titulo'];
$desc = $_POST['desc'];
$autor = $_POST['autor'];

$conn = mysqli_connect("localhost", "root", "root", "practica_serv");
$sql = "INSERT INTO books (titulo, descripcion, autor) VALUES ('$titulo', '$desc', '$autor')";
$rta = mysqli_query($conn, $sql);
if (!$rta) {
    echo "No se inserto el dato!";
}
else {
    header("Location: index.php");
}
?>