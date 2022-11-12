<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$titulo = $_GET['titulo'];
$desc = $_GET['desc'];
$autor = $_GET['autor'];
?>
    <div>
        <form action="sp_editar.php" method="post">
            <table border="1">
                <tr>
                    <td>Ingresar Datos:</td>
                    <td><input type="text" name="id" id="" style="visibility:hidden" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>Titulo:</td>
                    <td><input type="text" name="titulo" id="" value="<?=$titulo?>"></td>
                </tr>
                <tr>
                    <td>Descripcion:</td>
                    <td><input type="text" name="desc" id="" value="<?=$desc?>"></td>
                </tr>
                <tr>
                    <td>Autor:</td>
                    <td><input type="text" name="autor" id="" value="<?=$autor?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>