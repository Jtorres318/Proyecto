<html>

<head>
    <title>Usuario borrado</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost","root","","telcomundo") or 
        die("Problemas con la conexion");
    $registros = mysqli_query($conexion, "select orden_trabajo from Informe_ventas where
    orden_trabajo =$_REQUEST[orden_trabajo]") or 
        die("Problemas en el select:".
        mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
      mysqli_query($conexion, "delete from Informe_ventas
      where orden_trabajo=$_REQUEST[orden_trabajo]") or 
          die("Problemas en el select:".
              mysqli_error($conexion));
      echo "Se efectuo el borrado la orden de trabajo con el
codigo digitado.";
    } else {
       echo "No existe una orden de trabajo con ese codigo lo 
siento intente con otro.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>