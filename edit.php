<?php
// Variables
$hostDB = '127.0.0.1';
$nombreDB = 'cx';
$usuarioDB = 'admin';
$contrasenyaDB = 'dbP4$$w0rd';
$CUENTA_MADRE = isset($_REQUEST['CUENTA_MADRE']) ? $_REQUEST['CUENTA_MADRE'] : null;
$RAZON_SOCIAL = isset($_REQUEST['RAZON_SOCIAL']) ? $_REQUEST['RAZON_SOCIAL'] : null;
$RUT_RUC = isset($_REQUEST['RUT_RUC']) ? $_REQUEST['RUT_RUC'] : null;
$SN_HANA = isset($_REQUEST['SN_HANA']) ? $_REQUEST['SN_HANA'] : null;
$PAIS = isset($_REQUEST['PAIS']) ? $_REQUEST['PAIS'] : null;
$DIRECCION = isset($_REQUEST['DIRECCION']) ? $_REQUEST['DIRECCION'] : null;
$CIUDAD = isset($_REQUEST['CIUDAD']) ? $_REQUEST['CIUDAD'] : null;
$WEB = isset($_REQUEST['WEB']) ? $_REQUEST['WEB'] : null;
$TAMANO = isset($_REQUEST['TAMANO']) ? $_REQUEST['TAMANO'] : null;
$ACTIVIDAD_ECONOMICA = isset($_REQUEST['ACTIVIDAD_ECONOMICA']) ? $_REQUEST['ACTIVIDAD_ECONOMICA'] : null;
$CLIENTE_DESDE = isset($_REQUEST['CLIENTE_DESDE']) ? $_REQUEST['CLIENTE_DESDE'] : null;
$SECTOR = isset($_REQUEST['SECTOR']) ? $_REQUEST['SECTOR'] : null;
$SEGMENTO = isset($_REQUEST['SEGMENTO']) ? $_REQUEST['SEGMENTO'] : null;
$TIPO_CLIENTE = isset($_REQUEST['TIPO_CLIENTE']) ? $_REQUEST['TIPO_CLIENTE'] : null;
$SM = isset($_REQUEST['SM']) ? $_REQUEST['SM'] : null;
$KAM = isset($_REQUEST['KAM']) ? $_REQUEST['KAM'] : null;

// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

// Comprobamso si recibimos datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Prepara UPDATE
    $miUpdate = $miPDO->prepare('UPDATE general SET CUENTA_MADRE = :CUENTA_MADRE, RAZON_SOCIAL = :RAZON_SOCIAL, RUT_RUC = :RUT_RUC, PAIS = :PAIS, DIRECCION = :DIRECCION, CIUDAD = :CIUDAD, WEB = :WEB, TAMANO = :TAMANO, ACTIVIDAD_ECONOMICA = :ACTIVIDAD_ECONOMICA, CLIENTE_DESDE = :CLIENTE_DESDE, SECTOR = :SECTOR, SEGMENTO = :SEGMENTO, TIPO_CLIENTE = :TIPO_CLIENTE, SM = :SM, KAM = :KAM WHERE SN_HANA = :SN_HANA');
    // Ejecuta UPDATE con los datos
    $miUpdate->execute(
        [
            'CUENTA_MADRE' => $CUENTA_MADRE,
            'RAZON_SOCIAL' => $RAZON_SOCIAL,
            'RUT_RUC' => $RUT_RUC,
            'SN_HANA' => $SN_HANA,
            'PAIS' => $PAIS,
            'DIRECCION' => $DIRECCION,
            'CIUDAD' => $CIUDAD,
            'WEB' => $WEB,
            'TAMANO' => $TAMANO,
            'ACTIVIDAD_ECONOMICA' => $ACTIVIDAD_ECONOMICA,
            'CLIENTE_DESDE' => $CLIENTE_DESDE,
            'SECTOR' => $SECTOR,
            'SEGMENTO' => $SEGMENTO,
            'TIPO_CLIENTE' => $TIPO_CLIENTE,
            'SM' => $SM,
            'KAM' => $KAM
        ]
    );
    // Redireccionamos a Leer
    header('Location: view.php');
} else {
    // Prepara SELECT
    $miConsulta = $miPDO->prepare('SELECT * FROM general WHERE SN_HANA = :SN_HANA;');
    // Ejecuta consulta
    $miConsulta->execute(
        [
            'SN_HANA' => $SN_HANA
        ]
    );
}

