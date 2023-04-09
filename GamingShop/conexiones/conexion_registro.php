<?php
if (isset($_POST['iniciar_sesion'])){
include("../conexiones/conexion.php");
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['correo']) >= 1) {
	    $usuario = trim($_POST['usuario']);
	    $correo = trim($_POST['correo']);
	    $contraseña = $_POST['contraseña'];
        $contraseña2 = $_POST['repetir_contraseña'];
            if ($contraseña === $contraseña2){

                $consulta = "INSERT INTO usuarios(usuario, correo, contraseña) VALUES ('$usuario','$correo','$contraseña')";
            }else{    
                //AQUI SE VAN A REALIZAR PRUEBAS DE ALERTAAAAAS
                echo "<script>alert('Tus contraseñas no coinciden');window.location= '../php/registro.php' </script>";
                //echo '<div style="padding: 20px; background-color: #f44336; color: white;">
                 //<strong>Error:</strong> Ha ocurrido un error
                //</div>';

            } 

        $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
            echo "<script>alert('Ya puedes iniciar sesion :)');window.location= '../php/index.php' </script>";


            
	    } else {
            echo "<script>alert('Registro no exitoso');</script>";
            //echo '<div class="alertas" style="padding: 20px; background-color: #f44336; color: white;">
                // <strong>Error:</strong> Ha ocurrido un error
                //</div>';
	    }
    } 
}

?>