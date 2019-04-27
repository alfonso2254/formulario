<?php
include 'cn.php';
session_start();

$usuario =$_POST['usuario'];
$_SESSION['usuario'] = $usuario;
$clave = $_POST['clave'];

$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){ header("location:tabla.php");
}else{
    echo '<script>
		alert("No se encuentra registrado");
		window.history.go(-1)
		</script>';
		exit;
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>