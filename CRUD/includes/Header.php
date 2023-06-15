<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
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