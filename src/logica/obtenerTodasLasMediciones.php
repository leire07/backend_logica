// obtenerTodasLasMediciones --> [mediciones]


<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once '../logica/conexion.php';
    $data = file_get_contents('php://input');
    echo $data;
    $jsonData=json_decode($data);
    $Medicion=$jsonData->{'Medicion'};;
    $Latitud=$jsonData->{'Latitud'};;
    $Longitud=$jsonData->{'Longitud'};;
    
    //$query="INSERT INTO tabla (Medicion) VALUES('".$Medicion."')";
    $query="SELECT FROM tabla(Medicion, Latitud, Longitud) VALUES ('".$Medicion."','".$Latitud."','".$Longitud."')";
    
    $resultado=$conn->query($query);
    if($resultado==true){
    echo "Los datos se introducen de forma correcta";
}else{
    echo "Error al insertar datos";
}
    
}