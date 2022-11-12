<?php
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$desc = $_POST['desc'];
$autor = $_POST['autor'];

$conn = mysqli_connect("localhost", "root", "root", "practica_serv");
$sql = "UPDATE books SET titulo='$titulo', descripcion='$desc', autor='$autor' WHERE id LIKE $id";
$rta = mysqli_query($conn, $sql);
if (!$rta) {
    echo "No se actualizo el dato!";
}
else {
    header("Location: index.php");
}
?>