<?php
$id = $_GET['id'];


$conn = mysqli_connect("localhost", "root", "root", "practica_serv");
$sql = "DELETE FROM books WHERE id LIKE $id";
$rta = mysqli_query($conn, $sql);
if (!$rta) {
    echo "No se elimino el dato!";
}
else {
    header("Location: index.php");
}
?>