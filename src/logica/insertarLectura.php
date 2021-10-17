<?php

include '../logica/conexion.php';
//comprobar que el metodo es POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //declaracion de las variables a subir
$momento;
//en caso de recibir un valor para la variable en cuestion lo toma
if (isset($_POST['momento']))
{
    $momento = $_POST['momento'];
}
$ubicacion;

if (isset($_POST['ubicacion']))
{
    $ubicacion = $_POST['ubicacion'];
}
$valor;

if (isset($_POST['valor']))
{
    $valor = $_POST['valor'];
}
$idMagnitud;

if (isset($_POST['idMagnitud']))
{
    $idMagnitud = $_POST['idMagnitud'];
}
    //consulta sql para introducir los valores
$consulta="insert into lecturas values('$momento','$ubicacion','$valor','$idMagnitud')";
mysqli_query($conexion, $consulta) or die (mysqli_error());
mysqli_close($conexion);
}
?>