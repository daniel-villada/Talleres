<?php
include "./database.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM users WHERE id = $id";

  if ($conn->query($sql)) {
    header("Location: index.php");
  }
}
