<?php

class Venta{
    //deinir productos
    private $idventa;
    private $id_usuario;
    private $cantidad_producto;
    private $id_producto;
    
    public function __construct(){

    }


    public function setidventa($idventa){
        $this->idventa = $idventa;
    }

    public function setid_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function setcantidad_producto($cantidad_producto){
        $this->cantidad_producto = $cantidad_producto;
    }
    public function setid_producto($id_producto){
        $this->id_producto = $id_producto;
    }

   


    public function getidventa(){
        return $this->idventa;
    }

    public function getid_usuario(){
        return $this->id_usuario;
    }

    public function getcantidad_producto(){
        return $this->cantidad_producto;
    }
    public function getid_producto(){
        return $this->id_producto;
    }
   
}

?>