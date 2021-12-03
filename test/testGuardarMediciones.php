<!-- // guardarMediciones.php
// 18/10/2021
// Leire Villarroya Martínez
// Guardar las mediciones a la bbdd -->
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //para utilizar el método post
    require_once '../conexiones/conexion.php';
    $data = file_get_contents('php://input');
    //php://input : leer datos del método POST sin procesar
    
    $jsonData=json_decode($data);
    //decodifico a json
    
    //índice que tiene el objeto en el json
    $Medicion=$jsonData->{'Medicion'};;
    $Latitud=$jsonData->{'Latitud'};;
    $Longitud=$jsonData->{'Longitud'};;
    
    $conn=new mysqli("localhost", "root", "", "appleire");
    if($conn->connect_errno){
   echo "se ha producido un error en la conexion"; 
}
    
    //$query="INSERT INTO tabla (Medicion) VALUES('".$Medicion."')";
    // Insertar a la base de datos
    $query="INSERT INTO tabla(Medicion, Latitud, Longitud) VALUES (5,6,7)"; //Medición Latitud Longitud
    
    //para coger el último ID de la tabla
    $sql="SELECT MAX(ID) AS ID FROM tabla";
          $resultado=mysqli_query($conn, $sql);
    
    //comprobar que los datos se han introducido
    $resultado=$conn->query($query);
    if($resultado==true){
        //si todo sale bien, entonces:
    echo "Los datos se introducen de forma correcta";
}else{
        //si algo va mal
    echo "Error al insertar datos";
}
    
    //guardamos en variables el resultado de la última fila para comprobar
    //que los valores que hay dentro son los que hemos introducido
    $mostrar=mysqli_fetch_array($resultado);
    $lastMedicion=$mostrar['Medicion'];
    $lastLatitud=$mostrar['Latitud'];
    $lastLongitud=$mostrar['Longitud'];
    
    
    $resultado=$conn->query($query);
    if($lastMedicion==5){
        //si todo sale bien, entonces:
    echo "La medición se ha introducido de forma correcta";
        
        if($lastLatitud==6){
        //si todo sale bien, entonces:
    echo "La latitud se ha introducido de forma correcta";
            
            if($lastLongitud==7){
        //si todo sale bien, entonces:
    echo "La longitud se ha introducido de forma correcta";
}else{
        //si algo va mal
    echo "Error al insertar longitud";
}
            
}else{
        //si algo va mal
    echo "Error al insertar latitud";
}
        
}else{
        //si algo va mal
    echo "Error al insertar medición";
}
    
}
