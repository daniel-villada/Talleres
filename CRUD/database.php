<?php
$SERVER = "localhost";
$USER = "root";
$PASS = "danieldev";
$DBNAME = "crudDB";

$conn = new mysqli($SERVER, $USER, $PASS, $DBNAME);

if ($conn->connect_error) {
  die("Ha fallado la conexion a la base de datos" . $conn->connect_error);
}
