<?php
require_once 'models/modelProductosAndCategorias.php';
require_once 'views/view.php';

class controllerProductosSegunCategoria{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new model();
        $this->view = new view();
    }
    public function showProductosSegunCategoria($categoria){
        $productosDeTalCategoria = $this->model->getProductosPorCategoria($categoria);
        $this->view->showProductosPorCategoria($productosDeTalCategoria);
    }

    public function showProductoDeTalCategoria($producto){
        $infoProducto = $this->model->getProductoParticular($producto);
        $prov = $this->model->getProveedorProductoByProduct($infoProducto->producto);
        $this->view->showInfoProducto($infoProducto, $prov);
    }

}
?>