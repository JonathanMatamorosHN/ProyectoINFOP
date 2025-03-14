<?php
//conexion al servidor de MySQL
$link = mysqli_connect("localhost", "root", "", "informacion_alumnos");
//revisar si viene el numero de cuenta
if ( $_POST["cuenta"] == null )
{
echo "debe escribir el numero de cuenta";
return;
}
//ejecutar el comando UPDATE
$comando = mysqli_query($link,
"DELETE FROM alumno WHERE cuenta = '".$_POST["cuenta"]."'");
//si ocurre un error avisa
if (!$comando)
{
echo "Ha ocurrido un error";
}
else
{
echo "Alumno eliminado exitosamente";
}
?>