<?php
    class crudProductos{
        public function __construct(){}

        public function listarProductos(){
            $db = ConexionDB::Conectar(); //Conectamos con la base de datos
            $sql = $db->query('SELECT * FROM producto ORDER BY id_producto  ASC');//Consultamos la base de datos
            $sql->execute();
            ConexionDB::CerrarConexion($db);
            return $sql->fetchAll();//Retornamos toda la informacion
        }

        
        

        public function registrarProducto($producto){
            $mensaje = '';
            $db = ConexionDB::Conectar();
            $sql = $db->prepare('INSERT INTO producto(id_producto ,referencia,precio,peso,categoria, stock,fecha_creacion)
            VALUES (:id_producto ,:referencia,:precio,:peso,:categoria,:stock, :fecha_creacion)');
            $sql->bindvalue('id_producto',$producto->getid_producto());
            $sql->bindvalue('referencia',$producto->getreferencia());
            $sql->bindvalue('precio',$producto->getprecio());
            $sql->bindvalue('peso',$producto->getpeso());
            $sql->bindvalue('categoria',$producto->getcategoria());
            $sql->bindvalue('stock',$producto->getstock());
            $sql->bindvalue('fecha_creacion',$producto->getfecha_creacion());
            try {
                $sql->execute(); //Ejecutamos la consulta
                $mensaje = "Se creo con éxito";
            } catch (Exception $e) {
                $mensaje = $e->getMessage();
            }
            ConexionDB::CerrarConexion($db); //Cerramos conexion a la DB
            return $mensaje;
        }

        public function editarProducto($producto, $id_producto){
            $mensaje = '';
            $db = ConexionDB::Conectar();
            $sql = $db->prepare('UPDATE producto 
            SET referencia=:referencia, precio=:precio, peso=:peso, categoria=:categoria, stock=:stock, fecha_creacion=:fecha_creacion
            WHERE id_producto=:id_producto');
            $sql->bindvalue('id_producto',$id_producto);
            $sql->bindvalue('referencia',$producto->getreferencia());
            $sql->bindvalue('precio',$producto->getprecio());
            $sql->bindvalue('peso',$producto->getpeso());
            $sql->bindvalue('categoria',$producto->getcategoria());
            $sql->bindvalue('stock',$producto->getstock());
            $sql->bindvalue('fecha_creacion',$producto->getfecha_creacion());
            try {
                $sql->execute(); //Ejecutamos la consulta
                $mensaje = "Se edito con éxito";
            } catch (Exception $e) {
                $mensaje = $e->getMessage();
            }
            ConexionDB::CerrarConexion($db); //Cerramos conexion a la DB
            return $mensaje;
        }

        public function buscarProducto($id_producto){
            $db = ConexionDB::Conectar();
            $sql = $db->prepare("SELECT * FROM producto WHERE id_producto=:id_producto");
            $sql->bindValue('id_producto', $id_producto);
            $sql->execute();
            ConexionDB::CerrarConexion($db);
            return $sql->fetch();
        }

       

    }
?>