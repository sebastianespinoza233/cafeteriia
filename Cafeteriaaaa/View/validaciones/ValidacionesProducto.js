function validarProducto(){
    let referencia, precio, peso, categoria,stock,fecha_creacion
    referencia = document.getElementById("referencia").value;
    precio = document.getElementById("precio").value;
    peso = document.getElementById("peso").value;
    categoria = document.getElementById("categoria").value;
    stock = document.getElementById("stock").value;
    fecha_creacion = document.getElementById("fecha_creacion").value;
 
    
    if(referencia == ""|| precio == "Digite el precio"||peso == "Digite el peso" || stock  == "Digite el stock"| fecha_creacion  == "Digite la fecha"){
        Swal.fire('Todos los campos deben ser diligenciados');
        return false;
    }
    
   
}