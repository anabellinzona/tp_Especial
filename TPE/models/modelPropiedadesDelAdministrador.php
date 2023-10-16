<?php
require_once 'config.php';
class modelPropiedadesDelAdministrador{
    private $db;

    public function __construct(){
        $this->db = new PDO ('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB .';charset=utf8',MYSQL_USER, MYSQL_PASS);
    }
    public function addNuevoProducto($producto, $categoria, $precio, $stock, $proveedor, $img, $descripcion){
        $query = $this->db->prepare('INSERT INTO indumentaria (producto, categoria, precio, stock, proveedor, imagen, descripcion) VALUES (?,?,?,?,?,?,?)');
        $query->execute([$producto, $categoria, $precio, $stock, $proveedor, $img, $descripcion]);
        if($this->db){
            return "El producto ha sido ingresado correctamente";
        } else {
            return "Hubo un error al insertar el producto";
        }
    }
    public function deleteProductos($producto){
        $query = $this->db->prepare('DELETE FROM indumentaria WHERE producto = ?');
        $query->execute([$producto]);
        if($this->db){
            return "El prodcuto se ha eliminado correctamente";
        } else {
            return "Hubo un error al eliminar el producto";
        }
    }
    public function updateProductos($precio, $stock, $producto, $id){
        $query = $this->db->prepare('UPDATE indumentaria SET precio = ?, stock = ?, producto = ? WHERE id = ?');
        $query->execute([$precio, $stock, $producto, $id]);
        return "se ha modificado el producto con éxito";
    }

    public function addTipoDeCategoria($tipoDeCategoria){
        $query = $this->db->prepare('INSERT INTO categorias (tipo) VALUES (?)');
        $query->execute([$tipoDeCategoria]);
        return "La categoria ha sido agregada con éxito";
    }
    public function deleteTipoDeCategoria($tipoDeCategoria){
        $query = $this->db->prepare ('SELECT * FROM indumentaria WHERE categoria = ?');
        $query->execute([$tipoDeCategoria]);
        $producto = $query->fetchAll(PDO::FETCH_OBJ);

        if(empty($producto)){
            $query = $this->db->prepare('DELETE FROM categorias WHERE tipo = ?');
            $query->execute([$tipoDeCategoria]);
            return "La categoria se ha eliminado con éxito";
        } else {
            return "Hubo un error al eliminar la categoria ya que contiene productos";
        }
    }
    public function getCategorias(){
        $query = $this->db->prepare('SELECT * FROM categorias');
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }
    public function modificarCategoria($nuevoNombreDeLaCategoria, $id){
        try {
            $query = $this->db->prepare('UPDATE categorias SET tipo = ? WHERE id = ?');
            $query->execute([$nuevoNombreDeLaCategoria, $id]);
        } catch (PDOException) {
            return 'No se ha podido modificar la categoria ya que corresponde a la clave foránea';
        }
    }
    public function getProductos(){
        $query = $this->db->prepare('SELECT * FROM indumentaria');
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
}
?>