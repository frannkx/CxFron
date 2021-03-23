<?php

//Variables
$hostDB = $_ENV["WEB_DB_HOST"];
$nombreDB = $_ENV["WEB_DB"];
$usuarioDB = $_ENV["WEB_DB_USER"];
$contrasenyaDB = $_ENV["WEB_DB_PASSWORD"];
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// Prepara SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM general;');
// Ejecuta consulta
$miConsulta->execute();

//Referencia
//https://programadorwebvalencia.com/cursos/php/crud/

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Leer - CRUD PHP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <?php
        require_once('menu.php');
            vermenu();
    ?>
    <p><a class="button" href="new.php">Crear</a></p>
    <table>
        <tr>
            <th>Cuenta Madre</th>
            <th>Razon Social</th>
            <th>RUT / RUC</th>
            <th>Socio Negocio</th>
            <th>Pais</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Sitio Web</th>
            <th>Tamaño</th>
            <th>Actividad Economica</th>
            <th>Cliente Desde</th>
            <th>Sector</th>
            <th>Segmento</th>
            <th>Tipo de Cliente</th>
            <th>Service Manager</th>
            <th>Key Account Manager</th>
            <th>Modificar</th>
            <th>Borrar</th>
        </tr>
    <?php foreach ($miConsulta as $clave => $valor): ?> 
        <tr>
           <td><?= $valor['CUENTA_MADRE']; ?></td>
           <td><?= $valor['RAZON_SOCIAL']; ?></td>
           <td><?= $valor['RUT_RUC']; ?></td>
           <td><?= $valor['SN_HANA']; ?></td>
           <td><?= $valor['PAIS']; ?></td>
           <td><?= $valor['DIRECCION']; ?></td>
           <td><?= $valor['CIUDAD']; ?></td>
           <td><?= $valor['WEB']; ?></td>
           <td><?= $valor['TAMANO']; ?></td>
           <td><?= $valor['ACTIVIDAD_ECONOMICA']; ?></td>
           <td><?= $valor['CLIENTE_DESDE']; ?></td>
           <td><?= $valor['SECTOR']; ?></td>
           <td><?= $valor['SEGMENTO']; ?></td>
           <td><?= $valor['TIPO_CLIENTE']; ?></td>
           <td><?= $valor['SM']; ?></td>
           <td><?= $valor['KAM']; ?></td>
           <!-- Se utilizará más adelante para indicar si se quiere modificar o eliminar el registro -->
           <td><a class="button" href="edit.php?SN_HANA=<?= $valor['SN_HANA'] ?>">Modificar</a></td>
           <td><a class="button" href="delete.php?SN_HANA=<?= $valor['SN_HANA'] ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?>
    </table>
    <a href="index.html" onclick="signOut();">Sign out</a>

    <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
            console.log('User signed out.');
            });
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
