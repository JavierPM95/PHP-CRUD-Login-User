<?php

require_once "PHP-Pages/controllers/controller.php";
require_once "PHP-Pages/controllers/register.php";
require_once "PHP-Pages/models/models.php";
require_once "PHP-Pages/models/conectionDB.php";
require_once "PHP-Pages/models/registerModels.php";

$mvc = new MvcController();
$mvc -> template();

$conexion = Conexion::conection();
//echo '<pre>';print_r($conexion);'</pre>';

?>