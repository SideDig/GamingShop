<?php
 function el_header()
 {
?>
<div class="contendedor_titulo">
        <div class="titulo">
           <a  href="../php/index.php">
            <strong>Gaming Shop</strong>
            <img src="../img/logo.png" width="40px" height="auto">
            </a> 
        </div>
        <form class="form_busqueda" >
            <input class="buscador" placeholder="¿Buscas algo?" type="search">
            <button class="buscar" type="submit">Buscar</button>
        </form>
        
   </div>
    <div class="carro_compra">
          <a href="#">
            <img src="../img/shopping-cart.png" width="30px" height="30px"> 
          </a>
          <p>$0.00</p>
        </div>
   <?php
  }
?>