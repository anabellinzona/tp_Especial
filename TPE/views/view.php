<?php
require_once 'plantillas/general/header.phtml';

class view {

    public function showFormularioProveedores(){
        require_once 'plantillas/forms/formProveedores.phtml';
    }
    public function showProductos($productos,$categorias){
        require_once 'plantillas/categorias/showNavCategorias.phtml';
        require_once 'plantillas/productos/showTodosLosProductos.phtml';
    }
    public function showCategorias($categorias){
        require_once 'plantillas/categorias/showNavCategoria.phtml';
    }
    public function showProductosPorCategoria($productos){
        require_once 'plantillas/categorias/showProductosCategoria.phtml';
    }
    public function showInfoProducto($producto, $prov){
        require_once 'plantillas/productos/showProducto.phtml';
    }
    public function showVolver(){
        require_once 'plantillas/mensajes/showVolver.phtml';
    } 
    public function showMensaje($mensaje){
        require_once 'plantillas/mensajes/showMensaje.phtml';
    }
}
?>