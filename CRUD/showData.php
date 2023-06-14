<?php
include_once "./database.php";

$sql = "SELECT id, name, email, ocupation, phone_number from users";
$getData = $conn->query($sql);
