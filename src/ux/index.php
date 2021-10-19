<!--// index.php
// 18/10/2021
// Leire Villarroya Martínez
// Index del backend donde se muestran los métodos de la lógica y se pueden probar -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mostrar datos</title>

</head>

<body>
    <?php include('../conexiones/conexion.php'); ?>
    <br>
    <table>
        <tr>
            <h1>Listado de datos</h1>
        </tr>
        <tr>
            <th>Id</th>
            <th>Mediciones</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Major</th>
            <th>Minor</th>
        </tr>
        <?php
          $conn=new mysqli("localhost", "root", "", "appleire");
    if($conn->connect_errno){
   echo "se ha producido un error en la conexion"; 
}
          $sql="select * from tabla";
          $resultado=mysqli_query($conn, $sql);
          
          while($mostrar=mysqli_fetch_array($resultado)){
          ?>

        <tr>
            <td><?php echo $mostrar['ID']?></td>
            <td><?php echo $mostrar['Medicion']?></td>
            <td><?php echo $mostrar['Latitud']?></td>
            <td><?php echo $mostrar['Longitud']?></td>
            <td><?php echo $mostrar['Major']?></td>
            <td><?php echo $mostrar['Minor']?></td>
        </tr>

        <?php
          }
              ?>
    </table>

    <h3>Mostrar últimas mediciones</h3>
    <form action="obtenerUltimasMediciones.php" method="POST">
        <label for="cuantas">Inserte las últimas mediciones que quiere coger</label>
        <br>
        <input type="text" name="cuantas" id="cuantas" required>
        <input type="submit" value="Mostrar">
    </form>
</body>

</html>
