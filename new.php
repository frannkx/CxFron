<?php
// Comprobamso si recibimos datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recogemos variables
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
    // Variables
    $hostDB = '127.0.0.1';
    $nombreDB = 'cx';
    $usuarioDB = 'admin';
    $contrasenyaDB = 'dbP4$$w0rd';
    // Conecta con base de datos
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
    // Prepara INSERT
    $miInsert = $miPDO->prepare('INSERT INTO general (CUENTA_MADRE, RAZON_SOCIAL, RUT_RUC, SN_HANA, PAIS, DIRECCION, CIUDAD, WEB, TAMANO, ACTIVIDAD_ECONOMICA, CLIENTE_DESDE, SECTOR, SEGMENTO, TIPO_CLIENTE, SM, KAM) VALUES (:CUENTA_MADRE, :RAZON_SOCIAL, :RUT_RUC, :SN_HANA, :PAIS, :DIRECCION, :CIUDAD, :WEB, :TAMANO, :ACTIVIDAD_ECONOMICA, :CLIENTE_DESDE, :SECTOR, :SEGMENTO, :TIPO_CLIENTE, :SM, :KAM)');
    // Ejecuta INSERT con los datos
    $miInsert->execute(
        array(
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
        )
    );
    // Redireccionamos a Leer
    header('Location: view.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear - CRUD PHP</title>
</head>
<body>
    <?php
      require_once('menu.php');
        vermenu();
    ?>
    <div>
        <table border="1px">
        <form action="" method="post">
            <tr>
                <td>    
                    <p>
                        <label for="CUENTA_MADRE">Cuenta Madre</label>
                        <input id="CUENTA_MADRE" type="text" name="CUENTA_MADRE">
                    </p>
                </td>
            
                <td>
                    <p>
                        <label for="RAZON_SOCIAL">RAZON_SOCIAL</label>
                        <input id="RAZON_SOCIAL" type="text" name="RAZON_SOCIAL">
                    </p>
                </td>
            
                <td>
                    <p>
                        <label for="RUT_RUC">RUT_RUC</label>
                        <input id="RUT_RUC" type="text" name="RUT_RUC">
                    </p>
                </td>
            
                <td>
                    <p>
                        <label for="SN_HANA">SN_HANA</label>
                        <input id="SN_HANA" type="text" name="SN_HANA">
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p>
                        <label for="PAIS">PAIS</label>
                        <input id="PAIS" type="text" name="PAIS">
                    </p>
                </td>
                
                <td>
                    <p>
                        <label for="DIRECCION">DIRECCION</label>
                        <input id="DIRECCION" type="text" name="DIRECCION">
                    </p>
                </td>
                
                <td>
                    <p>
                        <label for="CIUDAD">CIUDAD</label>
                        <input id="CIUDAD" type="text" name="CIUDAD">
                    </p>
                </td>
                
                <td>
                    <p>
                        <label for="WEB">WEB</label>
                        <input id="WEB" type="text" name="WEB">
                    </p>
                </td>
                
            </tr>
            
            <tr>
                <td>
                    <p>
                        <label for="TAMANO">TAMANO</label>
                        <input id="TAMANO" type="text" name="TAMANO">
                    </p>
                </td>
                
                <td>
                    <p>
                        <label for="ACTIVIDAD_ECONOMICA">ACTIVIDAD_ECONOMICA</label>
                        <input id="ACTIVIDAD_ECONOMICA" type="text" name="ACTIVIDAD_ECONOMICA">
                    </p>
                </td>
                
                <td>
                    <p>
                        <label for="CLIENTE_DESDE">CLIENTE_DESDE</label>
                        <input id="CLIENTE_DESDE" type="text" name="CLIENTE_DESDE">
                    </p>
                </td>
                
                <td>
                    <p>
                        <label for="SECTOR">SECTOR</label>
                        <input id="SECTOR" type="text" name="SECTOR">
                    </p>
                </td>
                
            </tr>
            
            <tr>
                <td>
                    <p>
                    <label for="SEGMENTO">SEGMENTO</label>
                    <input id="SEGMENTO" type="text" name="SEGMENTO">
                    </p>
                </td>
            
                <td>
                    <p>
                    <label for="TIPO_CLIENTE">TIPO_CLIENTE</label>
                    <input id="TIPO_CLIENTE" type="text" name="TIPO_CLIENTE">
                    </p>
                </td>
            
                <td>
                    <p>
                    <label for="SM">SM</label>
                    <input id="SM" type="text" name="SM">
                    </p>
                </td>
            
                <td>
                    <p>
                    <label for="KAM">KAM</label>
                    <input id="KAM" type="text" name="KAM">
                    </p>    
                </td>
            
            </tr>
            
            <tr>
                <td rowspan="4">
                    <p>
                        <input type="submit" value="Guardar">
                    </p>    
                </td>
            </tr>
            
        </form>
        </table>
    </div>
</body>
</html>
