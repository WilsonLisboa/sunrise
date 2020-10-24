<?php
#------------ MANEJO DE VISTAS y LISTAS BLANCAS DE URL -----------#
    class vistasModels {


        protected function obtener_vistas_models($vistas){
            $listaBlanca=["home","proveedores","clientes","bancos","cheques",
            "cuentasBancarias","monedas","articulos","registroInventario",
            "almacen","informeInventario","solicitarCompra","ordenCompra",
            "registrarCompra","informeCompras","registrarPedido",
            "facturacion","informeVentas","cuentasCobrar","cobranzas",
            "informeCobranzas","cuentasPagar","ordenPago","informePago",
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