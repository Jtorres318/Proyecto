
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" href="Public/Css/formulario1.css">
    <title>REGISTRAR BONO O DESCUENTO</title>
</head>
<body>
<header>
      <nav>
        <a class="ultimos" href="Inicio2Analista.php">Regresar</a>
      </nav>
    </header>
    <main>
      <h1>REGISTRAR BONOS Y DESCUENTOS</h1>
      <div class="Login">
        <form action="Bonos_descuentos_formulario.php" method="post">
            
            <div class='field'>
                <input type="number" name="id_bono" size="10" placeholder="Id bono">
            </div>
            <div class='field'>
                <input type="number" name="id_usuario" size="10" placeholder="Id Usuario">
            </div>
            <div class='field'>
                <input type="text" name="Tipo_bono" size="20" placeholder="Tipo de bono">
            </div>
            <div class='field'>
                <input type="text" name="Tipo_descuento" size="20" placeholder="Tipo de descuento">
            </div>
            <div class='field'>
                <input type="number" name="valor" size="10" placeholder="valor">
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