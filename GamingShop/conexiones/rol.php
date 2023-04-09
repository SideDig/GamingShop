<?php
session_start();
include("../conexiones/conexion.php");
if(isset($_SESSION['rol'])){  
  switch($_SESSION['rol'])
  {
    case 1:
      header("location: ../php/index.php");
    break;
    case 2:
      header("location: ../php/interfaz_admin.php");
    break;
  }
}
?>