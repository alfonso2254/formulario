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
    
    <form action="validar.php" method="post" class="form-register" onsubmit="return validar();">
        <h2 class="form__titulo">Inicios de Sesion</h2>
        
        <div class="contenedor-inputs">
            <input type="text" id="usuario" name="usuario" placeholder="Usuario"  class="input-48" >
            <input type="password" id="clave" name="clave" placeholder="Contraseña" class="input-48" >
            <input type="submit" value="Ingresar" class="btn-enviar">
            <p class="form__link">¿No tienes una cuenta? <a href="login.php">Ingresa aquí</a></p>
            
            
        </div>
        
        
        
    </form>
</body>
</html>