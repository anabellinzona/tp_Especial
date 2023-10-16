<?php
require_once 'controllers/controller.php';
require_once 'controllers/sessionController.php';
require_once 'controllers/controllerProveedor.php';
require_once 'controllers/controllerAdmin.php';
require_once 'controllers/controllerProductosSegunCategoria.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'todos';
$controller = new controller();
$sessionController = new sessionController();
$controllerProveedores = new controllerProveedor();
$controllerAdmin = new controllerAdmin();
$controllerProductosSegunCategoria = new controllerProductosSegunCategoria();
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
$params = explode('/', $action);
switch ($params[0]) {
    case 'todos':
        $controller->getProductos();
        break;
    case 'nuevoProducto':
        $controllerAdmin->addProductoYSusDatos();
        break;
    case 'login':
        $sessionController->showForm();
        break;
    case 'proveedor':
        $controllerProveedores->showFormProveedor();
        break;
    case 'validarSesion':
        $sessionController->validarSesion();
        break;
    case 'verified':
        $controllerAdmin->showPropiedadesDelAdmin();
        break;
    case 'formProveedor':
        $controllerProveedores->getInfoProveedor();
        break;
    case 'producto':
        $controller->showProductoParticular($params[1]);
        break;
    case 'id';
        $controllerProductosSegunCategoria->showProductosSegunCategoria($params[1]);
        break;
    case 'prodByCategoria':
        $controllerProductosSegunCategoria->showProductoDeTalCategoria($params[1]);
        break;
    case 'administracion':
        $controllerAdmin->verificarLogeadoYShowPropiedadesDelAdministrador();
        break;
    case 'updateProducto':
        $controllerAdmin->updateProducto($params[1]);
        break;
    case 'deleteProducto':
        $controllerAdmin->deleteProducto();
        break;
    case 'add':
        $controllerAdmin->addDatos();
        break;
    case 'delete':
        $controllerAdmin->deleteDatos();
        break;
    case 'update':
        $controllerAdmin->updateDatos();
        break;
    case 'volver':
        $controllerAdmin->volver();
        break;
    case 'logout':
        $sessionController->logout();
        break;
    case 'addCategoria':
        $controllerAdmin->addCategorias();
        break;
    case 'addTipoDeCategoria':
        $controllerAdmin->addTipoDeCategorias();
        break;
    case 'deleteCategoria':
        $controllerAdmin->deleteCategorias();
        break;
    case 'deletetipoDeCategoria':
        $controllerAdmin->deleteTipoDeCategorias();
        break;
    case 'updateCategorias':
        $controllerAdmin->updateCategorias();
        break;
    case 'modificar':
        $controllerAdmin->modificarCategorias($params[1]);
        break;
    default:
        echo 'error';
        break;
}
?>