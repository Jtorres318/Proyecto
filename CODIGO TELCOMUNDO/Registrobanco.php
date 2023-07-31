<?php
include 'Controlador/Conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<link href="Public/Css/formulario1.css" rel="stylesheet" type="text/css" />
    <title>Registrar Banco</title>
</head>
<header>
      <nav>
      <a class="ultimos" href="Inicio2Analista.php">Regresar</a>
      </nav>
    </header>
<body>
    <main>
      <h1>REGISTRAR BANCO ASESOR</h1>
      <div class="Login">
    <form action="Bancoasesor.php" method="post">
            
        <div class='field'>
            <input type="number" name="id_usuario" size="40" placeholder="id usuario">
        </div>
        <div class='field'>
            <input type="text" name="banco" size="40" placeholder="banco">
        </div>
        <div class='field'>
            <input type="number" name="cuenta" size="20" placeholder="numero Cuenta">
        </div>
        
        <div class='submit'>
          <button>
            REGISTRAR
          </button>

      </form>
      </div>
    
    
                
                
       
      
 </table>
</body>
</html>