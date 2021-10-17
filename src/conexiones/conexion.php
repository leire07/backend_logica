<?php
    
    $conn=new mysqli("localhost", "root", "", "appleire");
    if($conn->connect_errno){
   echo "se ha producido un error en la conexion"; 
}

?>