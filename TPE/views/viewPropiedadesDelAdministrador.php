<?php

class viewAdmin{

    public function showFormAddDatos(){
        require_once 'plantillas/forms/formAddProductos.phtml';
    }
    public function showFormDeleteDatos($productos){
        require_once 'plantillas/forms/formDeleteDatos.phtml';
    }
    public function showUpdateDatos($productos){
        require_once 'plantillas/forms/formUpdateDatos.phtml';
    }
    public function showPropiedades(){
       require_once 'plantillas/administracion/propiedadesDelAdministrador.phtml';
    }
    public function showMensaje($mensaje){
        require_once 'plantillas/mensajes/showMensaje.phtml';
    }
    public function showVolver(){
        require_once 'plantillas/mensajes/showVolver.phtml';
    }
    public function showFormAddCategorias(){
        require_once 'plantillas/forms/formAddCategorias.phtml';
    }
    public function showFormDeleteCategorias($categorias){
        require_once 'plantillas/forms/formDeleteCategorias.phtml';
    }
    public function listarCategoriasParaModificarlas($categorias){
        require_once 'plantillas/forms/formUpdateCategorias.phtml';
    }
}
?>