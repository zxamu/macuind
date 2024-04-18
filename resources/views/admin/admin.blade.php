<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
@include('partials.navbaradmin')

<div class="max-w mx-40 my-10 bg-gray rounded-lg p-10 shadow-lg" x-data="{ activeTab: 'profiles' }">

    <div class="text-xl font-bold p-5">Panel de control</div>

    <!-- INICIO MENU LATERAL -->
    <div class="md:flex">
        <ul class="flex-column text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
            <li>
                <button @click="activeTab = 'profiles'" :class="{ 'bg-gradient-to-r from-myblueg/80 to-myblueg2/80 text-white': activeTab === 'profiles' }" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white space-x-2">
                    <svg class="w-4 h-4 me-2 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                    <p>Perfiles</p>
                </button>
            </li>
            <li>
                <button @click="activeTab = 'tickets'" :class="{ 'bg-gradient-to-r from-myblueg/80 to-myblueg2/80 text-white': activeTab === 'tickets' }" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white space-x-2">
                    <svg class="w-4 h-4 me-2 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M1.5 6.375c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v3.026a.75.75 0 0 1-.375.65 2.249 2.249 0 0 0 0 3.898.75.75 0 0 1 .375.65v3.026c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 17.625v-3.026a.75.75 0 0 1 .374-.65 2.249 2.249 0 0 0 0-3.898.75.75 0 0 1-.374-.65V6.375Zm15-1.125a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-1.5 0V6a.75.75 0 0 1 .75-.75Zm.75 4.5a.75.75 0 0 0-1.5 0v.75a.75.75 0 0 0 1.5 0v-.75Zm-.75 3a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-1.5 0v-.75a.75.75 0 0 1 .75-.75Zm.75 4.5a.75.75 0 0 0-1.5 0V18a.75.75 0 0 0 1.5 0v-.75ZM6 12a.75.75 0 0 1 .75-.75H12a.75.75 0 0 1 0 1.5H6.75A.75.75 0 0 1 6 12Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
                    </svg>
                    <p>Tickets</p>
                </button>
            </li>
            <li>
                <button @click="activeTab = 'departments'" :class="{ 'bg-gradient-to-r from-myblueg/80 to-myblueg2/80 text-white': activeTab === 'departments' }" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white space-x-2">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18"><path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/></svg>
                    <p>Departamentos</p>
                </button>
            </li>
            <li>
                <button @click="activeTab = 'configuration'" :class="{ 'bg-gradient-to-r from-myblueg/80 to-myblueg2/80 text-white': activeTab === 'configuration' }" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white space-x-2">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z"/>
                    </svg>
                    <p>Configuracion</p>
                </button>
            </li>
        </ul>

        <!-- INICIO PERFILES DE USUARIO -->
        <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-show="activeTab === 'profiles'">
        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Perfiles de Usuarios</h3>


        <!-- BOTÓN DISPARADOR PARA MODAL CREAR NUEVO USUARIO -->
<!-- Incluir Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

<!-- Inicialización de Alpine.js y botón para abrir el modal -->
<div x-data="{ open: false }" class="flex justify-center relative">
    <!-- Contenedor para alinear el botón en la esquina derecha -->
    <div class="absolute top-0 right-0">
        <button @click="open = true" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
            Nuevo usuario
        </button>
    </div>

    <!-- Incluir el componente modal con el contexto de datos correcto -->
    <x-modal_usuarios x-bind:open="open" />
</div>
<!-- fin botón disparador -->
<br>
<br>
<br>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Correo</th>
                    <th scope="col" class="px-6 py-3">Rol</th>
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">John Doe</td>
                    <td class="px-6 py-4">john@macuin.com</td>
                    <td class="px-6 py-4">Administrador</td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
<!-- BOTÓN DISPARADOR PARA MODAL editar USUARIO -->
<!-- Incluir Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

<!-- Inicialización de Alpine.js y botón para abrir el modal -->
<div x-data="{ open: false }" class="flex justify-center relative">
    <!-- Contenedor para alinear el botón en la esquina derecha -->
    <div class="absolute top-0 right-0">
        <button @click="open = true" class="bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Editar
        </button>
    </div>

    <!-- Incluir el componente modal con el contexto de datos correcto -->
    <x-modal_editar_usuario x-bind:open="open" />
