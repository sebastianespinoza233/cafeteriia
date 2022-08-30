function validarVenta(){
    let idventa,id_usuario, cantidad_producto, id_producto ;
    idventa= document.getElementById("idventa").value;
    id_usuario = document.getElementById("id_usuario").value;
    cantidad_producto= document.getElementById("cantidad_producto").value;
    id_producto= document.getElementById("id_producto").value;

   
    
    if(cantidad_producto == "Digite la cantidad"){
        Swal.fire('Todos los campos deben ser diligenciados');
        return false;
    }
    
  
}