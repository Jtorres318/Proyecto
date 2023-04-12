
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$conexion = mysqli_connect("localhost:3307","root", "", "Telcomundo") or die("Problemas con la conexión");
$colsulta= mysqli_query($conexion,"insert into comisiones(cod_tarifa,ciudad_com,
comision,paquete_com,servicios_com,estrato_com) 
values('$_REQUEST[cod_tarifa]','$_REQUEST[ciudad_com]',$_REQUEST[comision],'$_REQUEST[paquete_com]',
 '$_REQUEST[servicios_com]','$_REQUEST[estrato_com]')") 
or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);
echo '<script language="javascript">alert("La comision fue registrada");</script>';
?>
</body>
</html>
