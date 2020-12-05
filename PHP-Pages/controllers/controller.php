<?php

# MAIN TEMPLATE CALL

    class MvcController{
        public function template(){
            include "PHP-Pages/views/template.php";
        }

# USER INTERACTIVE

        public function linksPagesController() {
            if (isset($_GET["action"])) {
                $linkController = $_GET["action"];
            } else {
                $linkController = "home";
            }

            $linkModule = LinksPages::linkPagesModels($linkController);
            include $linkModule;
        }

    }

?>