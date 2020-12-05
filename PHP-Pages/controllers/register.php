<?php

    class CtrlRegisterForm{

        #REGISTER NEW USER

        static public function ctrlRegister(){

            if(isset($_POST["registerUserName"])){
            //    return $_POST["registerUserName"]."<br>".$_POST["registerEmail"]."<br>".$_POST["registerPassword"]."<br>";
            //}
                $userTable = "users";
                $userData = array("user" => $_POST["registerUserName"], 
                                    "email" => $_POST["registerEmail"],
                                    "password" => $_POST["registerPassword"]);

                $res = ModelsRegisterForm::modelsRegister($userTable, $userData);

                return $res;
            }
        }
        

        #GET USER#
        static public function ctrlGetUser($idAccess, $idValue){
            $userTable = "users";
            $res = ModelsRegisterForm::mdlGetUser($userTable, $idAccess, $idValue);
            return $res;
        }


        #ACCESS USER#
        public function ctrlAccess(){
            
            if(isset($_POST["accessEmail"])){
                $userTable = "users";
                $userEmail = "email";
                $emailValue = $_POST["accessEmail"];

                $res = ModelsRegisterForm::mdlGetUser($userTable, $userEmail, $emailValue);
                
                if($res["email"] == $_POST["accessEmail"] && $res["password"] == $_POST["accessPassword"]) {
                    
                    $_SESSION["acceptedAccess"] = "ok";

                    echo '<script>
                    if(window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
                    window.location = "index.php?action=userList"
                </script>';;
                } else {
                    echo '<script>
                        if(window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>';
                    echo "<div class='alert alert-danger' > Email or password doesn't match</div>";
                }
            }
        }


        #UPDATE USER#
        public function ctrlUpdateUser() {
            if(isset($_POST["updateUserName"])) {
                
                if($_POST["updatePassword"] != "") {
                    $password = $_POST["updatePassword"];
                } else {
                    $password = $_POST["actualPassword"];
                }

                $userTable = "users";

                $userData = array(
                    "id" => $_POST["userId"],
                    "user" => $_POST["updateUserName"],
                    "email" => $_POST["updateEmail"],
                    "password" => $password
                );
                
                $res = ModelsRegisterForm::mdlUpdateUser($userTable, $userData);
                
                
                if($res = "ok") {

                    echo '<script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href)
                        }
                    </script>';

                    echo '<div class="alert alert-success"> User update successfully </div>';
                }
            }
        }



        #DELETE USER#

        public function ctrlDeleteUser() {
            if(isset($_POST["deleteUser"])) {
                
                $userTable = "users";
                $idValue = $_POST["deleteUser"];

                $res = ModelsRegisterForm::mdlDeleteUser($userTable, $idValue);

                if ($res == "ok") {
                    echo '<script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href)
                        }
                    </script>';

                    echo '<div class="alert alert-danger"> User deleted successfully </div>';
                }

            }
        }
    }

?>