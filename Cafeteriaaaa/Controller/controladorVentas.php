<?php 
    require_once("ConexionDB.php");
    require_once("../Model/crudVentas.php");

    class controladorVentas{

        public function __construct(){}

        public function listarVentas(){
            $crudVentas = new crudVentas();
            return $crudVentas->listarVentas();
        }
        public function registrarVenta($id_usuario, $cantidad_producto, $id_producto)
        {
            $producto = new productos();
           
            
            $producto->setid_usuario($id_usuario);
            $producto->setcantidad_producto($cantidad_producto);
            $producto->setid_producto($id_producto);
            
            $crudProductos = new crudProductos(); //Creamos el objeto del modelo para el registro
            return $crudProductos->registrarVenta($producto); //Enviamos el objeto al modelo
        }
    
       

    }

    $controladorVentas = new controladorVentas();

    if(isset($_GET['listarVentas'])){
        header('Location: ../View/listarVentas.php');
    }else{
        if(isset($_GET['registrarVentas'])){
            header('Location: ../View/crearVenta.php');
        }
    }
?>