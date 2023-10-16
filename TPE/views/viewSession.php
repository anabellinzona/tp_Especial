<?php

class viewSession{
    
    public function showFormLogin(){
        require_once 'plantillas/forms/formLogin.phtml';
    }
    public function showFormAddDatos(){
       require_once 'plantillas/forms/formAddProductos.phtml';
    }
    public function showMensaje($mensaje){
        require_once 'plantillas/mensajes/showMensaje.phtml';
    }
    public function showVolver(){
        require_once 'plantillas/mensajes/showVolver.phtml';
    } 
}

?>