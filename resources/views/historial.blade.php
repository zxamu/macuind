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
       <!-- inicio tabla -->
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
      <button data-modal-target="popup-modal" data-modal-toggle="popup-modal">
        <svg class="h-6 text-white ml-72" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
        </svg>
      </button>
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

<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Quieres eliminar este ticket?</h3>
                <button data-modal-target="info-modal" data-modal-toggle="info-modal" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Si
                </button>
                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No</button>
            </div>
        </div>
    </div>
</div>

<div id="info-modal" class="hidden overflow-y-auto overflow-x-hidden  fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
  <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Info</span>
  <div>
    <span class="font-medium">Ticket borrado!</span> El ticket a sido borrado de tu historial.
  </div>
</div>

</body>
</html>


