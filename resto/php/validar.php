<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contaseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('conexion.php');

$conexion=mysqli_connect("localhost","root","","reposteria");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_master_query($resultado);

$filas=mysqli_num_rows($resultado);

if ($filas) 
{
	header("location:menu.php");
}

else
{
	?>
	<?php
	include("login.php");
	?>
	<h1> EROOR EN LA IDENTIFICACION </h1>
	<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

