
<?php
$conexion = mysqli_connect("localhost","root", "", "telcomundo") or die("Problemas con la conexión");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="05Registroventas.css">
    <title>Registrar Ventas</title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "",
"telcomundo") or
die("Problemas con la conexión");
$registros = mysqli_query ($conexion, "select orden_trabajo,'serivicios',paquete,estrato, ciudad,carrusel,fecha_venta,estrato,legalizacion_venta from informe_ventas")or 
      die("Problemas en el select:" . mysqli_error($conexion));
while ($reg = mysqli_fetch_array($registros)){

echo "orden_trabajo:" . $reg['orden_trabajo'] . "<br>";
echo "serivicio". $reg['servicios'] . "<br>";
echo "paquete" . $reg['paquete'] . "<br>";
echo "estrato" . $reg['estrato'] . "<br>";
echo "ciudad:" . $reg['ciudad'] . "<br>";
echo "carrusel:" . $reg['carrusel'] . "<br>";
echo "fecha_venta:" . $reg['fecha_venta'] . "<br>";
echo "legalizacion_venta:" . $reg['legalizacion_venta'] . "<br>";
echo "<br>";
echo "<hr>";
}
mysqli_close($conexion);
?>
<body>

    <h2>Jesus David Gomez Amortegui</h2>
    <div class="menu">
        <a href="02inicio.html">Regresar</a>
    </div>
    <div class="contenedor">
        <input type="text" placeholder="Buscar Venta">
        <a class="btn1" href="">Buscar</a>
    </div>
        <table>
                <tr>
                    <td>ORDEN DE TRABAJO</td>
                    <td>SERVICIOS</td> 
                    <td>PAQUETES</td>
                    <td>ESTRATO</td>
                    <td>CIUDAD</td>
                    <td>CARRUSEL</td>
                    <td>FECHA_VENTA</td>
                    <td>LEGALIZACION_VENTA</td>
                </tr>
                
         <?php
        $consulta ='select * from informe_ventas';
        $resultado= mysqli_query($conexion,$consulta);

        while($fila = mysqli_fetch_assoc($resultado)) {
       ?>
        <tr>

        
            <td><?php echo $fila['orden_trabajo']?></td>
            <td> <?php echo $fila['servicios']?></td>
            <td><?php echo $fila['paquete']?></td>
            <td> <?php echo $fila['estrato']?></td>
            <td><?php echo $fila['ciudad']?></td>
            <td> <?php echo $fila['carrusel']?></td>
            <td><?php echo $fila['fecha_venta']?></td>
            <td> <?php echo $fila['legalizacion_venta']?></td>
 
        <?php
        }
       ?>
      
 </table>
</body>

</body>
</html>