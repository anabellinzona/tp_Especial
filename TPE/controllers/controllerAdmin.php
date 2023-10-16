<?php
require_once 'models/modelPropiedadesDelAdministrador.php';
require_once 'views/viewPropiedadesDelAdministrador.php';
class controllerAdmin{
    private $model;
    private $viewAdmin;

    public function __construct(){
        $this->model = new modelPropiedadesDelAdministrador();
        $this->viewAdmin = new viewAdmin();
    }
    public function addProductoYSusDatos(){
        if(!empty($_POST['producto']) && !empty($_POST['categoria']) && 
        !empty($_POST['precio']) && !empty($_POST['stock']) && !empty($_POST['proveedor']) && !empty($_POST['imagen']) ){
            $producto = $_POST['producto'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            $descripcion = $_POST['descripcion'];
            $proveedor = $_POST['proveedor'];
            $img = $_POST['imagen']; 
            $this->model->addNuevoProducto($producto, $categoria, $precio, $stock, $proveedor, $img, $descripcion);
        }  
    }

    function showPropiedadesDelAdmin(){
        $this->viewAdmin->showFormAddDatos();
    }
    public function addDatos(){
        $this->viewAdmin->showFormAddDatos();
    }
    public function updateDatos(){
        $productos = $this->model->getProductos();
        $this->viewAdmin->showUpdateDatos($productos);
    }
    public function deleteDatos(){
        $productos = $this->model->getProductos();
        $this->viewAdmin->showFormDeleteDatos($productos);
    }
    public function addCategorias(){
        $this->viewAdmin->showFormAddCategorias();
    }
    public function updateCategorias(){
        $categorias = $this->model->getCategorias();
        $this->viewAdmin->listarCategoriasParaModificarlas($categorias);
    }
    public function deleteCategorias(){
        $categorias = $this->model->getCategorias();
        $this->viewAdmin->showFormDeleteCategorias($categorias);
    }
    public function deleteProducto(){
        if(!empty($_POST['producto'])){
            $producto = $_POST['producto'];
            $mensaje = $this->model->deleteProductos($producto);
            $this->viewAdmin->showMensaje($mensaje);
        }
    }
    public function updateProducto($id){
        if(!empty($_POST['producto']) && !empty($_POST['precio']) && !empty($_POST['stock'])){
            $producto =  $_POST['producto'];
            $stock = $_POST['stock'];
            $precio = $_POST['precio'];
            $mensaje = $this->model->updateProductos($precio, $stock, $producto, $id);
            $this->viewAdmin->showMensaje($mensaje);
        }
    }
    public function verificarLogeadoYShowPropiedadesDelAdministrador(){
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if($_SESSION['user'] == 'webadmin' && $_SESSION['password'] == 'admin'){
            $this->viewAdmin->showPropiedades();
        } else {
            header("Location: " . "login");
            die();
    }
    }
    public function volver(){
        header('Location: ' . "administracion");
    }

    public function showMensaje($mensaje){
        $this->viewAdmin->showMensaje($mensaje);
    }
    public function addTipoDeCategorias(){
        if(!empty($_POST['categoria'])){
            $tipoDeCategoria = $_POST['categoria'];
            $mensaje = $this->model->addTipoDeCategoria($tipoDeCategoria);
            $this->viewAdmin->showMensaje($mensaje);
        }
    }
    public function deleteTipoDeCategorias(){
        try {
            if(!empty($_POST['categoria'])){
            $categoria = $_POST['categoria'];
            $mensaje = $this->model->deleteTipoDeCategoria($categoria);
            $this->viewAdmin->showMensaje($mensaje);
        }
        } catch (PDOException) {
            $this->viewAdmin->showMensaje("No se pudo eliminar eliminar la categoria ya que contiene productos");
        }
    }
    public function modificarCategorias($id){
        $nuevoNombreDeLaCategoria = $_POST['categoria'];
        $mensaje = $this->model->modificarCategoria($nuevoNombreDeLaCategoria, $id);
        $this->viewAdmin->showMensaje($mensaje);
    }
}
