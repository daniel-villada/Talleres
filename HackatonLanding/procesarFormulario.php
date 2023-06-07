<?php
// definimos las variables de conexion a la base de datos
$SERVER_NAME = "localhost";
$USER = "root";
$PASSWORD = "danieldev";
$DB_NAME = "hackatonDB";

// creamos la conexion a la base de datos
$conn = new mysqli($SERVER_NAME, $USER, $PASSWORD, $DB_NAME);

//validamos si existe algun error con la base de datos
if($conn->connect_error){
    die("Conexion Fallida: " . $conn->connect_error);
}

// Verificar si se han enviado los datos del formulario
$name = $_POST["name"];
$email = $_POST["email"];
$meetups = $_POST["meetups"];
$schedules = $_POST["schedules"];

// Preparamos la consulta SQL para insertar los datos a la tabla eventos
$sql = "INSERT INTO eventos (name, email, meetups, schedules) VALUES('$name', '$email', '$meetups', '$schedules')";

// Ejecutamos la consulta y verificamos si se han insertado correctamente

if($conn->query($sql) === TRUE){
    echo "Te has registrado a uno de nuestros eventos";
}else{
    echo "Error al registrarte: " . $conn->error;
}

// Cierra la conexion a la base de datos
$conn->close();
?>