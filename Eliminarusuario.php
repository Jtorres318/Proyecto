<html>

<head>
    <title>Usuario borrado</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost","root","","telcomundo") or 
        die("Problemas con la conexion");
    $registros = mysqli_query($conexion, "select id_usuario from Usuario where
    id_usuario =$_REQUEST[id_usuario]") or 
        die("Problemas en el select:".
        mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
      mysqli_query($conexion, "delete from Usuario
      where id_usuario=$_REQUEST[id_usuario]") or 
          die("Problemas en el select:".
              mysqli_error($conexion));
      echo "Se efectuo el borrado del usuario  con el
codigo digitado.";
    } else {
       echo "No existe un usuario  con ese codigo lo 
siento intente con otro.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>