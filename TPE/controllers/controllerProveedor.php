<?php
require_once "views/view.php";
require_once "models/modelProveedores.php";
class controllerProveedor{
    private $modelProv;
    private $view;

    function __construct(){
        $this->modelProv = new modelProveedores;
        $this->view = new view();
    }
    public function showFormProveedor(){
        $this->view->showFormularioProveedores();
    }

    public function getInfoProveedor(){
        if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $mensaje = $this->modelProv->addNuevoProveedor($nombre, $apellido, $email);
            $this->view->showMensaje($mensaje);
        }
    }
}
?>