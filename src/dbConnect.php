<?php 

function dbConnect(){
    try{
         $database = new PDO('mysql:host=localhost;dbname=vendre_mes_objets;charset=utf8', 'root', 'root');

         return $database;
    }
     catch(Exception $e){
        die('Erreur de connexion '.$e->getMessage());
     }
}