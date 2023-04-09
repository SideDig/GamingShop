<?php
session_start();

if(isset($_SESSION['nombredelusuario']))
{
?>
  <head>
  <link rel="stylesheet" href="../styles/styles.css">
  </head>
    <div>
      <form method="POST">
      <input class="cerrar" type="submit" value="Cerrar Sesion" name="cerrar">
      </input>
      </form>
    </div>
    
  <?php

  $usuarioingresado=$_SESSION['nombredelusuario'];
  
  echo "<div class='btn-name_usuario'>
  <a href='../php/admin_interface.php'>
  $usuarioingresado
  </a>
  </div>";
}
else
{
  echo "<div class='btn-login'>
  <a href='../php/login.php'>
  Iniciar Sesion
  </a>
  </div>";
    
  echo"<div class='btn-login'>
  <a href='../php/registro.php'>
  Registrar
  </a>
  </div>";
}

if(isset($_POST['cerrar']))
{
  session_destroy();
}
?>