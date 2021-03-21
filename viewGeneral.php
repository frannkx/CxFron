<?php

require_once('modelo/class.conexion.php');
require_once('modelo/class.consultas.php');
require_once('controller/CargarClientes.php');
//require_once('menu.php');

 ?>
<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>Vista General - Orion Global</title>
          <link rel="stylesheet" href="css/style.css">


     </head>
     <body>

          <?php //avatar(); ?>

          <h1>Ver Clientes</h1>

          <?php //menu(); ?>

          <div class="container">
          <div>
               <form method="GET">
                    <input type="text" name="buscar">
                    <input type="submit" name="" value="Buscar">
               </form>
          </div>

          <?php

               if (isset($_GET['buscar'])) {
                    buscar($_GET['buscar']);
               }else {
                    verClientes();
               }
          ?>

          </div>
          <a href="index.php">Ir al home</a>
     </body>
</html>
