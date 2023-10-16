<?php
require_once 'models/modelUsers.php';
require_once 'views/viewSession.php';
class sessionController{
    private $model;
    private $viewSession;

    public function __construct(){
        $this->model = new modelUsers();
        $this->viewSession = new viewSession();
    }
    public function showForm(){
        $this->viewSession->showFormLogin();     
    }

    public function validarSesion(){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $userName = $_POST['email'];
            $userPass = $_POST['password'];
            $userBBDD = $this->model->getUserByUsername($userName);
            if(empty($userBBDD)){
                $this->viewSession->showMensaje("usuario no encontrado");
                $this->viewSession->showVolver();
                die();
            }
            foreach ($userBBDD as $users) {
                $passwordBBDD = $users->password;
            if(!empty($userBBDD) && password_verify($userPass, $passwordBBDD)){
                if (session_status() != PHP_SESSION_ACTIVE) {
                    session_start();
                }        
                $_SESSION['user'] = $userName;
                $_SESSION['password'] = $userPass;
                $_SESSION['logueado'] = true;
                header('location: administracion');
            } else {
                $this->viewSession->showMensaje("email o contraseña incorrectos");
                $this->viewSession->showVolver();
            }
            }
        }
        }
    public function logout(){
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL);
        die();
    }
}
?>