</div>
<!-- fin botón disparador -->
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Eliminar
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">Alejandra Hernandez</td>
                    <td class="px-6 py-4">alejandra@macuin.com</td>
                    <td class="px-6 py-4">Usuario</td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">

 <!-- BOTÓN DISPARADOR PARA MODAL CREAR NUEVO USUARIO -->
<!-- Incluir Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

<!-- Inicialización de Alpine.js y botón para abrir el modal -->
<div x-data="{ open: false }" class="flex justify-center relative">
    <!-- Contenedor para alinear el botón en la esquina derecha -->
    <div class="absolute top-0 right-0">
        <button @click="open = true" class="bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Editar
        </button>
    </div>

    <!-- Incluir el componente modal con el contexto de datos correcto -->
    <x-modal_editar_usuario x-bind:open="open" />
</div>
<!-- fin botón disparador -->
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Eliminar
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
        </div>
        <!-- FIN PERFILES DE USUARIO -->

        <!-- INICIO TICKETS -->
        <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-show="activeTab === 'tickets'">
            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Tickets</h3>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Número</th>
                        <th scope="col" class="px-6 py-3">Estado</th>
                        <th scope="col" class="px-6 py-3">Usuario</th>
                        <th scope="col" class="px-6 py-3">Auxiliar</th>
                        <th scope="col" class="px-6 py-3">Agregar Comentarios</th>
                        <th scope="col" class="px-6 py-3">Generar Reporte</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">Tic-012</td>
                        <td class="px-6 py-4">Atendido</td>
                        <td class="px-6 py-4">Charles Tejada</td>
                        <td class="px-6 py-4">María Fuentes</td>
                        <td class="px-6 py-4">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Agregar
                            </button>
                        </td>
                        <td class="px-6 py-4">
                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" onclick="generarReporte()">
                                Generar
                                
                            </button>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
<!-- FIN TICKETS -->

<!-- INICIO DEPARTAMENTOS -->
        <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-show="activeTab === 'departments'">
            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Departamentos</h3>
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-gray-200 p-6 rounded-lg">
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Compras</h4>


                </div>
                <div class="bg-gray-200 p-6 rounded-lg">
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Contabilidad</h4>


                </div>
                <div class="bg-gray-200 p-6 rounded-lg">
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Logística</h4>


                </div>
                <div class="bg-gray-200 p-6 rounded-lg">
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Producción</h4>


                </div>
                <div class="bg-gray-200 p-6 rounded-lg">
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Ventas</h4>


                </div>
                <div class="bg-gray-200 p-6 rounded-lg flex items-center justify-center">
                 <!-- BOTÓN DISPARADOR PARA MODAL crear departamento -->
<!-- Incluir Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

<!-- Inicialización de Alpine.js y botón para abrir el modal -->
<div x-data="{ open: false }" class="flex justify-center relative">
    <!-- Contenedor para alinear el botón en la esquina derecha -->
    <div class="absolute top-0 right-0">
        <button @click="open = true" class="bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Agregar
        </button>
    </div>

    <!-- Incluir el componente modal con el contexto de datos correcto -->
    <x-modal_agregar_departamento x-bind:open="open" />
</div>
<!-- fin botón disparador -->
                </div>
                </div>
                </div>

                <!-- FIN DEPARTAMENTOS -->


                <!-- INICIO CONFIGURACIÓN -->
                <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-show="activeTab === 'configuration'">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Configuración</h3>
    <div class="grid grid-cols-2 gap-4">
        <div class="bg-gray-200 p-6 rounded-lg">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Preferencias del Sistema</h4>
            <form>
                <div class="mb-4">
                    <label for="company-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la Empresa</label>
                    <input type="text" id="company-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa el nombre de tu empresa" required>
                </div>
                <div class="mb-4">
                    <label for="email-address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo Electrónico</label>
                    <input type="email" id="email-address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Guardar Cambios
                </button>
            </form>
        </div>
        <div class="bg-gray-200 p-6 rounded-lg">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Configuración de Tickets</h4>
            <form>
                <div class="mb-4">
                    <label for="ticket-prefix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prefijo de Tickets</label>
                    <input type="text" id="ticket-prefix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa el prefijo de los tickets" required>
                </div>
                <div class="mb-4">
                    <label for="ticket-expiration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expiración de Tickets</label>
                    <input type="number" id="ticket-expiration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa los días de expiración" required>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Guardar Cambios
                </button>
            </form>
        </div>
    </div>
                </div>

            <!-- FIN CONFIGURACIÓN -->


                </div>
                </div>
                </body>
</html>
