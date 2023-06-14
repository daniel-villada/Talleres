<?php
include "database.php";

if (isset($_POST['saveData'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $ocupation = $_POST['ocupation'];
  $phone_number = $_POST['phone_number'];

  $sql = "INSERT INTO users(name, email, ocupation, phone_number) VALUES('$name', '$email', '$ocupation', '$phone_number')";

  if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
  }
}
