<?php

    require_once "./models/vistasModels.php";
    
    class vistasControllers extends vistasModels{


        public function obtenerPlantillaControllers(){
            return require_once "views/template.php";
        }


        // Funcion para obtener la URL que viene por la variable views declarada en .htaccess
        public function obtener_vitas_controllers(){
            if(isset($_GET['views'])){
                $ruta=explode("/", $_GET['views']);
                $respuesta=vistasModels::obtener_vistas_models($ruta[0]);
            }else{
                $respuesta="login";
            }
            return $respuesta;
        }
    }