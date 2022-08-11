<?php

     function verClientes(){
          $consulta=new Consultas();
          $filas=$consulta->cargarClientes();
          
          echo "<table border='1px'>
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
               </tr>";
          foreach ($filas as $fila) {
               echo "<tr>";                     
                    echo "<td>".$fila['CUENTA_MADRE']."</td>";
                    echo "<td>".$fila['RAZON_SOCIAL']."</td>";
                    echo "<td>".$fila['RUT_RUC']."</td>";
                    echo "<td>".$fila['SN_HANA']."</td>";
                    echo "<td>".$fila['PAIS']."</td>";
                    echo "<td>".$fila['DIRECCION']."</td>";
                    echo "<td>".$fila['CIUDAD']."</td>";
                    echo "<td>".$fila['WEB']."</td>";
                    echo "<td>".$fila['TAMANO']."</td>";
                    echo "<td>".$fila['ACTIVIDAD_ECONOMICA']."</td>";
                    echo "<td>".$fila['CLIENTE_DESDE']."</td>";
                    echo "<td>".$fila['SECTOR']."</td>";
                    echo "<td>".$fila['SEGMENTO']."</td>";
                    echo "<td>".$fila['TIPO_CLIENTE']."</td>";
                    echo "<td>".$fila['SM']."</td>";
                    echo "<td>".$fila['KAM']."</td>";
                    //Se utilizará más adelante para indicar si se quiere modificar o eliminar el registro
                    echo "<td><a class='button' href='edit.php?SN_HANA=<?=".$fila['SN_HANA']."'>Modificar</a></td>";
                    echo "<td><a class='button' href='delete.php?SN_HANA=<?=".$fila['SN_HANA']."'>Borrar</a></td>";
               echo "</tr>";
          }

          echo "</table>";
     }

     function buscar($razon_social){
          $consulta=new Consultas();
          $filas=$consulta->buscarCliente($razon_social);

          echo "<table border='1px'>
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
               </tr>";
          foreach ($filas as $fila) {
               echo "<tr>";                     
                    echo "<td>".$fila['CUENTA_MADRE']."</td>";
                    echo "<td>".$fila['RAZON_SOCIAL']."</td>";
                    echo "<td>".$fila['RUT_RUC']."</td>";
                    echo "<td>".$fila['SN_HANA']."</td>";
                    echo "<td>".$fila['PAIS']."</td>";
                    echo "<td>".$fila['DIRECCION']."</td>";
                    echo "<td>".$fila['CIUDAD']."</td>";
                    echo "<td>".$fila['WEB']."</td>";
                    echo "<td>".$fila['TAMANO']."</td>";
                    echo "<td>".$fila['ACTIVIDAD_ECONOMICA']."</td>";
                    echo "<td>".$fila['CLIENTE_DESDE']."</td>";
                    echo "<td>".$fila['SECTOR']."</td>";
                    echo "<td>".$fila['SEGMENTO']."</td>";
                    echo "<td>".$fila['TIPO_CLIENTE']."</td>";
                    echo "<td>".$fila['SM']."</td>";
                    echo "<td>".$fila['KAM']."</td>";
                    //Se utilizará más adelante para indicar si se quiere modificar o eliminar el registro
                    echo "<td><a class='button' href='edit.php?SN_HANA=<?=".$fila['SN_HANA']."'>Modificar</a></td>";
                    echo "<td><a class='button' href='delete.php?SN_HANA=<?=".$fila['SN_HANA']."'>Borrar</a></td>";
               echo "</tr>";
          }

          echo "</table>";
     }

 ?>
