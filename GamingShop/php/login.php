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

<section class="section_login">
    <div class="contenedor_login">
        <div class='titulo_login'> 
        <h1>Iniciar sesion</h1>
        </div>
         <form class="form_login" method="POST" action="../conexiones/conexion_login.php">
         <input name="name_usuario" type="text" placeholder="Nombre de usuario" required>
         <br>
         <input name="contraseña" type="password" placeholder="Contraseña" required> 
         <br>
         <button type="submit" name="iniciar" class="iniciar_sesion">
         <span>Ingresar</span>
         </button>
         </form>
        </div>
    </div>
</section>

</body>
</html>