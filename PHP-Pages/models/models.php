<?php

    class LinksPages{

        public function linkPagesModels($linkModel) {
            if (isset($_GET["action"])) {
                if(
                    $linkModel == "signUp" ||
                    $linkModel == "logIn" ||
                    $linkModel == "userList" ||
                    $linkModel == "update" ||
                    $linkModel == "logOut"
                ) {
                    $module = "PHP-Pages/views/modules/".$linkModel.".php";
                } else if ($linkModel == "home") {
                    $module = "PHP-Pages/views/modules/home.php";
                } else {
                    $module = "PHP-Pages/views/modules/404.php";
                }
            } else {
                $module = "PHP-Pages/views/modules/home.php";
            }
            return $module;

        }

    }

?>