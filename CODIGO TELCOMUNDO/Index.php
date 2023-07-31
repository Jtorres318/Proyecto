<?php 
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: Inicio.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="Public/Css/Login.css">
  </head>
  <body>-
    <div class="Login">
      <img src="Public/Img/t.png" class="avatar" alt="Avatar Image">
      <h1>TELCOMUNDO</h1>
      <form method=POST ACTION=iniciosesion.php>
        <label for="username">Id usuario</label>
        <input type="text" placeholder="Ingresa tu id"name="ID">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingresa tu contraseña"name="contraseña">
        <input type="submit" name="botton">
        <a href="Olvideclave01.php">Olvidaste la contraseña</a><br>
        <a href="UsuarioRegistro.html">Registrate</a>
      </form>
    </div>
  </body>

  
</html>