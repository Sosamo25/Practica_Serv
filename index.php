<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>

    <div>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Titulo</td>
                <td>Descripcion</td>
                <td>Autor</td>
                <td>Opciones</td>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "root", "practica_serv");
                $sql = "SELECT id, titulo, descripcion, autor FROM books ORDER BY id";
                $rta = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td>
                        <a href="editar.php?
                        id=<?php echo $mostrar['0'] ?> &
                        titulo= <?php echo $mostrar['1'] ?> &
                        desc= <?php echo $mostrar['2'] ?> &
                        autor= <?php echo $mostrar['3'] ?>
                        ">Editar</a>
                        <a href="sp_eliminar.php? id=<?php echo $mostrar['0'] ?>">Borrar</a>
                    </td> 
                </tr>
                <?php
                }
                ?>
        </table>
    </div>
</body>
</html>