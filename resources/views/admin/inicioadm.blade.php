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

<div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Hola Jhon, esto es lo que a pasado...</h1>

        <div class="grid grid-cols-4 gap-4">
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-lg font-bold mb-2">240</h2>
                <p class="text-gray-500">Inicios de sesión</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-lg font-bold mb-2">12,356</h2>
                <p class="text-gray-500">Tickets atendidos</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-lg font-bold mb-2">1,500</h2>
                <p class="text-gray-500">Operaciones exitosas</p>
            </div>

        </div>
        <div x-show="searchVisible" class="mt-4 bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-lg font-bold mb-2">Últimos 10 tickets</h2>
                    <table class="w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="py-2 text-left">Número</th>
                                <th class="py-2 text-left">Estado</th>
                                <th class="py-2 text-left">Usuario</th>
                                <th class="py-2 text-left">Cliente</th>
                                <th class="py-2 text-left">Operación</th>
                                <th class="py-2 text-left">Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2">Tic-012</td>
                                <td class="py-2">Atendiendo</td>
                                <td class="py-2">Charles Tejada</td>
                                <td class="py-2">Maria Fuentes</td>
                                <td class="py-2">Fallas de Red</td>
                                <td class="py-2">28/02/2024</td>
                            </tr>
                            <tr>
                                <td class="py-2">Tic-012</td>
                                <td class="py-2">Atendiendo</td>
                                <td class="py-2">Charles Tejada</td>
                                <td class="py-2">Maria Fuentes</td>
                                <td class="py-2">Fallas de Red</td>
                                <td class="py-2">28/02/2024</td>
                            </tr>
                            <tr>
                                <td class="py-2">Tic-012</td>
                                <td class="py-2">Atendiendo</td>
                                <td class="py-2">Charles Tejada</td>
                                <td class="py-2">Maria Fuentes</td>
                                <td class="py-2">Fallas de Red</td>
                                <td class="py-2">28/02/2024</td>
                            </tr>
                            <tr>
                                <td class="py-2">Tic-012</td>
                                <td class="py-2">Atendiendo</td>
                                <td class="py-2">Charles Tejada</td>
                                <td class="py-2">Maria Fuentes</td>
                                <td class="py-2">Fallas de Red</td>
                                <td class="py-2">28/02/2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    </div>

</body>
</html>
