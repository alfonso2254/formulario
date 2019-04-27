<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="validar.js"></script>
</head>
<body>
    <p class="tablatext"> <a href="tabla.php" class="tablas">Usuario registrados</a></p>
    <h1>Formulario de Registro</h1>
    
    <form action="registrar.php" method="post" class="form-register" onsubmit="return validar();">
        <h2 class="form__titulo">Crea una cuenta</h2>
        
        <div class="contenedor-inputs">
            
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-48" required >
            <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos"  class="input-48" >
            <input type="email"id="correo" name="correo" placeholder="Correo" class="input-100" >
            <input type="text" id="usuario" name="usuario" placeholder="Usuario"  class="input-48" >
            <input type="password" id="clave" name="clave" placeholder="Contraseña" class="input-48" >
            <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="input-100" >
            <input type="submit" value="Registrar" class="btn-enviar">
            <p class="form__link">¿Ya tienes una cuenta? <a href="index.php">Ingresa aquí</a></p>
            
            
        </div>
        
        
        
    </form>
</body>
</html>