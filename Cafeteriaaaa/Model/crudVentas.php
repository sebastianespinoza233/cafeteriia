<?php 
    class crudVentas{

        public function __construct(){}

        public function listarVentas(){
            $db = ConexionDB::Conectar();
            $sql = $db->query("SELECT * FROM venta");
            $sql->execute();
            return $sql->fetchAll();
        }
        public function registrarVenta($venta){
            $mensaje = '';
            $db = ConexionDB::Conectar();
            $sql = $db->prepare('INSERT INTO venta(idventa,id_usuario,cantidad_producto,id_producto )
            VALUES (:idventa ,:id_usuario,:cantidad_producto,:id_producto)');
            $sql->bindvalue('idventa',$producto->getidventa());
            $sql->bindvalue('id_usuario',$producto->getid_usuario());
            $sql->bindvalue('cantidad_producto',$producto->getcantidad_producto());
            $sql->bindvalue('id_producto',$producto->getid_producto());
           
            try {
                $sql->execute(); //Ejecutamos la consulta
                $mensaje = "Se creo con éxito";
            } catch (Exception $e) {
                $mensaje = $e->getMessage();
            }
            ConexionDB::CerrarConexion($db); //Cerramos conexion a la DB
            return $mensaje;
        }
       

    }
?>