<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="app.css">
    <title>Inicio de Sesión</title>
</head>

<body class="bg-cover bg-no-repeat bg-center h-screen md:bg-top" style="background-image: url('images/Fondo_sin_boton_inicio_sesión.png');">

    <!-- NOMBRE DEL SOFTWARE -->
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <br>
          <br>
          <br>
          <br>
         <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-white">Macuin Dashboard</h2>
         <h4 class="mt-2 text-center text-2xl  leading-9 tracking-tight text-white">Iniciar sesión</h4>
        </div>

        <!-- IMAGEN: AVATAR -->
      <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <img class="mx-auto h-52 w-auto" src="images/Avatar_2.png" alt="Your Company">
      </div>

<!-- INICIO DEL FORMULARIO -->
        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="#" method="">
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-white">Email o Nombre de Usuario</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-white">Contraseña</label>
                <div class="text-sm">
                  <a href="#" class="font-semibold text-white hover:text-blue-500">¿Olvidó su contraseña?</a>
                </div>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>

            <div>
                <a href="/nuevo">
                    <button type="button" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-900">Iniciar sesión</button>
                </a>
            </div>
          </form>

         <!--  <p class="mt-10 text-center text-sm text-gray-500">
            Not a member?
            <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
          </p> -->
        </div>
      </div>

</body>
</html>
