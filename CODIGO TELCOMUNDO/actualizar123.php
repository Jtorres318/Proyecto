
<?php
if(isset($_POST['actualizar'])){
    include 'Controlador/Conexion.php';

    $registros = mysqli_query($conecta, "UPDATE usuario 
    SET id_usuario =$_REQUEST[Id],nombre ='$_REQUEST[nombres]',
    apellido='$_REQUEST[apellidos]',correo='$_REQUEST[correo]',tel =$_REQUEST[Telefono]
    Where id_usuario=$_REQUEST[Id] ") 
    or die("Problemas en el select:" . mysqli_error($conecta));

    if($registros ==TRUE){
        echo"<script>alert('actualizacion fue correcta');
                    window.location = 'Index.php';    
                </script>
            ";  
    }else{
        echo"<script>alert('actualizacion incorrecta');
                    window.location = 'Index.php';    
                </script>
            ";     
    }


}

?>