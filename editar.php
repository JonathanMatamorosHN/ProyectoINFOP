<?php
//conexion al servidor de MySQL
$link = mysqli_connect("localhost", "root", "","informacion_alumnos");
//revisar si viene el numero de cuenta y la nueva carrera
if ( $_POST["cuenta"] == null || $_POST["nueva carrera"] == null )
{
echo "Debe escribir el numero de cuenta y la carrera";
return;
}
//ejecutar el comando UPDATE
$comando = mysqli_query($link,
"UPDATE alumno SET carrera = '".$_POST["carrera"]."'
WHERE cuenta = '".$_POST["cuenta"]."'");
//si ocurre un error avisa
if (!$comando)
{
echo "Ha ocurrido un error";
}
else
{
echo "Cambio de carrera hecho exitosamente";
}
?>