<?php include "./database.php"; ?>
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM users where id = $id";
  $result = $conn->query($sql);
  if ($result and mysqli_num_rows($result) == 1) {
    $datos = mysqli_fetch_assoc($result);
    $name = $datos['name'];
    $email = $datos['email'];
    $ocupation = $datos['ocupation'];
    $phone_number = $datos['phone_number'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $ocupation = $_POST['ocupation'];
  $phone_number = $_POST['phone_number'];
  $sql = "UPDATE users SET name = '$name', email = '$email', ocupation = '$ocupation', phone_number = '$phone_number' WHERE id = $id";
  if ($conn->query($sql)) {
    header("Location: index.php");
  }
}
?>

<?php $title = "Crud - edit" ?>
<?php include "includes/Header.php"; ?>

<div class="flex flex-col justify-center bg-disabled h-60 px-20">
  <div class="flex bg-white h-24 rounded-lg justify-between items-center px-20">
    <h1 class="text-3xl text-primary font-medium">EDITAR USUARIO</h1>
  </div>
</div>
<div class="relative overflow-x-auto px-40 py-14">
  <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" class="grid grid-cols-4 gap-8">
    <div class="flex flex-col gap-6 col-span-2">
      <label for="name" class="text-lg font-medium">Nombre</label>
      <input type="text" name="name" id="name" placeholder="Richard" class="p-2 rounded border border-disabled" value="<?php echo $datos['name'] ?>">
    </div>
    <div class="flex flex-col gap-6 col-span-2">
      <label for="email" class="text-lg font-medium">Email</label>
      <input type="text" name="email" id="email" placeholder="piedpiper@net.com" class="p-2 rounded border border-disabled" value="<?php echo $datos['email'] ?>">
    </div>
    <div class="flex flex-col gap-6 col-span-2">
      <label for="ocupation" class="text-lg font-medium">Ocupacion</label>
      <input type="text" name="ocupation" id="ocupation" placeholder="Software Enginner" class="p-2 rounded border border-disabled" value="<?php echo $datos['ocupation'] ?>">
    </div>
    <div class="flex flex-col gap-6 col-span-2">
      <label for="phone_number" class="text-lg font-medium">Telefono</label>
      <input type="text" name="phone_number" id="phone_number" placeholder="000-000-00-00" class="p-2 rounded border border-disabled" value="<?php echo $datos['phone_number'] ?>">
    </div>
    <div class="flex col-span-4 gap-8">
      <button type="submit" name="update" id="update" class="flex gap-2 justify-center items-center w-36 h-12 bg-primary text-white rounded text-2xl font-light">
        <ion-icon name="save" class="text-2xl"></ion-icon>
        Guardar
      </button>
      <div class="flex gap-2 justify-center items-center w-36 h-12 bg-danger text-white rounded">
        <ion-icon name="close-circle" class="text-2xl"></ion-icon>
        <a href="/index.php" class="text-2xl font-light">Cancelar</a>
      </div>
    </div>
  </form>
</div>

<?php include "includes/Footer.php"; ?>