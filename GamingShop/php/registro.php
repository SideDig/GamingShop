<?php
include("../conexiones/sesion_iniciada.php");
require '../conexiones/conexion.php';
$db = new Base_de_datos();
$con = $db->conectar();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Inicia sesion</title>
    <link rel='stylesheet' href='../styles/style_login.css'>
    <link rel="stylesheet" href="../styles/styles.css">
    <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxanium">
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>

</head>
<body>
<header class="contenedor_header">
    <?php
        include_once("../vistas/header.php");
        el_header();
        ?>
    
   <div class="categorias">
        <nav>
            <a href="#" >Inicio</a>      
            <a href="../vistas/xbox.php" >Xbox series X/S</a>
            <a href="../vistas/ps.php" >PS5</a>
            <a href="../vistas/ns.php" >Nintendo switch</a>
            <a href="../vistas/pc.php" >PC</a>
            <a href="../vistas/a_g.php" >Antiguas generaciones</a>     
         </nav>
    </div>

</header>

<section class="section_registro">
    <div class="contenedor_registro">
        <div class='titulo_registro'> 
            <h1>Registro</h1>
        </div>
          <form action="../conexiones/conexion_registro.php" class="form_login" method="post"> 
            <input type="text" name="usuario" placeholder="Nombre de usuario" required="required" oninvalid="this.setCustomValidity('Ingresa tu nombre de usuario')"oninput="this.setCustomValidity('')">
            <br>
            <input type="correo" name="correo" placeholder="Correo electronico" required="required" oninvalid="this.setCustomValidity('Ingresa tu correo electronico')"oninput="this.setCustomValidity('')">
            <br>
            <input type="password" name="contraseña" placeholder="Contraseña" required="required" oninvalid="this.setCustomValidity('Ingresa tu contraseña')"oninput="this.setCustomValidity('')"> 
            <br>
            <input type="password" name="repetir_contraseña" placeholder="Repetir contraseña" required="required" oninvalid="this.setCustomValidity('vuelve a repetir la contraseña')" oninput="this.setCustomValidity('')"> 
            <br>
            <button type="submit" name="iniciar_sesion" class="iniciar_sesion" ><span>Ingresar</span></button>
         </form>
         <?php 
            include("../conexiones/conexion_registro.php");
         ?>
    </div>
</section>

</body>
</html>
