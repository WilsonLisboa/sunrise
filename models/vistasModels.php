<?php
#------------ MANEJO DE VISTAS -----------#
    class vistasModels {


        protected function obtener_vistas_models($vistas){
            $listaBlanca=["home","proveedores","clientes","bancos",
            "cuentasBancarias","monedas","articulos","registroInventario",
            "almacen","informeInventario","solicitarCompra","ordenCompra",
            "registrarCompra","informeComrpas","registrarPedido",
            "facturacion","informeVentas","cuentasCobrar","cobranzas",
            "infomeCobranzas","cuentasPagar","ordenPago","informePago",
            "controlUsuario","configuracion","cerrarSesion"];


        if(in_array($vistas, $listaBlanca)){
            if(is_file("./views/contenido/".$vistas."-views.php")){
                $contenido="./views/contenido/".$vistas."-views.php";
            }else{
                $contenido="login";
            }
        }elseif($vistas=="login"){
            $contenido="login";
        }elseif($vistas=="index"){
            $contenido="login";
        }else{
            $contenido="login";
        }
        return $contenido;
        }
    }