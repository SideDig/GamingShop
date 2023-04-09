<?php
session_start();
include("../conexiones/rol.php");

if(isset($_POST['iniciar']))
{
  $usuario=$_POST['name_usuario'];
  $contra=$_POST['contraseña'];

  $db = new Base_de_datos();
  $sql = $db->conectar()->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND contraseña = :contra');
  $sql->execute(['usuario' => $usuario, 'contra' => $contra]);
  $row = $sql->fetch(PDO::FETCH_NUM);

  if(!isset($_SESSION['nombredelusuario']))
  {
    $_SESSION['nombredelusuario']=$usuario;
    if($row == true)
    {
      $rol = $row[4];
      $_SESSION['rol']=$rol; 
      switch($_SESSION['rol'])
      {
        case 1:
          header("location: ../php/index.php");
        break;
        case 2:
          header("location: ../php/admin_Interface.php");
        break;
        default:
      }
    }
    else if($row == false)
    {
      echo "<script>alert('usuario no existe');window.location= '../php/login.php' </script>";
      session_destroy();
    }
  }
}
?>