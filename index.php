<?php

require_once "core/configGeneral.php";
require_once "controllers/vistasControllers.php";

$mvc = new vistasControllers();
$mvc -> obtenerPlantillaControllers();

?>