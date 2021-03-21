<?php

     class Conexion{

               // Variables
               private $host = 'localhost';
               private $db = 'cx';
               private $user = 'admin';
               private $pass = 'dbP4$$w0rd';

          public function get_conexion(){
               
               try {
                    $conexion=new PDO("mysql:host=$this->host;dbname=$this->db;", $this->user, $this->pass);
                    return $conexion;
                    //echo "Se conecto exitosamente a ".$this->db;
               } catch (PDOException $e) {
                    echo "Error: ".$e->getMessage();
               }
          }
     }


 ?>
