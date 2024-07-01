<table border="1">
    <tr><th>ID</th><th>Cedula</th><th>Nombre</th><th>Apellido</th><th>Status</th></tr>

    <?php
    $conex = mysqli_connect("localhost", "root", "", "cedulas_database") or die("Could not connect to database");

    $sql = "SELECT * FROM cedulas WHERE cedula = '$_POST[d1]'";
    $consulta = mysqli_query($conex, $sql); /* mysqli_query($conex, $sql) - funcion que se encarga de enviar una consulta a la base de datos, recibe dos parametros (conexion a la base de datos, lo que quiero hacer con la base de datos -> en este caso insertar datos) */

    while($ver = mysqli_fetch_array($consulta)) {
    ?>

    <tr>
      <td>
        <?php echo $ver[0]; ?>
      </td>
      
      <td>
        <?php echo $ver[1]; ?>
      </td>
      
      <td>
        <?php echo $ver[2]; ?>
      </td>

      <td>
        <?php echo $ver[3]; ?>
      </td>

      <td>
        <?php echo $ver[4]; ?>
      </td>
    </tr>

<?php } ?>

</table>