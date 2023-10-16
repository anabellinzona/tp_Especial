<?php
require_once 'config.php';
class modelUsers{
    private $db;

    public function __construct(){
        $this->db = new PDO ('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB .';charset=utf8',MYSQL_USER, MYSQL_PASS);
    }

    public function getUserByUsername($user){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
        $query->execute([$user]);
        $usuario = $query->fetchAll(PDO::FETCH_OBJ);
        return $usuario;
    }
    
}
?>