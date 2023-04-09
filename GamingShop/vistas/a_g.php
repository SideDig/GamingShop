<?php
include("../conexiones/sesion_iniciada.php");
require '../conexiones/conexion.php';
$db = new Base_de_datos();
$con = $db->conectar();
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <script defer src="../js/Carousel.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxanium">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <title>Gaming Shop</title>
</head>
<body>
    <header class="contenedor_header">
    <?php
        include_once("../vistas/header.php");
        el_header();
        ?>
    
   <div class="categorias">
        <nav>
            <a href="../php/index.php" >Inicio</a>      
            <a href="../vistas/xbox.php" >Xbox series X/S</a>
            <a href="../vistas/ps.php" >PS5</a>
            <a href="../vistas/ns.php" >Nintendo switch</a>
            <a href="../vistas/pc.php" >PC</a>
            <a href="#" >Antiguas generaciones</a>       
         </nav>
    </div>

    </header>
    <?php
        include_once("../vistas/banners.php");
        banners();
        ?>
        <h2 class="titulo_cards">Juegos para consolas de antiguas generaciones</h2>
        <?php
        include_once("../vistas/cards.php");
        ?>
        <?php
        include_once("../vistas/footer.php");
        ?>
</body>
</html>