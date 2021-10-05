<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mostrar datos</title>

  </head>
  <body>
  <?php include('conexion.php'); ?>
  <br>
      <table>
          <tr><h1>Listado de datos</h1></tr>
          <tr>
              <th>Id</th>
              <th>Mediciones</th>
          </tr>
          <?php
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
  </body>
</html>
