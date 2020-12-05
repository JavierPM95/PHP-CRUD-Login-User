<?php

    class Conexion {

        static public function conection() {

            $link = new PDO("mysql:host=localhost;dbname=php_project", "root", "");
            $link -> exec("set name utf8");
            return $link;
        }

    }

?>