<!-- 
// obtenerUltimasMediciones.php
// 18/10/2021
// Leire Villarroya Martínez
<!-- Z -> obtenerUltimasMediciones() -> [mediciones] -->
<?php //Abrimos php
	//hacemos la conexion para la base de datos:
	$conn=new mysqli("localhost", "root", "", "appleire");
    if($conn->connect_errno){
   echo "se ha producido un error en la conexion"; 
}

    //Recoger valor que introduce el usuario
    $valor = $_POST["cuantas"];
    //echo $valor; 
    // el valor

    //para coger el tamaño de las filas
    $sql2 = "SELECT COUNT(*) ID FROM tabla";
    $result = mysqli_query($conn, $sql2);
    $fila = mysqli_fetch_assoc($result);
    $fila2=(int)implode( "", $fila);
    //echo $fila2;
    echo "<br>";
    //echo 'Número de total de registros: ' . $fila['ID'];

    $cuantasCoger=$fila2 - $valor;
    //echo  $cuantasCoger;

	//Se Hace la sentencia sql:
	$sql="SELECT * FROM tabla WHERE ID>$cuantasCoger"; //->Donde * es igual a todos los campos entonces la sentencia seria esta-> seleccionamos todos los campos de la tabla
	//ejecutamos la sentencia de slq:
	$resultado=mysqli_query($conn, $sql);
	//traenos todos los valores en un array:
	$datos=mysqli_fetch_array($resultado);
    echo "<br>";

    
	//imprimimos los datos de manera dinamica
	echo "<table border='1'>";
	echo"<tr>";
	echo "<th align='center'><b>ID</th>";
    echo "<th align='center'><b>Medicion</th>";
    echo "<th align='center'><b>Latitud</th>";
    echo "<th align='center'><b>Longitud</th>";
	echo"</tr>";
    echo "<br>";
    
	for($i=0; $i<$datos; $i--){
		echo"<tr><td>$datos[0]</td>";
		echo"<td>$datos[1]</td>";
		echo"<td>$datos[2]</td>";
        echo"<td>$datos[3]</td>";
		echo"</tr>";
		$datos=mysqli_fetch_array($resultado);
	}
	echo"</table>";
?>
