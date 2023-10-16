<?php
require_once 'config.php';
class modelProveedores{
    private $db;

    function __construct(){
        $this->db = new PDO ('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB .';charset=utf8',MYSQL_USER, MYSQL_PASS);
    }

    function addNuevoProveedor($nom, $apellido, $email){
        $query = $this->db->prepare('INSERT INTO proveedores (nombre, apellido, contacto) VALUES (?,?,?)');
        $query->execute([$nom, $apellido, $email]);
        return "Ha sido registrado correctamente, nos comunicaremos";
    }
}