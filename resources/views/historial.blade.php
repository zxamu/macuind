<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-cover bg-no-repeat bg-center h-screen md:bg-top" style="background-image: url('images/bubblebg.png');">
    @include('partials.navbar')

    <div >
        <p class="mt-16 ml-40 text-2xl font-bold leading-9 tracking-tight text-black ">Hola Alejandra, este es tu historial de reportes ...</p>
        <div class="max-w mx-40 my-10 bg-gradient-to-t from-myblueg/80 to-myblueg2/80 rounded-lg p-10 shadow-lg">
            <div class="space-x-20 flex text-xl font-bold pb-5">
                <p>Tipo de problema</p>
                <p>ID</p>
                <p class="pl-32">Resumen</p>
                <p class="pl-32">Informante</p>
                <p class="pl-10">Asignado</p>
                <p class="pl-20">Estado</p>
                <p>Tiempo</p>
            </div>
            <div class="h-10 bg-white/75 rounded-lg p-10 shadow-lg space-x-20 items-center flex mb-5">
                <p >Hardware</p>
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="pl-12 text-sky-600 underline underline-offset-1" type="button">
                    T-1223
                </button>
                <p class="pl-12">Atasco de hoja en impresora</p>
                <p class="pl-12">Alejandra Hernandez</p>
                <p class="pl-1 pr-2">Tecnico Auxiliar 2</p>
                <div class=" pl-20">
                    <div class="h-5 w-5 bg-yellow-300 rounded-full"></div>
                </div>
                <p class="pl-10">2:32</p>
            </div>
            <div class="h-10 bg-white/75 rounded-lg p-10 shadow-lg space-x-20 items-center flex mb-5">
                <p >Hardware</p>
                <a href="" class="pl-12">IT-1223</a>
                <p class="pl-12">Atasco de hoja en impresora</p>
                <p class="pl-12">Alejandra Hernandez</p>
                <p class="pl-1 pr-2">Tecnico Auxiliar 2</p>
                <div class=" pl-20">
                    <div class="h-5 w-5 bg-yellow-300 rounded-full"></div>
                </div>
                <p class="pl-10">2:32</p>
            </div>
            <div class="h-10 bg-white/75 rounded-lg p-10 shadow-lg space-x-20 items-center flex mb-5">
                <p >Hardware</p>
                <a href="" class="pl-12">IT-1223</a>
                <p class="pl-12">Atasco de hoja en impresora</p>
                <p class="pl-12">Alejandra Hernandez</p>
                <p class="pl-1 pr-2">Tecnico Auxiliar 2</p>
                <div class=" pl-20">
                    <div class="h-5 w-5 bg-yellow-300 rounded-full"></div>
                </div>
                <p class="pl-10">2:32</p>
            </div>
            <div class="h-10 bg-white/75 rounded-lg p-10 shadow-lg space-x-20 items-center flex mb-5">
                <p >Hardware</p>
                <a href="" class="pl-12">IT-1223</a>
                <p class="pl-12">Atasco de hoja en impresora</p>
                <p class="pl-12">Alejandra Hernandez</p>
                <p class="pl-1 pr-2">Tecnico Auxiliar 2</p>
                <div class=" pl-20">
                    <div class="h-5 w-5 bg-yellow-300 rounded-full"></div>
                </div>
                <p class="pl-10">2:32</p>
            </div>
            <div class="h-10 bg-white/75 rounded-lg p-10 shadow-lg space-x-20 items-center flex mb-5">
                <p >Hardware</p>
                <a href="" class="pl-12">IT-1223</a>
                <p class="pl-12">Atasco de hoja en impresora</p>
                <p class="pl-12">Alejandra Hernandez</p>
                <p class="pl-1 pr-2">Tecnico Auxiliar 2</p>
                <div class=" pl-20">
                    <div class="h-5 w-5 bg-yellow-300 rounded-full"></div>
                </div>
                <p class="pl-10">2:32</p>
            </div>
        </div>
    </div>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
<!-- Contenedor principal -->
  <!-- Tarjeta -->
  <div class="bg-gradient-to-t from-myblueg to-myblueg2 rounded-lg shadow-lg p-10">
    <!-- Encabezado -->
    <div class="flex items-center mb-0">
      <h2 class="text-xl font-semibold text-white mr-3">No puedo acceder a mi correo</h2>
      <div class="h-5 w-5 bg-lime-300 rounded-full mt-1"></div>
      <span class="text-white px-2 py-1 text-sm ml-auto">IT-1233</span>
    </div>

    <div class="text-white font-extralight mb-3">
        <p>Software</p>
    </div>

    <!-- Contenido -->
    <div class="flex space-x-10">
        <div>
            <div>
            <p class="text-white mb-4">El día de hoy al querer entrar a mi correo electrónico,
            <br>
            me apareció el siguiente error y no he podido pasar de esta parte.</p>
            <img src="images/imgexample.png" alt="Error" class="mb-4">
            </div>

            <div>
                <input type="text" placeholder="Escribe un mensaje..." class="w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-3">
                <div class="bg-gray-100 p-5 h-32 rounded-lg">
            </div>
        </div>
        </div>
        <!-- Detalles -->
        <div class="bg-gradient-to-b from-myblueg2 rounded-lg p-6">
        <div class="justify-between mb-2">
            <span class="text-white">Responsable:</span>
            <div class="h-10 bg-white/75 rounded-lg p-2 shadow-lg space-x-20 items-center flex mb-2">
                <span class="font-semibold ">Técnico Auxiliar 1</span>
            </div>
        </div>
        <div class="justify-between mb-2">
            <span class="text-white">Importancia:</span>
            <div class="h-10 bg-white/75 rounded-lg p-2 shadow-lg space-x-20 items-center flex mb-2">
                <span class="font-semibold">Alta</span>
            </div>
        </div>
        <div class="justify-between mb-2">
            <span class="text-white">Área:</span>
            <div class="h-10 bg-white/75 rounded-lg p-2 shadow-lg space-x-20 items-center flex mb-2">
                <span class="font-semibold">Finanzas</span>
            </div>
        </div>
        <div class="justify-between mb-4">
            <span class="text-white">Tiempo:</span>
            <div class="h-10 bg-white/75 rounded-lg p-2 shadow-lg space-x-20 items-center flex mb-2">
                <span class="font-semibold">1d 3h</span>
            </div>
        </div>
        </div>
    </div>

    <!-- Conversación -->
    <div class="flex">

    </div>
</div>

</body>
</html>