// Obtiene un resultado
$cliente = $miConsulta->fetch();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar - CRUD PHP</title>
    <link href="bitnami.css" media="all" rel="Stylesheet" type="text/css" /> 
    <link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
        require_once('menu.php');
            vermenu();
    ?>
    <form method="post">
        <p>
            <label for="CUENTA_MADRE">CUENTA_MADRE</label>
            <input id="CUENTA_MADRE" type="text" name="CUENTA_MADRE" value="<?= $cliente['CUENTA_MADRE'] ?>">
        </p>

        <p>
            <label for="RAZON_SOCIAL">RAZON_SOCIAL</label>
            <input id="RAZON_SOCIAL" type="text" name="RAZON_SOCIAL" value="<?= $cliente['RAZON_SOCIAL'] ?>">
        </p>

        <p>
            <label for="RUT_RUC">RUT_RUC</label>
            <input id="RUT_RUC" type="text" name="RUT_RUC" value="<?= $cliente['RUT_RUC'] ?>">
        </p>
        <p>
            <label for="SN_HANA">SN_HANA</label>
            <input id="SN_HANA" type="hidden" name="SN_HANA" value="<?= $cliente['RUT_RUC'] ?>">
        </p>
        <p>
            <label for="PAIS">PAIS</label>
            <input id="PAIS" type="text" name="PAIS" value="<?= $cliente['PAIS'] ?>">
        </p>
        <p>
            <label for="DIRECCION">DIRECCION</label>
            <input id="DIRECCION" type="text" name="DIRECCION" value="<?= $cliente['DIRECCION'] ?>">
        </p>
        <p>
            <label for="CIUDAD">CIUDAD</label>
            <input id="CIUDAD" type="text" name="CIUDAD" value="<?= $cliente['CIUDAD'] ?>">
        </p>
        <p>
            <label for="WEB">WEB</label>
            <input id="WEB" type="text" name="WEB" value="<?= $cliente['WEB'] ?>">
        </p>
        <p>
            <label for="TAMANO">TAMANO</label>
            <input id="TAMANO" type="text" name="TAMANO" value="<?= $cliente['TAMANO'] ?>">
        </p>
        <p>
            <label for="ACTIVIDAD_ECONOMICA">ACTIVIDAD_ECONOMICA</label>
            <input id="ACTIVIDAD_ECONOMICA" type="text" name="ACTIVIDAD_ECONOMICA" value="<?= $cliente['ACTIVIDAD_ECONOMICA'] ?>">
        </p>
        <p>
            <label for="CLIENTE_DESDE">CLIENTE_DESDE</label>
            <input id="CLIENTE_DESDE" type="text" name="CLIENTE_DESDE" value="<?= $cliente['CLIENTE_DESDE'] ?>">
        </p>
        <p>
            <label for="SECTOR">SECTOR</label>
            <input id="SECTOR" type="text" name="SECTOR" value="<?= $cliente['SECTOR'] ?>">
        </p>
        <p>
            <label for="SEGMENTO">SEGMENTO</label>
            <input id="SEGMENTO" type="text" name="SEGMENTO" value="<?= $cliente['SEGMENTO'] ?>">
        </p>
        <p>
            <label for="TIPO_CLIENTE">TIPO_CLIENTE</label>
            <input id="TIPO_CLIENTE" type="text" name="TIPO_CLIENTE" value="<?= $cliente['TIPO_CLIENTE'] ?>">
        </p>
        <p>
            <label for="SM">SM</label>
            <input id="SM" type="text" name="SM" value="<?= $cliente['SM'] ?>">
        </p>
        <p>
            <label for="KAM">KAM</label>
            <input id="KAM" type="text" name="KAM" value="<?= $cliente['KAM'] ?>">
        </p>
            <input type="submit" value="Modificar">
        </p>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
