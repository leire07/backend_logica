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
        </tr>

        <?php
          }
              ?>
    </table>

    <h3>mostrar últimas mediciones</h3>
    <form action="../logica/obtenerUltimasMediciones.php" method="POST">
        <p>Cuantas</p>
        <label for="cuantas">Ultimas mediciones que quiere coger</label>
        <br>
        <input type="text" name="cuantas" id="cuantas" required>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
