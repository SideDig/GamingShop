<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxanium">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel=StyleSheet href="../styles/admin.css">
    <title>Admin</title>

</head>
<body>
<div class="container_form-banners">
  <h3>Ingresa los datos</h3>
  <p>Formulario para que se ingresen los banners que se colocaran en un carusel en el home</p>
  
  <form method="POST" action="../conexiones/conexion_banners.php" enctype="multipart/form-data">

      <label for="text">Nombre del producto:</label>
      <input type="text" class="form-nombre" id="nombre"  placeholder="Nombre del producto" name="nombre">
      <br>

      <label for="link">Link del producto</label>
      <input type="url" class="form-link" id="link" placeholder="link del producto" name="link">
      <br>

      <label for="imagen_banner">ingresa el banner:</label>
      <input type="file" class="form-file" id="file" name="file">
      <br>

      <label for="categorias">coloca la categoria:</label>
      <select id="categorias" name="categorias">
        <option value="1">inicio</option>
        <option value="2">Xbox series X/S</option>
        <option value="3">PS5</option>
        <option value="4">Nintendo switch</option>
        <option value="5">PC</option>
        <option value="6">Antiguas generaciones</option>
      </select>
      <br>

    <button type="submit" name="enviar" class="btn-subir-banners">Enviar</button>
  </form>
</div>
</body>
</html>