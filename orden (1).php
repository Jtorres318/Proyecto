<html>
<head>
  <title>Orden De Trabajo</title>
</head>
<body>
  <?php
      $conexion = mysqli_connect("localhost","root","","telcomundo") or
      die("Problemas con la conexion");
      $registros = mysqli_query($conexion, "select * from historico where orden_trabajo=$_REQUEST[codigo]") or
      die("Problemas en el select:" . mysqli_error($conexion));
      if ($reg = mysqli_fetch_array($registros)) {
        echo "servicios".$reg['servicios']."<br>";
        echo "paquete".$reg['paquete']."<br>";
        echo "estrato".$reg['estrato']."<br>";
        echo "ciudad".$reg['ciudad']."<br>";
        echo "orden_trabjo:".$reg['orden_trabajo']."<br>";
        echo "pago".$reg['pago']."<br>";
        echo "fecha_venta".$reg['fecha_venta']."<br>";
        switch ($reg['orden_trabajo']) {
        }
        } else {
        echo "No existe una orden con ese codigo.";
        }
        mysqli_close($conexion);
        ?>
        </body>
        </html>