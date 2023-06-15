<?php include "./showData.php"; ?>

<?php $title = "Crud - Index"; ?>
<?php include "includes/Header.php"; ?>

<div class="flex flex-col justify-center bg-disabled h-60 px-20">
    <div class="flex bg-white h-24 rounded-lg justify-between items-center px-20">
        <h1 class="text-3xl text-primary font-medium">USUARIOS</h1>
        <div class="flex justify-center items-center w-36 h-12 bg-primary text-white rounded">
            <a href="create.php" class="text-2xl font-light flex gap-4 justify-center items-center "><ion-icon name="person-add" class="text-2xl"></ion-icon>agregar</a>
        </div>
    </div>
</div>
<div class="px-40 py-20">
    <table class="w-full drop-shadow-lg">
        <thead class="bg-primary border-b-2 border-gray-200 text-white">
            <tr class="">
                <th class="rounded-tl-lg p-3">ID</th>
                <th class="p-3 text-lg font-semibold tracking-wide text-left">Nombre</th>
                <th class="p-3 text-lg font-semibold tracking-wide text-left">Correo</th>
                <th class="p-3 text-lg font-semibold tracking-wide text-left">Ocupación</th>
                <th class="p-3 text-lg font-semibold tracking-wide text-left">Teléfono</th>
                <th class="rounded-tr-lg p-3">Acciones</th>
            </tr>
        </thead>
        <tbody class="bg-white text-secondary text-lg">
            <?php
            while ($datos = $getData->fetch_array()) { ?>
                <tr class="border-b-2">
                    <td class="p-3 text-md text-center font-light"><?php echo $datos['id'] ?></td>
                    <td class="p-3 text-md text-left font-light"><?php echo $datos['name'] ?></td>
                    <td class="p-3 text-md text-left font-light"><?php echo $datos['email'] ?></td>
                    <td class="p-3 text-md text-left font-light"><?php echo $datos['ocupation'] ?></td>
                    <td class="p-3 text-md text-left font-light"><?php echo $datos['phone_number'] ?></td>
                    <td class="flex justify-center items-center  py-4 gap-4">
                        <a href="edit.php?id=<?php echo $datos["id"] ?>"><ion-icon name="ios-create" class="text-warning text-4xl"></ion-icon></a>
                        <a href="deleteData.php?id=<?php echo $datos["id"] ?>"><ion-icon name="ios-trash" class="text-danger text-4xl"></ion-icon></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include "includes/Footer.php"; ?>