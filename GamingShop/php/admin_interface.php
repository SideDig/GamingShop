<?php
include("../conexiones/sesion_iniciada.php");

if($_SESSION['rol'] !=2 )
{
  header("location: ../php/index.php");
}
if(isset($_POST['cerrar']))
{
  session_destroy();
  header("location: ../php/index.php");
}

require '../conexiones/conexion.php';
  $db = new Base_de_datos();
  $con = $db->conectar();

$sql=  $con->prepare("SELECT b.id, b.nombre_banner, b.link_banner, b.imagen_banner, c.categoria FROM banners b, categorias c WHERE b.id_categoria=c.id ORDER BY b.id");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxanium">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel=StyleSheet href="../styles/admin.css">
    
    <title>Admin</title>

</head>
<body>
  <header class="header_admin"> 
    <div class="btn-inicio_admin">
      <a href="../php/index.php"><button class="home" name="cerrar">Inicio</button></a>
    </div>
    <div class="logo_admin">
        <strong>Gaming Shop</strong>
        <img src="../img/logo.png" width="40px" height="auto">
    </div>
  </header>
  <hr>
  <div class="crud_banners">
    <h3>Insertar y modifica los banners</h3> 
    <br>
    <a href="../vistas/form_banners.php"><button class="btn-banners" type="button">Insertar banner</button></a> 
    <br>
    <div class="container_table-banners">
  <h4>Baners activos</h4>
  <p>Aqui estan todos los banners que estan activos en la pagina web</p>            
  <table class="table_banners table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre del producto</th>
        <th>Categoria</th>
        <th>Banner del producto</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($resultado as $row){ 
          $nombre_banner = $row['nombre_banner'];  
          $link = $row['link_banner'];
          $img_banner = $row['imagen_banner'];
          $categoria_banner = $row['categoria'];
          $id_banner = $row['id'];
        ?>
      <tr>
        <td><p><?php echo $id_banner ?></p></td>
        <td><p><a href="<?php echo $link ?>"><?php echo $nombre_banner ?></a></p></td>
        <td> <p><?php echo $categoria_banner ?></p> </td>
        <td><img src="<?php echo $img_banner ?>" width="100%" height="auto"></td>
        <td><?php echo "<a href='../conexiones/editar_banner.php?id=$id_banner' ><button class='btn-banners_table' type='button'>Editar</button> </td>"?>
        <td><?php echo "<a href='../conexiones/eliminar_banner.php?id=$id_banner' ><button class='btn-banners_table' type='button'>Eliminar</button> </td>"?>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
  </div>
</body>
</html>