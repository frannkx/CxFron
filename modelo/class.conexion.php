<?php

     class Conexion{

               // Variables
               private $host = $_ENV["WEB_DB_HOST"];
               private $db = $_ENV["WEB_DB"];
               private $user = $_ENV["WEB_DB_USER"];
               private $pass = $_ENV["WEB_DB_PASSWORD"];

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
