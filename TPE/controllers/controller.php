<?php
require_once 'models/modelProductosAndCategorias.php';
require_once 'views/view.php';
class controller{
    private $model;
    private $view;
    public function __construct(){
        $this->model = new model;
        $this->view = new view;
    }
    public function getProductos(){
        $productos = $this->model->getProductos();
        $categorias = $this->model->listarCategorias();
        $this->view->showProductos($productos, $categorias);
    }

    public function showProductoParticular($idProducto){
        $infoProducto = $this->model->getProductoParticular($idProducto);
        $pro = $this->model->getProveedorProductoPorId($idProducto);
        $this->view->showInfoProducto($infoProducto, $pro);
        $this->view->showVolver();
    }
}
?>