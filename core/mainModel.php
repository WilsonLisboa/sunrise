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
        // -------------------------------------------------------------------------------------
        // funcion para realizar consultas simples
        protected function ejecutar_consulta_simple($consulta){
            $respuesta=self::conectar()->prepare($consulta);
            $respuesta->execute();
            return $respuesta;
        }
        // -------------------------------------------------------------------------------------
        // Script PHP para encriptar y desencriptar string utilizando sha256 (obsoleto)
        // public function encryption($string){
        //     $output=FALSE;
        //     $key=hash('sha256', SECRET_KEY);
        //     $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        //     $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        //     $output=base64_encode($output);
        //     return $output;
        // }
        
        // funcion para desencriptar utilizando sha256 (obsoleto)
        // protected function decryption($string){
        //     $key=hash('sha256', SECRET_KEY);
        //     $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        //     $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        //     return $output;
        // }
        // -------------------------------------------------------------------------------------
        // Metodo de encriptacion BlowFish con Password Default
        public function encryption($string){
            $hash = password_hash($string, PASSWORD_DEFAULT, ['cost' => 10]);
            return $hash;
        }
        // funcion para desencryptar blowfish comparando string encriptado con no encriptado y devolviendo un booleano
        protected function decryption($string){
            if(password_verify($string, $hash, PASSWORD_DEFAULT)){
                $validate = true;
            }else{
                $validate = false;
            }
            return $validate;
        }
        // -------------------------------------------------------------------------------------
        // funcion para generar condigos aleatorios para cuentas de usuarios
        protected function generar_codigo_aleatorio($letra, $long, $num){
            for($i=1; $i<=$long; $i++){
                $num = rand(0,9); /* metodo rand() genera condigos aleatorios */
                $letra.=$num;
            }
            return $letra.$num;
        }
        // -------------------------------------------------------------------------------------
        // funcion para limpiar cadena de textos de formulaios
        protected function limpiar_cadena($cadena){
            $cadena=trim($cadena); /* metodo trim() limpia los espacios en blanco del inicio y final de una cadena de string */
            $cadena=stripslashes($cadena); /* metodo stripslashes() limpia los slashes "/" de una cadena de string */
            $cadena=str_ireplace("<script>", "", $cadena); /* metodo str_ireplace() elimina sting que nosotros delimitemos anteriormente */
            $cadena=str_ireplace("</script>", "", $cadena); /* metodo str_ireplace() elimina sting que nosotros delimitemos anteriormente */
            $cadena=str_ireplace("<script type=", "", $cadena);
            $cadena=str_ireplace("<script src", "", $cadena);
            $cadena=str_ireplace("SELECT * FROM", "", $cadena);
            $cadena=str_ireplace("DELETE FROM", "", $cadena);
            $cadena=str_ireplace("INSERT INTO", "", $cadena);
            $cadena=str_ireplace("--", "", $cadena);
            $cadena=str_ireplace("[", "", $cadena);
            $cadena=str_ireplace("]", "", $cadena);
            $cadena=str_ireplace("{", "", $cadena);
            $cadena=str_ireplace("}", "", $cadena);
            $cadena=str_ireplace("(", "", $cadena);
            $cadena=str_ireplace(")", "", $cadena);
            $cadena=str_ireplace("$", "", $cadena);
            $cadena=str_ireplace("==", "", $cadena);
            $cadena=str_ireplace("^", "", $cadena);
            return $cadena;
        }
        // -------------------------------------------------------------------------------------
        // Funcion para mostrar alertas emergentes con sweetalert2
        protected function sweet_alert($datos){ /* muestra ventana emergente con alerta */
            if($datos['Alerta']=="simple"){
                $alerta="
                    <script>
                        Swal.fire(
                        '".$datos['Titulo']."',
                        '".$datos['Texto']."',
                        '".$datos['Tipo']."'
                        );
                    </script>
                ";
            }elseif($datos['Alerta']=="recarga"){ /* muestra ventana emergente que recarga la pagina */
                $alerta="
                    <script>
                        Swal.fire({
                        title: '".$datos['Titulo']."',
                        text: '".$datos['Texto']."',
                        icon: '".$datos['Tipo']."',
                        confirmButtonText: 'Aceptar'
                      }).then((result) => {
                        location.reload();
                      });
                    </script>
                ";
            }elseif($datos['Alerta']=="limpiar"){ /* meustra ventana emergente que elimina texto del formulario */
                $alerta="
                    <script>
                        Swal.fire({
                        title: '".$datos['Titulo']."',
                        text: '".$datos['Texto']."',
                        icon: '".$datos['Tipo']."',
                        confirmButtonText: 'Aceptar'
                      }).then((result) => {
                            $('.FormularioAjax')[0].reset();
                      });
                    </script>
                ";
            }
            return $alerta;
        }
    }