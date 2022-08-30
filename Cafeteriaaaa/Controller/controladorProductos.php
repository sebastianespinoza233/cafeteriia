<?php 
require_once("ConexionDB.php");
require_once("../Model/productos.php");
require_once("../Model/crudProductos.php");

class controladorProductos{
    public function __construct(){}

    public function listarProductos()
    {
        $crudProductos = new crudProductos(); //Invocamos el objeto
        return $crudProductos->listarProductos(); //Retornamos la lista de clientes
    }

   

    public function buscarProducto($id_producto){
        $crudProductos = new crudProductos();
        return $crudProductos->buscarProducto($id_producto);
    }

    

    public function registrarProducto($referencia, $precio, $peso, $categoria,$stock,$fecha_creacion)
    {
        $producto = new productos();
       
        
        $producto->setreferencia($referencia);
        $producto->setprecio($precio);
        $producto->setpeso($peso);
        $producto->setcategoria($categoria);
        $producto->setstock($stock);
        $producto->setfecha_creacion($fecha_creacion);
        $crudProductos = new crudProductos(); //Creamos el objeto del modelo para el registro
        return $crudProductos->registrarProducto($producto); //Enviamos el objeto al modelo
    }

    public function editarProducto($referencia, $precio, $peso, $categoria,$stock,$fecha_creacion)
    {
        $producto = new productos();
        $producto->setreferencia($referencia);
        $producto->setprecio($precio);
        $producto->setpeso($peso);
        $producto->setcategoria($categoria);
        $producto->setstock($stock);
        $producto->setfecha_creacion($fecha_creacion);
        $crudProductos = new crudProductos(); //Creamos el objeto del modelo para el registro
        return $crudProductos->editarProducto($producto, $id_producto); //Enviamos el objeto al modelo
    }

   

    
   
}
    
$controladorProductos = new controladorProductos();
if(isset($_GET['listarProductos'])){
    header('Location: ../View/listarProductos.php');
}
if(isset($_GET['registrarProducto'])){
    header('Location: ../View/crearProducto.php');
}
if (isset($_POST['registrarProducto'])) {
    if(trim($_POST['referencia']) == '' || trim($_POST['precio']) == '' || trim($_POST['peso']) == '' || trim($_POST['categoria']) == ''|| trim($_POST['stock']) == ''|| trim($_POST['fecha_creacion']) == ''){
        header('Location:../View/crearProducto.php?error=Ocurrio-un-error,-el-nombre-no-se-ingreso.');
    }   
    $respuesta = $controladorProductos->registrarProducto($_POST['referencia'], $_POST['precio'], $_POST['peso'], $_POST['categoria'], $_POST['stock'], $_POST['fecha_creacion']);
    if($respuesta == "Se creo con éxito"){
        header('Location:../View/listarProductos.php');
    }else{
        header('Location:../View/crearProducto.php?error='.$respuesta);
    }
}
if (isset($_GET['editarProducto'])) {
    header('Location:../View/editarProducto.php?id_producto='.$_GET['editarProducto']);
}
if (isset($_POST['editarProducto'])) {
    if($_POST['id_producto'] == null){
        header('Location:../View/listarProductos.php?error=No-se-encontro-el-producto');
    }else if(trim($_POST['referencia']) == '' || trim($_POST['precio']) == '' || trim($_POST['peso']) == '' || trim($_POST['categoria']) == ''|| trim($_POST['stock']) == ''|| trim($_POST['fecha_creacion']) == ''){
        header('Location:../View/editarProducto.php?id_producto='.$_POST['id_producto'].'&error=Ocurrio-un-error,-el-nombre-no-se-ingreso.');
    } 
    $respuesta = $controladorProductos->editarProducto($_POST['referencia'], $_POST['precio'], $_POST['peso'], $_POST['categoria'], $_POST['stock'], $_POST['fecha_creacion']);
    if($respuesta == "Se edito con éxito"){
        header('Location:../View/listarProductos.php');
    }else{
        header('Location:../View/editarProducto.php?id_producto='.$_POST['id_producto'].'&error='.$respuesta);
    } 
}


?>