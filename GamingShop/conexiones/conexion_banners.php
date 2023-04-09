<?php
include("../conexiones/conexion.php");
if (isset($_POST['enviar'])) {
    
    $nombre = ($_POST['nombre']);
    $link = ($_POST['link']);
    $name_imagen = $_FILES['file']['name'];
    $image_data=$_FILES['file']['tmp_name'];//contiene el archivo
    $ruta_img="banners";
    $categoria = ($_POST['categorias']);

    $ruta="../".$ruta_img."/".$name_imagen;
    move_uploaded_file($image_data,$ruta);

    $consulta = "INSERT INTO banners(nombre_banner, link_banner, imagen_banner, id_categoria) VALUES ('$nombre','$link','$ruta','$categoria')";
    $resultado = mysqli_query($conex,$consulta);  

    if($resultado)
    {
      
      header("location: ../php/admin_interface.php");

    }else{
        echo "<script>alert('Nose se enviaron los datos');window.location= '../vistas/form_banners.php' </script>";
    }
}
?>