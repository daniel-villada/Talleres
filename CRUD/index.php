<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - Sena</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- Custom Tailwindcss colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#00257E',
                        disabled: '#D9D9D9',
                        secondary: '#A0A0A0',
                        warning: '#FD8127',
                        danger: '#FD3030'
                    }
                }
            }
        }
    </script>
</head>

<body>
    <div class="bg-primary h-32 flex justify-start items-center px-20">
        <p class="text-white text-4xl font-bold">CRUD</p>
    </div>
    <div class="flex flex-col justify-center bg-disabled h-60 px-20">
        <div class="flex bg-white h-24 rounded-lg justify-between items-center px-20">
            <h1 class="text-3xl text-primary font-medium">USUARIOS</h1>
            <div class="flex gap-4 justify-center items-center w-36 h-12 bg-primary text-white rounded">
                <ion-icon name="person-add" class="text-2xl"></ion-icon>
                <a href="#" class="text-2xl font-light">agregar</a>
            </div>
        </div>
    </div>
    <div class="h-[64vh] px-20 py-14">
            <table class="w-full text-center border-2">
                <tr class="bg-primary text-white text-xl h-14">
                    <th class="rounded-tl-lg">ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Ocupación</th>
                    <th>Teléfono</th>
                    <th class="rounded-tr-lg">Acciones</th>
                </tr>
                <tr class="text-secondary text-lg">
                    <td>1</td>
                    <td>daniel villada</td>
                    <td>developer@email.com</td>
                    <td>developer</td>
                    <td>3175355243</td>
                    <td class="flex justify-center gap-4">
                        <a href="#"><ion-icon name="ios-create" class="text-warning text-4xl"></ion-icon></a>
                        <a href="#"><ion-icon name="ios-trash" class="text-danger text-4xl"></ion-icon></a>
                    </td>
                </tr>
            </table>
    </div>
    <!-- IOINICONS -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>