<?php

    require_once "conectionDB.php";
    
    class ModelsRegisterForm {

        #CREATE USER#
        static public function modelsRegister($userTable, $userData) {
            $stmt = Conexion::conection()->prepare("INSERT INTO $userTable(user, email, password) VALUES (:user, :email, :password)");
            $stmt -> bindParam(":user", $userData["user"], PDO::PARAM_STR);
            $stmt -> bindParam(":email", $userData["email"], PDO::PARAM_STR);
            $stmt -> bindParam(":password", $userData["password"], PDO::PARAM_STR);

            if ($stmt -> execute()) {
                return "ok";
            } else {
                print_r(Conexion::conection()->errorInfo());
            }
            $stmt -> close();
            $stmt = null;
        }

        #GET USERS#

        static public function mdlGetUser($userTable, $userEmail, $emailValue) {
            
            if($userEmail == null && $emailValue == null) {
                $stmt = Conexion::conection()->prepare("SELECT *,DATE_FORMAT(date, '%d/%m/%Y') AS date FROM $userTable ORDER BY id DESC");
                $stmt -> execute();
                return $stmt -> fetchAll();
            } else {
                $stmt = Conexion::conection() -> prepare("SELECT *,DATE_FORMAT(date, '%d/%m/%Y') AS date FROM $userTable  WHERE $userEmail = :$userEmail ORDER BY id DESC");
                $stmt->bindParam(":".$userEmail, $emailValue, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt -> fetch();
            }          
            $stmt -> close();
            $stmt = null;
        }


        #UPDATE USER#
        static public function mdlUpdateUser($userTable, $userData) {
            
            $stmt = Conexion::conection()->prepare("UPDATE $userTable SET user=:user, email=:email, password=:password WHERE id=:id");
            $stmt -> bindParam(":user", $userData["user"], PDO::PARAM_STR);
            $stmt -> bindParam(":email", $userData["email"], PDO::PARAM_STR);
            $stmt -> bindParam(":password", $userData["password"], PDO::PARAM_STR);
            $stmt -> bindParam(":id", $userData["id"], PDO::PARAM_INT);

            if($stmt -> execute()) {
                return "ok";
            } else {
                print_r(Conexion::conection()->errorInfo());
            }

        }

        #DELETE USER#
        static public function mdlDeleteUser($userTable, $idValue) {
            $stmt = Conexion::conection()->prepare("DELETE FROM $userTable WHERE id = :id");
            $stmt -> bindParam(":id", $idValue, PDO::PARAM_STR);
            if($stmt -> execute()) {
                return "ok";
            } else {
                print_r(Conexion::conection()->errorInfo());
            }

        }

    }
?>