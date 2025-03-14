<?php
//conexion al servidor de MySQL
$link = mysqli_connect("localhost", "root", "", "informacion_alumnos");
//enviar la consulta a la base de datos
$consulta = mysqli_query($link ,"SELECT * FROM alumno WHERE cuenta = '".$_POST["cuenta"]."'");
//mostrar los resultados
echo "<b>Resultados de la busqueda:</b><br/>";
while ($registro = mysqli_fetch_assoc($consulta))
{
echo "<b>Cuenta:</b> ".$registro['cuenta']."<br/>";
echo "<b>Nombre:</b> ".$registro['nombre']."<br/>";
echo "<b>Campus:</b> ".$registro['campus']."<br/>";
echo "<b>Carrera:</b> ".$registro['carrera']."<br/>";
}
?>