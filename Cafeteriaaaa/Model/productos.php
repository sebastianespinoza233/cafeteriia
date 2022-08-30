<?php
    class productos{
        private $id_producto;
        private $referencia;
        private $precio;
        private $peso;
        private $categoria;
        private $stock;
        private $fecha_creacion;

        public function __construct(){}

        public function setid_producto($id_producto){
        $this->id_producto = $id_producto;
    }

    public function setreferencia($referencia){
        $this->referencia = $referencia;
    }

    public function setprecio($precio){
        $this->precio = $precio;
    }

    public function setpeso($peso){
        $this->peso = $peso;
    }
    public function setcategoria($categoria){
        $this->categoria = $categoria;
    }
    public function setstock($stock){
        $this->stock = $stock;
    }
    public function setfecha_creacion($fecha_creacion){
        $this->fecha_creacion = $fecha_creacion;
    
    }


         public function getid_producto(){
        return $this->id_producto;
    }

    public function getreferencia(){
        return $this->referencia;
    }

    public function getprecio(){
        return $this->precio;
    }

    public function getpeso(){
        return $this->peso;
    }

    public function getcategoria(){
        return $this->categoria;
    }

    public function getstock(){
        return $this->stock;
    }

    public function getfecha_creacion(){
        return $this->fecha_creacion;
    }
    }
?>