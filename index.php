<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    function confirmacion() {
        var respuesta = confirm("¿Desea realmente borrar el registro?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }

    }
</script>

<body>
    <form action="php/insertar.php" method="POST">
        <label for="nombre">Nombre: </label><input type="text" name="nombre" id="nombre">
        <label for="apellido">Apellido: </label><input type="text" name="apellido" id="apellido">
        <label for="puesto">Puesto: </label>
        <select name="puesto" id="puesto">
            <option value="Desarrollador">Desarrollador</option>
            <option value="Tester">Tester</option>
        </select>
        <input type="submit" name="registrar" value="registrar">
    </form>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>PUESTO</th>
                <th>ELIMINAR</th>
                <th>EDITAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("php/conexion.php");
            $getmysql = new mysqlconex();
            $getconex = $getmysql->conex();

            $consulta = "SELECT * FROM empleados";
            $resultado = mysqli_query($getconex, $consulta);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila["id"] . "</td>";
                echo "<td>" . $fila["nombre"] . "</td>";
                echo "<td>" . $fila["apellido"] . "</td>";
                echo "<td>" . $fila["puesto"] . "</td>";
                echo "<td>
                        <form action='php/eliminar.php' method='POST'>
                        <input type='hidden' name='id' value='" . $fila["id"] . "'>
                        <input type='hidden' name='nombre' value='" . $fila["nombre"] . "'>
                        <input type='submit' name='eliminar' value='eliminar' onclick='return confirmacion()'>
                        </form>
                    </td>";
                echo "<td>
                    <form action='php/editar.php' method='POST'>
                    <input type='hidden' name='id' value='" . $fila["id"] . "'>
                    <input type='hidden' name='nombre' value='" . $fila["nombre"] . "'>
                    <input type='hidden' name='apellido' value='" . $fila["apellido"] . "'>
                    <input type='hidden' name='puesto' value='" . $fila["puesto"] . "'>
                    <input type='submit' name='editar' value='editar' '>
                    </form>
                </td>";
                echo "</tr>";
            }
            mysqli_close($getconex);
            ?>
        </tbody>
    </table>

</body>

</html>