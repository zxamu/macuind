<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-cover bg-no-repeat bg-center h-screen md:bg-top" style="background-image: url('images/bubblebg.png');">
    @include('partials.navbar')
<br>
   <div>  <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-blue-900">Administrar perfil</h2></div>

     <!-- IMAGEN: AVATAR -->
     <div class=" justify-center px-6 py-12 lg:px-8">
        <img class="mx-auto h-52 w-auto rounded-full" src="images/profile.png" alt="Your Company">
      </div>

      <div class="text-center">
        <button type="button" class="rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-900">Agregar foto de perfil</button>
        <br>
        <br>
        <button type="button" class="rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-900">Editar foto de perfil</button>
    </div>
</body>
</html>
