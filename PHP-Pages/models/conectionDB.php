<?php

    class Conexion {

        static public function conection() {

            #also can code#
            /*
            $conn = mysql_connect(
                'localhost',
                'root',
                '',
                'php_project'
            );
            */
            $link = new PDO("mysql:host=localhost;dbname=php_project", "root", "");
            $link -> exec("set name utf8");
            return $link;
        }

    }

?>