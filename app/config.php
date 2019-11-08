<?php

 //Configuracion de la Base de Datos

 $dbuser=['usr'=>'marc',
          'pass'=>'marc123']; //Guardaremos nuestros datos de usuario de la Base de Datos en un array asociativo

        try { $dbh = new PDO('mysql:host=localhost;dbname=projecte_m7', $dbuser['usr'], $dbuser['pass']); }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
?>