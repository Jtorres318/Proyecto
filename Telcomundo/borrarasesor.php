<!DOCTYPE html>
<html>
<head>
<title>elimiar asesor </title>
</head>
<body>
<?php

$conexion = mysqli_connect("localhost", "root", "","telcomundo") or
die("Problemas con la conexión");
$query=mysqli_query($conexion , "select identificacion  from  registro_asesor
where identificacion=$_REQUEST[identificacion]") or
die("Problemas en el select:" .
mysqli_error($conexion));
if ($query = mysqli_fetch_array($query)) {
mysqli_query($conexion, "delete from registro_asesor
where identificacion =$_REQUEST[identificacion]") or
die("Problemas en el select:" .
mysqli_error($conexion));
echo "Se efectuó el borrado del asesor con el
identificacion digitado.";
} else {
echo "No existe un asesor con ese identificacion lo
siento intente con otro.";
}
mysqli_close($conexion);
?>
</body>
</html>