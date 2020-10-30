<?php
    if($peticionAjax){
        require_once "../core/configAPP.php";
    }else{
        require_once "./core/configAPP.php";
    }

    // define('METHOD', 'AES-256-CBC');
    // define('SECRET_KEY','#Will');
    // define('SECRET_IV','5018156643319');
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

        // Script PHP para encriptar y desencriptar string
        // public function encryption($string){
        //     $output=FALSE;
        //     $key=hash('sha256', SECRET_KEY);
        //     $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        //     $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        //     $output=base64_encode($output);
        //     return $output;
        // }



        // Metodo de encriptacion BlowFish con Password Default
        public function encryption($string){
            $hash = password_hash($string, PASSWORD_DEFAULT, ['cost' => 10]);
            return $hash;
        }

        // protected function decryption($string){
        //     $key=hash('sha256', SECRET_KEY);
        //     $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        //     $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        //     return $output;
        // }

        protected function decryption($string){
            if(password_verify($string, $hash, PASSWORD_DEFAULT)){
                $validate = true;
            }else{
                $validate = false;
            }
            return $validate;
        }
    }