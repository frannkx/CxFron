<?php
// Variables
$hostDB = '127.0.0.1';
$nombreDB = 'cx';
$usuarioDB = 'admin';
$contrasenyaDB = 'dbP4$$w0rd';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// Obtiene codigo del libro a borrar
$SN_HANA = isset($_REQUEST['SN_HANA']) ? $_REQUEST['SN_HANA'] : null;
// Prepara DELETE
$miConsulta = $miPDO->prepare('DELETE FROM general WHERE SN_HANA = :SN_HANA');
// Ejecuta la sentencia SQL
$miConsulta->execute([
    SN_HANA => $SN_HANA
]);
// Redireccionamos al PHP con todos los datos
header('Location: view.php');
?>