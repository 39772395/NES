<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="usuarios";

$link =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$connet)
{
    die("No hay conexion;".mysqli_connet_error());
}
$cedula =$_POST["Cedulas"];

$query =mysqli_query($conn,"SELECT * FROM usuarios WHERE  formulario = ´".$cedula."´ ");
$nr = mysqli_num_rows($query);

$rs=mysql_query($conn, "SELECT * FROM usuarios") or die ("algo ha ido mal en la consulta a la base de datos $query");
?>