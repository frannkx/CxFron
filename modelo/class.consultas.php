<?php

     /**
      *
      */
     class Consultas
     {


          public function insertarUsuario($arg_nombre, $arg_apellido, $arg_email)
          {
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="insert into usuarios (nombre, apellido, email) values(:nombre, :apellido, :email)";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':nombre',$arg_nombre);
               $statement->bindParam(':apellido',$arg_apellido);
               $statement->bindParam(':email',$arg_email);
               if (!$statement) {
                    return "Error al crear el registro";
               }else {
                    $statement->execute();
                    return "Registro creado correctamente";
               }
          }

          public function cargarClientes(){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="select * from general";
               $statement=$conexion->prepare($sql);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function eliminarUsuario($arg_id_usuario){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="DELETE FROM usuarios WHERE id_usuario=:id_usuario";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':id_usuario',$arg_id_usuario);
               if (!$statement) {
                    return "Error al borrar usuario";
               }else {
                    $statement->execute();
                    return "Usuario borrado correctamente";
               }

          }

          public function buscarCliente($arg_razon_social){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $razon_social="%".$arg_razon_social."%";
               $sql="select * from general where razon_social like :razon_social";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':razon_social',$razon_social);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function cargarUsuario($arg_id_usuario){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="select * from usuarios where id_usuario=:id_usuario";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(":id_usuario",$arg_id_usuario);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function modificarUsuario($arg_campo, $arg_valor, $arg_id_usuario ){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="update usuarios set $arg_campo=:valor where id_usuario=:id_usuario";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(":valor",$arg_valor);
               $statement->bindParam(":id_usuario",$arg_id_usuario);
               if (!$statement) {
                    return "Error al modificar usuario";
               }else {
                    $statement->execute();
                    return "Se modifico el usuario de manera exitosa";
               }
          }

          public function insertarRol($arg_nombre_rol){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="insert into roles (nombre_rol) values(:nombre_rol)";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':nombre_rol',$arg_nombre_rol);
               if (!$statement) {
                    return "Error al crear el registro";
               }else {
                    $statement->execute();
                    return "Registro creado correctamente";
               }
          }

          public function cargarRoles(){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="select * from roles";
               $statement=$conexion->prepare($sql);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function cargarRol($arg_id_rol){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="select * from roles where=id_rol=:id_rol";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':id_rol',$arg_id_rol);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function actualizarRol($arg_id_rol, $arg_nombre_rol){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="update roles set nombre_rol=:nombre_rol where id_rol=:id_rol";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':nombre_rol',$arg_nombre_rol);
               $statement->bindParam('id_rol',$arg_id_rol);
               if (!$statement) {
                    return "Error al modificar rol";
               }else {
                    $statement->execute();
                    return "Se modifico el rol de manera exitosa";
               }
          }

          public function eliminarRol($arg_id_rol){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="DELETE FROM roles WHERE id_rol=:id_rol";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':id_rol',$arg_id_rol);
               if(!$statement){
                    return "Error al eliminar el rol";
               }else {
                    $statement->execute();
                    return "Rol eliminado correctamente";
               }
          }

          public function buscarRol($arg_nombre_rol){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $nombre="%".$arg_nombre_rol."%";
               $sql="select * from roles where nombre_rol like :nombre";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':nombre',$nombre);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function insertarGrupo($arg_nombre_grupo,$arg_descripcion_grupo){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="insert into GRUPOS (NOMBRE_GRUPO, DESCRIPCION_GRUPO) values(:nombre_grupo, :descripcion_grupo)";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':nombre_grupo',$arg_nombre_grupo);
               $statement->bindParam(':descripcion_grupo',$arg_descripcion_grupo);
               if (!$statement){
                    return "Error al crear el grupo";
               }else{
                    $statement->execute();
                    return "Grupo creado correctamente";
               }
          }

          public function cargarGrupos(){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="select * from GRUPOS";
               $statement=$conexion->prepare($sql);
               $statement->execute();
                    while ($result=$statement->fetch()) {
                         $rows[]=$result;
                    }
               return $rows;    

          }

          public function buscarGrupo($arg_nombre){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $nombre="%".$arg_nombre."%";
               $sql="select * from GRUPOS where nombre_grupo like :nombre";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':nombre',$nombre);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function buscarNombreGrupo($arg_id_grupo){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="select * from GRUPOS where ID_GRUPO=:id_grupo";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':id_grupo',$arg_id_grupo);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function eliminarGrupo($arg_id_grupo){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="delete from GRUPOS where ID_GRUPO=:id_grupo";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':id_grupo',$arg_id_grupo);
               if(!$statement){
                    return "Error al eliminar el grupo";
               }else {
                    $statement->execute();
                    return "Grupo eliminado correctamente
                    <a href='../index.php'>Volver al home</a>";
               }
          }

          public function cargarGrupo($arg_id_grupo){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="select * from GRUPOS where ID_GRUPO=:id_grupo";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':id_grupo',$arg_id_grupo);
               $statement->execute();
                    while ($result=$statement->fetch()) {
                         $rows[]=$result;
                    }
               return $rows;               
          }

          public function modificarGrupo($arg_id_grupo, $arg_nombre_grupo, $arg_descripcion_grupo){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="update GRUPOS set NOMBRE_GRUPO=:nombre_grupo, DESCRIPCION_GRUPO=:descripcion_grupo where ID_GRUPO=:id_grupo";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':id_grupo', $arg_id_grupo);
               $statement->bindParam('nombre_grupo', $arg_nombre_grupo);
               $statement->bindParam('descripcion_grupo', $arg_descripcion_grupo);
               if (!$statement) {
                    return "Error al actualizar el grupo";
               }else {
                    $statement->execute();
                    return "
                         Grupo actualizado satisfactoriamente
                         <a href='../VerGrupos.php'>Ver Grupos</a>
                    ";
               }
          }


          public function insertarDispositivo($arg_nombre_dispositivo, $arg_ip, $arg_descripcion_dispositivo, $arg_id_grupo){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="insert into DISPOSITIVOS (ID_GRUPO, NOMBRE_DISPOSITIVO, DESCRIPCION_DISPOSITIVO, IP) values(:id_grupo, :nombre_dispositivo, :descripcion_dispositivo, :ip)";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':id_grupo', $arg_id_grupo);
               $statement->bindParam(':nombre_dispositivo',$arg_nombre_dispositivo);
               $statement->bindParam(':descripcion_dispositivo', $arg_descripcion_dispositivo);
               $statement->bindParam(':ip',$arg_ip);
               if (!$statement) {
                    return "Error al crear el registro";
               }else {
                    $statement->execute();
                    return "Registro creado correctamente";
               }
          }

          public function cargarDispositivos(){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="select * from DISPOSITIVOS";
               $statement=$conexion->prepare($sql);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function eliminarDispositivo($arg_id_dispositivo){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="DELETE FROM DISPOSITIVOS WHERE ID_DISPOSITIVO=:ID_DISPOSITIVO";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':ID_DISPOSITIVO',$arg_id_dispositivo);
               if (!$statement) {
                    return "Error al eliminar dispositivo";
               }else {
                    $statement->execute();
                    return "Dispositivo eliminado correctamente
                    <a href='../index.php'>Volver al home</a>";
                    
               }
          }

          public function buscarDispositivo($arg_nombre_dispositivo){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $nombre="%".$arg_nombre_dispositivo."%";
               $sql="select * from DISPOSITIVOS where NOMBRE_DISPOSITIVO like :nombre";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':nombre',$nombre);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function modificarDispositivo($arg_id_dispositivo, $arg_nombre_dispositivo, $arg_ip, $arg_id_grupo, $arg_descripcion_dispositivo){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="update DISPOSITIVOS set NOMBRE_DISPOSITIVO=:nombre_dispositivo, IP=:ip, ID_GRUPO=:id_grupo, DESCRIPCION_DISPOSITIVO=:descripcion_dispositivo where ID_DISPOSITIVO=:id_dispositivo";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':id_dispositivo', $arg_id_dispositivo);
               $statement->bindParam(':nombre_dispositivo', $arg_nombre_dispositivo);
               $statement->bindParam(':ip', $arg_ip);
               $statement->bindParam(':id_grupo', $arg_id_grupo);
               $statement->bindParam(':descripcion_dispositivo', $arg_descripcion_dispositivo);
               if (!$statement) {
                    return "Error al actualizar el grupo";
               }else {
                    $statement->execute();
                    return "
                         Dispositivo actualizado satisfactoriamente
                         <a href='../VerDispostivos.php'>Ver Dispostivos</a>
                    ";
               }
          }

          public function insertarDepartamento($arg_nombre_departamento){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="insert into DEPARTAMENTOS (nombre_departamento) values(:nombre_departamento)";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':nombre_departamento', $arg_nombre_departamento);
               if (!$statement) {
                    return "Error al crear el departamento";
               }else {
                    $statement->execute();
                    return "Departamento creado correctamente";
               }
          }

          public function cargarDepartamentos(){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="select * from DEPARTAMENTOS";
               $statement=$conexion->prepare($sql);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }

          public function eliminarDepartamento($arg_id_departamento){
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $sql="delete from DEPARTAMENTOS where ID_DEPARTAMENTO=:id_departamento";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':id_departamento', $arg_id_departamento);
               if (!$statement) {
                    return "Error al eliminar departamento";
               }else {
                    $statement->execute();
                    return "Departamento eliminado correctamente";
               }
          }

/*          public function buscarDepartamento($arg_nombre_departamento){
               $rows=null;
               $modelo=new Conexion();
               $conexion=$modelo->get_conexion();
               $nombre="%".$arg_nombre_departamento."%";
               $sql="select * from DEPARTAMENTOS where NOMBRE_DEPARTAMENTO like :nombre";
               $statement=$conexion->prepare($sql);
               $statement->bindParam(':nombre',$nombre);
               $statement->execute();
               while ($result=$statement->fetch()) {
                    $rows[]=$result;
               }
               return $rows;
          }
*/
     }
 ?>
