<?php
require_once 'config.php';
class model{
    private $db;

    public function __construct(){
        $this->db = new PDO ('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB.';charset=utf8',MYSQL_USER, MYSQL_PASS);
    }
    public function getProductos(){
        $query = $this->db->prepare('SELECT * FROM indumentaria');
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

function getProveedorProductoByProduct($producto){
    $query = $this->db->prepare('SELECT * FROM indumentaria WHERE producto = ?');
    $query->execute([$producto]);
    $producto = $query->fetchAll(PDO::FETCH_OBJ);

   foreach ($producto as $productos) {
       $query = $this->db->prepare('SELECT * FROM proveedores WHERE id = ?');
       $query->execute([$productos->proveedor]);
       $prov = $query->fetch(PDO::FETCH_OBJ);
       return $prov;
   }
}

function listarCategorias(){
    $query = $this->db->prepare('SELECT*FROM categorias');
    $query->execute();
    $categorias = $query->fetchAll(PDO::FETCH_OBJ);
    return $categorias;
}

function getProductosPorCategoria($categoria){
    $query = $this->db->prepare('SELECT * FROM indumentaria WHERE categoria = ?');
    $query->execute([$categoria]);
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    return $productos;
}
function getProductoParticular($id){
    $query = $this->db->prepare('SELECT * FROM indumentaria WHERE id = ?');
    $query->execute([$id]);
    $producto = $query->fetch(PDO::FETCH_OBJ);
    return $producto;
}
function getProveedorProductoPorId($id){
    $query = $this->db->prepare('SELECT * FROM indumentaria WHERE id = ?');
    $query->execute([$id]);
    $producto = $query->fetchAll(PDO::FETCH_OBJ);

    foreach ($producto as $productos) {
        $query = $this->db->prepare('SELECT * FROM proveedores WHERE id = ?');
        $query->execute([$productos->proveedor]);
        $prov = $query->fetch(PDO::FETCH_OBJ);
        return $prov;
    }
}
    
}
?>