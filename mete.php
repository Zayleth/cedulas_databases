<?php
// las funciones devuelven un valor -> booleano (verdadero-falso)
$conex = mysqli_connect("localhost", "root", "", "cedulas_database") or die("Could not connect to database");

if ($_POST["d1"] !== "" and $_POST["d2"] !== "" and $_POST["d3"] !== "") {


$sql = "insert into cedulas values ('', '$_POST[d1]', '$_POST[d2]', '$_POST[d3]', 0)";

if (mysqli_query($conex, $sql)) {
  echo "Successful login";
} else {
  echo "Please try later";
}

} else {
  echo "Can not have empty fields";
}

?>