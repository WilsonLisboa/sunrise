<?php
    if($peticionAjax){
        require_once "../core/configAPP.php";
    }else{
        require_once "./core/configAPP.php";
    }
    class mainModel{

        // funcion para conectar a la base de datos
        protected function conectar(){
            $enlace= new PDO(SGBD, USER, PASS);
            return $enlace;
        }
        // funcion para realizar consultas simples
        protected function ejecutar_consulta_simple($consulta){
            $respuesta=self::conectar()->prepare($consulta);
            $respuesta->execute();
            return $respuesta;
        }
    }