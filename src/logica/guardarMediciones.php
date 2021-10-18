<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexiones/conexion.php';
    $data = file_get_contents('php://input');
    echo $data;
    $jsonData=json_decode($data);
    $Medicion=$jsonData->{'Medicion'};;
    $Latitud=$jsonData->{'Latitud'};;
    $Longitud=$jsonData->{'Longitud'};;
    
    //$query="INSERT INTO tabla (Medicion) VALUES('".$Medicion."')";
    // Insertar a la base de datos
    $query="INSERT INTO tabla(Medicion, Latitud, Longitud) VALUES ('".$Medicion."','".$Latitud."','".$Longitud."')";
    
    $resultado=$conn->query($query);
    if($resultado==true){
        //si todo sale bien, entonces:
    echo "Los datos se introducen de forma correcta";
}else{
        //si algo va mal
    echo "Error al insertar datos";
}
    
}