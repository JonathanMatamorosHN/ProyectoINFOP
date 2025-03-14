<?php
//conexion al servidor de MySQL
$link = mysqli_connect("localhost", "root", "", "informacion_alumnos");
//revisar si al menos viene nombre y numero de cuenta
if ( $_POST["cuenta"] == null || $_POST["nombre"] == null )
{
echo "debe escribir el nombre y numero de cuenta";
return;
}
//ejecutar el comando de INSERCION
$comando = mysqli_query($link, "INSERT
alumno(cuenta,nombre,campus,carrera)
VALUES('".$_POST["cuenta"]."','".$_POST["nombre"]."',
'".$_POST["campus"]."','".$_POST["carrera"]."')");
//si ocurre un error avisa
if (!$comando)
{
echo "Ha ocurrido un error";
}
else
{
echo "Alumno agregado correctamente";
}
?>
