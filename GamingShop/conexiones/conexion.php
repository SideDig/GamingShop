<?php
$conex = mysqli_connect("localhost","root","","gaming_shop"); 
if(!$conex)
  {
    die("No hay conexion: ".mysqli_connect_error());
  }

  class Base_de_datos
  {
      private $hostname = "localhost";
      private $username="root";
      private $password ="";
      private $charset = "utf8mb4";
  
      function conectar()
      {
          try{
          $conexion = "mysql:host=" . $this->hostname . "; dbname=gaming_shop; charset=" . $this->charset;
          $options = [
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_EMULATE_PREPARES => false
          ];
  
          $pdo = new PDO($conexion, $this->username, $this->password, $options);
  
          return $pdo;
      } catch(PDOException $e){
          echo 'Error en conexion: '.$e->getMessage();
          exit;
      }
      }
  }
?>