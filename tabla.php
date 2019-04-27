<?php
session_start();
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = ''){
    echo '<script>
        alert("Usted no tiene autorizacion")
        window.location.assign("login.php");
        </script>';
    die();
}

    

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Usuarios registrador</title>
</head>
<body>
    <h3 style="text-aling=center">Bienvenido: </h3>
	<center>
			<table border="1">	
		<thead>
		<tr>	
			<th><a href="index.php">Nuevo</a></th>
			<th colspan="8">Lista de usuarios</th>
		</tr>
		</thead>

		<tbody>	
			<tr>	
				<td>ID</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Correo</td>
				<td>Usuario</td>
				<td>Clave</td>
				<td>Telefono</td>
				<td colspan="2">Opciones</td>
			</tr>

			<?php
			include("cn.php");

			$insertar = "SELECT * FROM usuarios";
			$resultado = $conexion->query($insertar);
			while ($row=$resultado->fetch_assoc()) {
			?>

			

			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['nombre'] ?></td>
				<td><?php echo $row['apellidos'] ?></td>
				<td><?php echo $row['correo1'] ?></td>
				<td><?php echo $row['usuario'] ?></td>
				<td><?php echo $row['clave'] ?></td>
				<td><?php echo $row['telefono'] ?></td>
				<td><a href="#">Modificar</a></td>
				<td><a href="#">Eliminar</a></td>
			</tr>	
			<?php
			}
			?>
		</tbody>
		
		<a href="cerrar_session.php">Cerrar Sesion</a>
		
		</table>
	</center>

</body>
</html>