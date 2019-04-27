function validar(){
    var nombre, apellidos, correo, usuario, clave, telefono, expresion;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    clave = document.getElementById("clave").value;
    telefono = document.getElementById("telefono").value;

    
    if(nombre === "" || apellidos == "" || correo == "" || usuario == "" || clave == "" || telefono == ""){
    alert("Todos los campos son obligatorios");
    return false;
}
    
    else if(nombre.length>30){
        alert("El nombre es muy largo");
        return false;
    }
    
    else if(nombre.length>30){
        alert("El nombre es muy largo");
        return false;
    }
    
    else if(apellidos.length>80){
        alert("Los apellidos son muy largo");
        return false;
    }
    
     else if(correo.length>100){
        alert("El correo es muy largo");
        return false;
    }

     else if(usuario.length>20 || clave.length>20){
        alert("El usuario y la contraseña son muy largas");
        return false;
    }
    
    else if(telefono.length>20){
        alert("El telefono es muy largo")
        return false;
    }

      else if(isNaN(telefono)){
        alert("El telefono no es un numero")
        return false;
    }

}
