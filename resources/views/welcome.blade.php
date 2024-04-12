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
    <h4 class="text-center text-2xl font-bold dark:text-white">Hola, ¿Cuál es el problema?</h4>
    <form id="formulario" class="max-w mx-40 my-10 bg-gradient-to-t from-myblueg/80 to-myblueg2/80 rounded-lg p-10">
        <div class="space-y-5">
        <div >
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Resumen</label>
            <input type="resumen" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Resumen corto del problema" required />
        </div>
        <!-- Empiezan los agregados -->
        <div>
            <label for="area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">¿En qué área de trabajo se localiza?</label>
            <select id="area" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required >
                <option selected>Área de trabajo</option>
                <option value="CO">Compras</option>
                <option value="CD">Contabilidad</option>
                <option value="LO">Logística</option>
                <option value="PR">Producción</option>
                <option value="VE">Ventas</option>
            </select>
        </div>
        <!-- Empiezan los agregados -->
        <div class="">
            <label for="detalles" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detalles</label>
            <div class="flex space-x-2">
                <input type="text" id="detalles" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Detalla el problema, soluciones que intentaste, etc." required />
                <label for="fileInput" class="cursor-pointer right-0 top-0 mt-3 mr-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded">
                    <svg class="h-5" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13"></path>
                    </svg>
                </label>
                <input id="fileInput" type="file" class="hidden">
            </div>
        </div>
        <!-- Empiezan los agregados -->
        <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de problema</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required >
                <option selected>Selecciona problema</option>
                <option value="FO">Falla de Office</option>
                <option value="FR">Fallas de red</option>
                <option value="ES">Errores de software</option>
                <option value="EH">Errores de hardware</option>
                <option value="MP">Mantenimiento preventivo</option>
            </select>
        </div>
        <!-- Empiezan los agregados -->
        <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nivel de importancia</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Detalla los problemas" required >
                <option selected>Nivel</option>
                <option value="NU">No urgente</option>
                <option value="NO">Normal</option>
                <option value="UR">Urgente</option>
            </select>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
        </div>




    </form>


    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('formulario').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que el formulario se envíe normalmente

            // Aquí puedes agregar tu lógica de envío del formulario, por ejemplo, enviar los datos al servidor

            // Muestra el SweetAlert
            Swal.fire({
                title: "",
                text: "Registro guardado exotosamente",
                icon: "success"
            });
        });
    </script>





</body>
</html>
