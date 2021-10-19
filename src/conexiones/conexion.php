<!-- // conexion.php
// 18/10/2021
// Leire Villarroya Martínez
// Para hacer la conexión a la bbbdd -->
   <?php
    
    $conn=new mysqli("localhost", "root", "", "appleire");
    if($conn->connect_errno){
   echo "se ha producido un error en la conexion"; 
}

?>