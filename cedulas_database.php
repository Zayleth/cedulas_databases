<?php
$conex = mysqli_connect("localhost", "root", "", "cedulas_database") or die("Could not connect to database");

// primer parametro - donde se encuentra la base de datos
// segundo parametro - quien es el usuario de la base de datos -> root (en este caso)
// tercer parametro - clave de la base de datos
// cuarto parametro - nombre de la base de datos

$sql = "insert into cedulas values ('', 10852465, 'Carlos', 'Gonzales', 0)"; // creamos variable

if (mysqli_query($conex, $sql)) {
  echo "Successful login";
} else {
  echo "Please try later";
}


// mysqli_query($conex, $sql) - funcion que se encarga de enviar una consulta a la bse de datos, recibe dos parametros (conexion a la base de datos, lo que quiero hacer con la base de datos -> en este caso insertar datos)

?>

