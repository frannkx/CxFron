<?php

     class Conexion{

               // Variables
               private $host = '172.20.0.3';
               private $db = 'cx';
               private $user = 'admin';
               private $pass = 'secret';

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
